<?php

namespace Botble\Setting\Http\Controllers;

use Botble\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Setting; 

class SettingController extends BaseController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Sang Nguyen
     */
    public function getOptions()
    {
        page_title()->setTitle(trans('settings::setting.title'));

        $settings = config('settings.base', []);
        return view('settings::index', compact('settings'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @author Sang Nguyen
     */
    public function postEdit(Request $request)
    {
        $settings = config('settings.base', []);

        foreach ($settings as $tab) {
            foreach ($tab['settings'] as $setting) {
                $key = $setting['attributes']['name'];
                Setting::set($key, $request->input($key, 0));
            }
        }

        Setting::save();
        if ($request->input('submit') === 'save') {
            return redirect()->route('settings.options')->with('success_msg', trans('bases::notices.update_success_message'));
        } else {
            return redirect()->back()->with('success_msg', trans('bases::notices.update_success_message'));
        }
    }

    public function getEmailConfig()
    {
        $email_config = config('email', []);
       
        return view('settings::email', compact('email_config'));
    }

    public function postEditEmailConfig(Request $request)
    {
        $email_config = config('email', []);

        foreach ($email_config as $tab) {
            foreach ($tab['settings'] as $setting) {
                $key = $setting['attributes']['name'];
                Setting::set($key, $request->input($key, 0));
            }
        }

        Setting::save();
        if ($request->input('submit') === 'save') {
            return redirect()->route('settings.email')->with('success_msg', trans('bases::notices.update_success_message'));
        } else {
            return redirect()->back()->with('success_msg', trans('bases::notices.update_success_message'));
        }
    }
}
