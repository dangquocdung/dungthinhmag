<?php

namespace Botble\ACL\Http\Controllers;

use AclManager;
use Auth;
use Botble\ACL\Http\Requests\AcceptInviteRequest;
use Botble\ACL\Repositories\Interfaces\InviteInterface;
use Botble\ACL\Repositories\Interfaces\UserInterface;
use Botble\ACL\Services\AcceptInviteService;
use Botble\Base\Http\Controllers\BaseController;
use Exception;
use Illuminate\Http\Request;
use Socialite;

class AuthController extends BaseController
{
    /**
     * @var UserInterface
     */
    protected $userRepository;

    /**
     * @var InviteInterface
     */
    protected $inviteRepository;

    /**
     * UserController constructor.
     * @param UserInterface $userRepository
     * @param InviteInterface $inviteRepository
     */
    public function __construct(
        UserInterface $userRepository,
        InviteInterface $inviteRepository
    )
    {
        $this->userRepository = $userRepository;
        $this->inviteRepository = $inviteRepository;
    }

    /**
     * Redirect the user to the {provider} authentication page.
     *
     * @param $provider
     * @return mixed
     * @author Sang Nguyen
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from {provider}.
     * @param $provider
     * @return \Illuminate\Http\RedirectResponse
     * @author Sang Nguyen
     */
    public function handleProviderCallback($provider)
    {
        try {
            /**
             * @var \Laravel\Socialite\AbstractUser $oAuth
             */
            $oAuth = Socialite::driver($provider)->user();
        } catch (Exception $ex) {
            return redirect()->route('access.login')->with('error_msg', $ex->getMessage());
        }

        $user = $this->userRepository->getFirstBy(['email' => $oAuth->getEmail()]);

        if ($user) {
            if (!AclManager::getActivationRepository()->completed($user)) {
                return redirect()->back()->with('error_msg', trans('acl::auth.login.not_active'));
            }

            Auth::login($user, true);
            return redirect()->route('dashboard.index')->with('success_msg', trans('acl::auth.login.success'));
        }
        return redirect()->route('access.login')->with('error_msg', trans('acl::auth.login.dont_have_account'));
    }

    /**
     * Function that fires when a user accepts an invite.
     *
     * @param string $token Generated token
     * @return \Illuminate\Http\RedirectResponse
     * @author Sang Nguyen
     */
    public function getAcceptInvite($token)
    {
        page_title()->setTitle(trans('acl::auth.accept_invite'));

        if (empty($token)) {
            return redirect()->route('dashboard.index')
                ->with('error_msg', trans('acl::users.invite_not_exist'));
        }

        $invite = $this->inviteRepository->getFirstBy([
            'token' => $token,
            'accepted' => false,
        ]);

        if (!empty($invite)) {
            return view('acl::auth.invite', compact('token'));
        }
        return view('acl::auth.invite', [
            'error_msg' => trans('acl::users.invite_not_exist'),
        ]);
    }

    /**
     * @param AcceptInviteRequest|Request $request
     * @param AcceptInviteService $service
     * @return \Illuminate\Http\RedirectResponse
     * @author Sang Nguyen
     */
    public function postAcceptInvite(AcceptInviteRequest $request, AcceptInviteService $service)
    {
        $result = $service->execute($request);

        if ($result instanceof Exception) {
            return redirect()->back()->with('error_msg', $result->getMessage());
        }
        return redirect()->route('dashboard.index')->with('success_msg', trans('acl::users.accept_invite_success'));
    }
}
