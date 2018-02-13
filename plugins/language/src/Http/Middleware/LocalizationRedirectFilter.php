<?php

namespace Botble\Language\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Language;

class LocalizationRedirectFilter
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     * @author Marc Cámara <mcamara88@gmail.com>
     */
    public function handle($request, Closure $next)
    {
        $currentLocale = Language::getCurrentLocale();
        $defaultLocale = Language::getDefaultLocale();
        $params = explode('/', $request->path());

        if (count($params) > 0) {
            $localeCode = $params[0];
            $locales = Language::getSupportedLocales();
            $hideDefaultLocale = Language::hideDefaultLocaleInURL();
            $redirection = false;

            if (!empty($locales[$localeCode])) {
                if ($localeCode === $defaultLocale && $hideDefaultLocale) {
                    $redirection = Language::getNonLocalizedURL();
                }
            } elseif ($currentLocale !== $defaultLocale || !$hideDefaultLocale) {
                // If the current url does not contain any locale
                // The system redirect the user to the very same url "localized"
                // we use the current locale to redirect him
                $redirection = Language::getLocalizedURL(session('language'), $request->fullUrl());
            }

            if ($redirection) {
                // Save any flashed data for redirect
                app('session')->reflash();

                return new RedirectResponse($redirection, 302, ['Vary' => 'Accept-Language']);
            }
        }

        return $next($request);
    }
}
