<?php

namespace Botble\Facebook\Http\Controllers;

use Botble\Base\Http\Controllers\BaseController;
use Botble\Facebook\Http\Requests\UpdateSettingsRequest;
use Carbon\Carbon;
use Exception;
use SammyK\LaravelFacebookSdk\LaravelFacebookSdk;

class FacebookController extends BaseController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Sang Nguyen
     */
    public function getSettings()
    {
        page_title()->setTitle(__('Facebook settings'));

        $list_pages = [];
        $pages = setting('facebook_list_pages', []);
        if (!empty($pages)) {
            $pages = json_decode($pages, true);
            foreach ($pages as $page) {
                $list_pages[$page['id']] = $page['name'];
            }
        }

        return view('facebook::settings', compact('list_pages'));
    }

    /**
     * @param UpdateSettingsRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @author Sang Nguyen
     */
    public function postSettings(UpdateSettingsRequest $request)
    {
        foreach ($request->input('settings', []) as $key => $value) {
            setting()->set($key, $value);
        }

        if (setting('facebook_access_token') == null) {
            setting()->set('facebook_token_expire_date');
            setting()->set('facebook_list_pages', json_encode([]));
        }

        setting()->save();

        return redirect()->route('facebook.settings')->with('success_msg', trans('bases::notices.update_success_message'));
    }

    /**
     * @param LaravelFacebookSdk $facebook
     * @return \Illuminate\Http\RedirectResponse
     * @author Sang Nguyen
     */
    public function getAccessToken(LaravelFacebookSdk $facebook)
    {
        return redirect()->to($facebook->getLoginUrl(['email', 'manage_pages', 'publish_pages', 'public_profile'], route('facebook.callback')));
    }

    /**
     * @param LaravelFacebookSdk $facebook
     * @return \Illuminate\Http\RedirectResponse
     * @author Sang Nguyen
     */
    public function getHandleCallback(LaravelFacebookSdk $facebook)
    {
        // Obtain an access token.
        try {
            $token = $facebook->getAccessTokenFromRedirect(route('facebook.callback'));
        } catch (Exception $ex) {
            return redirect()->route('facebook.settings')->with('error_msg', $ex->getMessage());
        }

        // Access token will be null if the user denied the request
        // or if someone just hit this URL outside of the OAuth flow.
        if (!$token) {
            // Get the redirect helper
            $helper = $facebook->getRedirectLoginHelper();

            if (!$helper->getError()) {
                return redirect()->route('facebook.settings')->with('error_msg', 'Unauthorized action.');
            }
            return redirect()->route('facebook.settings')->with('error_msg', 'You did not approve Facebook app to get token');
        }

        if (!$token->isLongLived()) {
            // OAuth 2.0 client handler
            $oauth_client = $facebook->getOAuth2Client();

            // Extend the access token.
            try {
                $token = $oauth_client->getLongLivedAccessToken($token);
            } catch (Exception $ex) {
                return redirect()->route('facebook.settings')->with('error_msg', $ex->getMessage());
            }
        }

        try {
            $pages = $facebook->get('/me/accounts', $token)->getBody();
        } catch (Exception $ex) {
            return redirect()->route('facebook.settings')->with('error_msg', $ex->getMessage());
        }

        $facebook->setDefaultAccessToken($token);

        setting()->set('facebook_access_token', $token);
        setting()->set('facebook_list_pages', null);
        if (!empty($pages)) {
            $pages = array_get(json_decode($pages, true), 'data', []);
            if (count($pages) > 0) {
                setting()->set('facebook_list_pages', json_encode($pages));
                if (setting('facebook_page_id') == null) {
                    setting()->set('facebook_page_id', $pages[0]['id']);
                }
            }
        }
        setting()->set('facebook_token_expire_date', Carbon::now()->addDays(60)->getTimestamp());
        setting()->save();
        return redirect()->route('facebook.settings')->with('success_msg', __('Get Facebook access token successfully!'));
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     * @author Sang Nguyen
     */
    public function getRemoveAccessToken()
    {
        setting()->set('facebook_access_token');
        setting()->set('facebook_token_expire_date');
        setting()->set('facebook_list_pages', json_encode([]));
        setting()->save();

        return redirect()->route('facebook.settings')->with('success_msg', trans('bases::notices.update_success_message'));
    }
}