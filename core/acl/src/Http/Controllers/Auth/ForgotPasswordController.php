<?php

namespace Botble\ACL\Http\Controllers\Auth;

use Assets;
use Botble\Base\Http\Controllers\BaseController;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends BaseController
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Sang Nguyen
     */
    public function showLinkRequestForm()
    {
        page_title()->setTitle(trans('acl::auth.forgot_password.title'));

        Assets::addJavascript(['jquery-validation']);
        Assets::addAppModule(['login']);
        return view('acl::auth.forgot-password');
    }

    /**
     * Get the response for a successful password reset link.
     *
     * @param  string $response
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function sendResetLinkResponse($response)
    {
        return back()->with('success_msg', trans($response));
    }
}
