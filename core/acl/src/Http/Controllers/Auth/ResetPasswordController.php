<?php

namespace Botble\ACL\Http\Controllers\Auth;

use Assets;
use Botble\Base\Http\Controllers\BaseController;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

class ResetPasswordController extends BaseController
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo;

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->redirectTo = config('cms.admin_dir');
    }

    /**
     * @param Request $request
     * @param null $token
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function showResetForm(Request $request, $token = null)
    {
        page_title()->setTitle(trans('acl::auth.reset.title'));

        $email = $request->email;
        Assets::addJavascript(['jquery-validation']);
        Assets::addAppModule(['login']);
        return view('acl::auth.reset', compact('email', 'token'));
    }
}
