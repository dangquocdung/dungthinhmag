<?php

namespace Botble\ACL\Http\Middleware;

use Auth;
use Botble\ACL\Models\User;
use Closure;
use DashboardMenu;

class Authenticate
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Closure $next
     * @return mixed
     * @author Sang Nguyen
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest(route('access.login'));
            }
        }

        $route = $request->route()->getAction();
        $flag = array_get($route, 'permission', array_get($route, 'as'));

        /**
         * @var User $user
         */
        $user = Auth::user();
        if ($flag && !$user->hasPermission($flag)) {
            abort(401);
        }

        DashboardMenu::init($request->user());
        return $next($request);
    }
}
