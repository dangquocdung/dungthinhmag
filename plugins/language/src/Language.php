<?php

namespace Botble\Language;

use Artisan;
use Botble\ACL\Models\UserMeta;
use Botble\Language\Repositories\Interfaces\LanguageInterface;
use Botble\Language\Repositories\Interfaces\LanguageMetaInterface;
use Request;
use Schema;

class Language
{
    /**
     * @var LanguageInterface
     */
    protected $languageRepository;

    /**
     * Illuminate translator class.
     *
     * @var \Illuminate\Translation\Translator
     */
    protected $translator;

    /**
     * Illuminate router class.
     *
     * @var \Illuminate\Routing\Router
     */
    protected $router;

    /**
     * @var \Illuminate\Foundation\Application|mixed
     */
    protected $app;

    /**
     * @var
     */
    protected $baseUrl;

    /**
     * Default locale
     *
     * @var string
     */
    protected $defaultLocale;

    /**
     * Supported Locales
     *
     * @var array
     */
    protected $supportedLocales;

    /**
     * Current locale
     *
     * @var string
     */
    protected $currentLocale = false;

    /**
     * An array that contains all routes that should be translated
     *
     * @var array
     */
    protected $translatedRoutes = array();

    /**
     * Name of the translation key of the current route, it is used for url translations
     *
     * @var string
     */
    protected $routeName;

    /**
     * @var LanguageMetaInterface
     */
    protected $languageMetaRepository;

    /**
     * Language constructor.
     * @param LanguageInterface $languageRepository
     * @param LanguageMetaInterface $languageMetaRepository
     * @author Sang Nguyen
     * @since 2.0
     */
    public function __construct(LanguageInterface $languageRepository, LanguageMetaInterface $languageMetaRepository)
    {
        $this->languageRepository = $languageRepository;

        $this->app = app();

        $this->translator = $this->app['translator'];
        $this->router = $this->app['router'];

        if (check_database_connection() && Schema::hasTable('languages')) {
            $this->supportedLocales = $this->getSupportedLocales();

            $this->setDefaultLocale();

            $this->defaultLocale = $this->getDefaultLocale();
        }

        $this->languageMetaRepository = $languageMetaRepository;
    }

    /**
     * Return an array of all supported Locales
     *
     * @return array
     * @author Sang Nguyen
     */
    public function getSupportedLocales()
    {
        if (!empty($this->supportedLocales)) {
            return $this->supportedLocales;
        }

        $languages = $this->getActiveLanguage();

        $locales = [];
        foreach ($languages as $language) {
            if (!in_array($language->lang_id, json_decode(setting('language_hide_languages', '[]'), true))) {
                $locales[$language->lang_locale] = [
                    'lang_name' => $language->lang_name,
                    'lang_code' => $language->lang_code,
                    'lang_flag' => $language->lang_flag,
                    'lang_is_rtl' => $language->lang_is_rtl,
                    'lang_is_default' => $language->lang_is_default,
                ];
            }
        }

        $this->supportedLocales = $locales;

        return $locales;
    }

    /**
     * Set and return supported locales
     *
     * @param  array $locales Locales that the App supports
     * @author Marc Cámara <mcamara88@gmail.com>
     */
    public function setSupportedLocales($locales)
    {
        $this->supportedLocales = $locales;
    }

    /**
     * @param array $select
     * @return mixed
     * @author Sang Nguyen
     * @since 2.0
     */
    public function getActiveLanguage($select = ['*'])
    {
        return $this->languageRepository->getActiveLanguage($select);
    }

    /**
     * Returns default locale
     *
     * @return string
     * @author Sang Nguyen
     */
    public function getDefaultLocale()
    {
        return $this->defaultLocale;
    }

    /**
     * @return void
     * @author Sang Nguyen
     */
    public function setDefaultLocale()
    {
        foreach ($this->supportedLocales as $key => $language) {
            if ($language['lang_is_default']) {
                $this->defaultLocale = $key;
            }
        }
        if (empty($this->defaultLocale)) {
            $this->defaultLocale = config('app.locale');
        }
    }

    /**
     * @author Sang Nguyen
     * @since 2.0
     */
    public function screenUsingMultiLanguage()
    {
        return apply_filters(LANGUAGE_FILTER_MODEL_USING_MULTI_LANGUAGE, config('language.supported', []));
    }

    /**
     * @return string
     * @author Sang Nguyen
     * @since 2.1
     */
    public function getHiddenLanguageText()
    {
        $hidden = json_decode(setting('language_hide_languages', '[]'), true);
        $text = '';
        $languages = $this->getActiveLanguage();
        if (!empty($languages)) {
            $languages = $languages->pluck('lang_name', 'lang_id')->all();
        } else {
            $languages = [];
        }
        foreach ($hidden as $item) {
            if (array_key_exists($item, $languages)) {
                if (!empty($text)) {
                    $text .= ', ';
                }
                $text .= $languages[$item];
            }
        }
        return $text;
    }

    /**
     * @param $id
     * @param $unique_key
     * @return mixed
     * @author Sang Nguyen
     * @since 2.0
     */
    public function getRelatedLanguageItem($id, $unique_key)
    {
        $meta = $this->languageMetaRepository->getModel()->where('lang_meta_origin', '=', $unique_key);
        if ($id != Request::input('ref_from')) {
            $meta = $meta->where('lang_meta_content_id', '!=', $id);
        }
        return $meta->pluck('lang_meta_content_id', 'lang_meta_code')->all();
    }

    /**
     * Set and return current locale
     *
     * @param  string $locale Locale to set the App to (optional)
     * @return string Returns locale (if route has any) or null (if route does not have a locale)
     * @author Marc Cámara <mcamara88@gmail.com>
     */
    public function setLocale($locale = null)
    {
        if (!check_database_connection() || !Schema::hasTable('languages')) {
            return config('app.locale');
        }
        if (empty($locale) || !is_string($locale)) {
            // If the locale has not been passed through the function
            // it tries to get it from the first segment of the url
            $locale = request()->segment(1);
        }

        if (array_key_exists($locale, $this->supportedLocales)) {
            if ($locale != $this->currentLocale) {
                Artisan::call('cache:clear');
            }
            $this->currentLocale = $locale;
        } else {
            // if the first segment/locale passed is not valid
            // the system would ask which locale have to take
            // it could be taken by the browser
            // depending on your configuration

            $locale = null;

            // if we reached this point and hideDefaultLocaleInURL is true
            // we have to assume we are routing to a defaultLocale route.
            if ($this->hideDefaultLocaleInURL()) {
                $this->currentLocale = $this->defaultLocale;
            }
            // but if hideDefaultLocaleInURL is false, we have
            // to retrieve it from the browser...
            else {
                $this->currentLocale = $this->getCurrentLocale();
            }
        }

        $this->app->setLocale($this->currentLocale);

        return $locale;
    }

    /**
     * Returns the translation key for a given path
     *
     * @return boolean Returns value of hideDefaultLocaleInURL in config.
     * @author Marc Cámara <mcamara88@gmail.com>
     */
    public function hideDefaultLocaleInURL()
    {
        return setting('language_hide_default', config('language.hideDefaultLocaleInURL'));
    }

    /**
     * Returns current language
     *
     * @return string current language
     * @author Marc Cámara <mcamara88@gmail.com>
     */
    public function getCurrentLocale()
    {
        if ($this->currentLocale) {
            return $this->currentLocale;
        }

        if ($this->useAcceptLanguageHeader()) {
            $negotiator = new LanguageNegotiator($this->defaultLocale, $this->getSupportedLocales(), request());

            return $negotiator->negotiateLanguage();
        }

        // or get application default language
        return config('app.locale');
    }

    /**
     * Returns the translation key for a given path
     *
     * @return boolean Returns value of useAcceptLanguageHeader in config.
     * @author Marc Cámara <mcamara88@gmail.com>
     */
    protected function useAcceptLanguageHeader()
    {
        return config('language.useAcceptLanguageHeader');
    }

    /**
     * Returns an URL adapted to $locale or current locale
     *
     * @param  string $url URL to adapt. If not passed, the current url would be taken.
     * @param  string|boolean $locale Locale to adapt, false to remove locale
     *
     * @return string URL translated
     * @author Marc Cámara <mcamara88@gmail.com>
     */
    public function localizeURL($url = null, $locale = null)
    {
        return $this->getLocalizedURL($locale, $url);
    }

    /**
     * Returns an URL adapted to $locale
     *
     * @param  string|boolean $locale Locale to adapt, false to remove locale
     * @param  string|false $url URL to adapt in the current language. If not passed, the current url would be taken.
     * @param  array $attributes Attributes to add to the route, if empty, the system would try to extract them from the url.
     *
     * @return string|false URL translated, False if url does not exist
     * @author Marc Cámara <mcamara88@gmail.com>
     * @modified Sang Nguyen
     */
    public function getLocalizedURL($locale = null, $url = null, $attributes = [])
    {
        if (empty($locale)) {
            $locale = $this->getCurrentLocale();
        }

        if (empty($attributes)) {
            $attributes = $this->extractAttributes($url, $locale);
        }

        if (empty($url)) {
            if (!empty($this->routeName)) {
                return $this->getURLFromRouteNameTranslated($locale, $this->routeName, $attributes);
            }

            $url = request()->fullUrl();

        }

        if ($locale && $translatedRoute = $this->findTranslatedRouteByUrl($url, $attributes, $this->currentLocale)) {
            return $this->getURLFromRouteNameTranslated($locale, $translatedRoute, $attributes);
        }

        $base_path = request()->getBaseUrl();
        $parsed_url = parse_url($url);
        $url_locale = $this->getDefaultLocale();

        if (!$parsed_url || empty($parsed_url['path'])) {
            $path = $parsed_url['path'] = '';
        } else {
            $parsed_url['path'] = str_replace($base_path, '', '/' . ltrim($parsed_url['path'], '/'));
            $path = $parsed_url['path'];
            foreach (array_keys($this->getSupportedLocales()) as $localeCode) {
                $parsed_url['path'] = preg_replace('%^/?' . $localeCode . '/%', '$1', $parsed_url['path']);
                if ($parsed_url['path'] !== $path) {
                    $url_locale = $localeCode;
                    break;
                }

                $parsed_url['path'] = preg_replace('%^/?' . $localeCode . '$%', '$1', $parsed_url['path']);
                if ($parsed_url['path'] !== $path) {
                    $url_locale = $localeCode;
                    break;
                }
            }
        }

        $parsed_url['path'] = ltrim($parsed_url['path'], '/');

        if ($translatedRoute = $this->findTranslatedRouteByPath($parsed_url['path'], $url_locale)) {
            return $this->getURLFromRouteNameTranslated($locale, $translatedRoute, $attributes);
        }

        if ($this->hideDefaultLocaleInURL()) {
            if (!empty($locale)) {
                $parsed_url['path'] = $locale . '/' . ltrim(ltrim($base_path, '/') . '/' . $parsed_url['path'], '/');
            }
            if ($this->getCurrentLocale() == $this->getDefaultLocale()) {
                $parsed_url['path'] = str_replace($this->getCurrentLocale() . '/', '/', $parsed_url['path']);
            }
        } else {
            if (!empty($locale) && ($locale != $this->defaultLocale || !$this->hideDefaultLocaleInURL())) {
                $parsed_url['path'] = $locale . '/' . ltrim($parsed_url['path'], '/');
            }
            $parsed_url['path'] = ltrim(ltrim($base_path, '/') . '/' . $parsed_url['path'], '/');
        }

        //Make sure that the pass path is returned with a leading slash only if it come in with one.
        if (starts_with($path, '/') === true) {
            $parsed_url['path'] = '/' . $parsed_url['path'];
        }
        $parsed_url['path'] = rtrim($parsed_url['path'], '/');

        $url = $this->unparseUrl($parsed_url);

        if ($this->checkUrl($url)) {
            return $url;
        }

        return $this->createUrlFromUri($url);
    }

    /**
     * Extract attributes for current url
     *
     * @param bool|false|null|string $url to extract attributes, if not present, the system will look for attributes in the current call
     *
     * @param string $locale
     * @return array Array with attributes
     * @author Marc Cámara <mcamara88@gmail.com>
     */
    protected function extractAttributes($url = false, $locale = '')
    {
        if (!empty($url)) {
            $attributes = [];
            $parse = parse_url($url);
            if (isset($parse['path'])) {
                $parse = explode('/', $parse['path']);
            } else {
                $parse = [];
            }
            $url = [];
            foreach ($parse as $segment) {
                if (!empty($segment)) {
                    $url[] = $segment;
                }
            }

            foreach ($this->router->getRoutes() as $route) {
                $path = $route->getUri();
                if (!preg_match('/{[\w]+}/', $path)) {
                    continue;
                }

                $path = explode('/', $path);
                $index = 0;

                $match = true;
                foreach ($path as $key => $segment) {
                    if (isset($url[$index])) {
                        if ($segment === $url[$index]) {
                            $index++;
                            continue;
                        }
                        if (preg_match('/{[\w]+}/', $segment)) {
                            // must-have parameters
                            $attribute_name = preg_replace(['/}/', '/{/', '/\?/'], '', $segment);
                            $attributes[$attribute_name] = $url[$index];
                            $index++;
                            continue;
                        }
                        if (preg_match('/{[\w]+\?}/', $segment)) {
                            // optional parameters
                            if (!isset($path[$key + 1]) || $path[$key + 1] !== $url[$index]) {
                                // optional parameter taken
                                $attribute_name = preg_replace(['/}/', '/{/', '/\?/'], '', $segment);
                                $attributes[$attribute_name] = $url[$index];
                                $index++;
                                continue;
                            }

                        }
                    } else if (!preg_match('/{[\w]+\?}/', $segment)) {
                        // no optional parameters but no more $url given
                        // this route does not match the url
                        $match = false;
                        break;
                    }
                }

                if (isset($url[$index + 1])) {
                    $match = false;
                }

                if ($match) {
                    return $attributes;
                }
            }

        } else {
            if (!$this->router->current()) {
                return [];
            }

            $attributes = $this->router->current()->parameters();
            $response = event('routes.translation', [$locale, $attributes]);

            if (!empty($response)) {
                $response = array_shift($response);
            }

            if (is_array($response)) {
                $attributes = array_merge($attributes, $response);
            }
        }


        return $attributes;
    }

    /**
     * Returns an URL adapted to the route name and the locale given
     *
     * @param  string|boolean $locale Locale to adapt
     * @param  string $transKeyName Translation key name of the url to adapt
     * @param  array $attributes Attributes for the route (only needed if transKeyName needs them)
     *
     * @return string|false URL translated
     * @author Marc Cámara <mcamara88@gmail.com>
     */
    public function getURLFromRouteNameTranslated($locale, $transKeyName, $attributes = array())
    {

        if (!is_string($locale)) {
            $locale = $this->getDefaultLocale();
        }

        $route = '';

        if (!($locale === $this->defaultLocale && $this->hideDefaultLocaleInURL())) {
            $route = '/' . $locale;
        }
        if (is_string($locale) && $this->translator->has($transKeyName, $locale)) {
            $translation = $this->translator->trans($transKeyName, [], '', $locale);
            $route .= '/' . $translation;

            $route = $this->substituteAttributesInRoute($attributes, $route);

        }

        if (empty($route)) {
            // This locale does not have any key for this route name
            return false;
        }

        return rtrim($this->createUrlFromUri($route));


    }

    /**
     * Change route attributes for the ones in the $attributes array
     *
     * @param $attributes array Array of attributes
     * @param string $route string route to substitute
     * @return string route with attributes changed
     * @author Marc Cámara <mcamara88@gmail.com>
     */
    protected function substituteAttributesInRoute($attributes, $route)
    {
        foreach ($attributes as $key => $value) {
            $route = str_replace('{' . $key . '}', $value, $route);
            $route = str_replace('{' . $key . '?}', $value, $route);
        }

        // delete empty optional arguments that are not in the $attributes array
        $route = preg_replace('/\/{[^)]+\?}/', '', $route);

        return $route;
    }

    /**
     * Create an url from the uri
     * @param    string $uri Uri
     *
     * @return  string Url for the given uri
     * @author Marc Cámara <mcamara88@gmail.com>
     */
    public function createUrlFromUri($uri)
    {
        $uri = ltrim($uri, '/');

        if (empty($this->baseUrl)) {
            return app('url')->to($uri);
        }

        return $this->baseUrl . $uri;
    }

    /**
     * Returns the translated route for an url and the attributes given and a locale
     *
     * @param  string|false|null $url Url to check if it is a translated route
     * @param  array $attributes Attributes to check if the url exists in the translated routes array
     * @param  string $locale Language to check if the url exists
     *
     * @return string|false Key for translation, false if not exist
     * @author Marc Cámara <mcamara88@gmail.com>
     */
    protected function findTranslatedRouteByUrl($url, $attributes, $locale)
    {
        if (empty($url)) {
            return false;
        }

        // check if this url is a translated url
        foreach ($this->translatedRoutes as $translatedRoute) {
            $routeName = $this->getURLFromRouteNameTranslated($locale, $translatedRoute, $attributes);

            if ($this->getNonLocalizedURL($routeName) == $this->getNonLocalizedURL($url)) {
                return $translatedRoute;
            }
        }
        return false;
    }

    /**
     * It returns an URL without locale (if it has it)
     * Convenience function wrapping getLocalizedURL(false)
     *
     * @param  string|false $url URL to clean, if false, current url would be taken
     *
     * @return string URL with no locale in path
     * @author Marc Cámara <mcamara88@gmail.com>
     */
    public function getNonLocalizedURL($url = null)
    {
        return $this->getLocalizedURL(false, $url);
    }

    /**
     * Returns the translated route for the path and the url given
     *
     * @param  string $path Path to check if it is a translated route
     * @param  string $url_locale Language to check if the path exists
     *
     * @return string|false Key for translation, false if not exist
     * @author Marc Cámara <mcamara88@gmail.com>
     */
    protected function findTranslatedRouteByPath($path, $url_locale)
    {
        // check if this url is a translated url
        foreach ($this->translatedRoutes as $translatedRoute) {
            if ($this->translator->trans($translatedRoute, [], '', $url_locale) == rawurldecode($path)) {
                return $translatedRoute;
            }
        }
        return false;
    }

    /**
     * Build URL using array data from parse_url
     *
     * @param array|false $parsed_url Array of data from parse_url function
     *
     * @return string Returns URL as string.
     * @author Marc Cámara <mcamara88@gmail.com>
     */
    protected function unparseUrl($parsed_url)
    {
        if (empty($parsed_url)) {
            return '';
        }

        $url = '';
        $url .= isset($parsed_url['scheme']) ? $parsed_url['scheme'] . '://' : '';
        $url .= isset($parsed_url['host']) ? $parsed_url['host'] : '';
        $url .= isset($parsed_url['port']) ? ':' . $parsed_url['port'] : '';
        $user = isset($parsed_url['user']) ? $parsed_url['user'] : '';
        $pass = isset($parsed_url['pass']) ? ':' . $parsed_url['pass'] : '';
        $url .= $user . (($user || $pass) ? $pass . '@' : '');

        if (!empty($url)) {
            $url .= isset($parsed_url['path']) ? '/' . ltrim($parsed_url['path'], '/') : '';
        } else {
            $url .= isset($parsed_url['path']) ? $parsed_url['path'] : '';
        }

        $url .= isset($parsed_url['query']) ? '?' . $parsed_url['query'] : '';
        $url .= isset($parsed_url['fragment']) ? '#' . $parsed_url['fragment'] : '';

        return $url;
    }

    /**
     * Returns true if the string given is a valid url
     *
     * @param  string $url String to check if it is a valid url
     *
     * @return boolean Is the string given a valid url?
     * @author Marc Cámara <mcamara88@gmail.com>
     */
    protected function checkUrl($url)
    {
        return filter_var($url, FILTER_VALIDATE_URL);
    }

    /**
     * Returns current locale name
     *
     * @return string current locale name
     * @author Marc Cámara <mcamara88@gmail.com>
     */
    public function getCurrentLocaleName()
    {
        if (empty($this->supportedLocales)) {
            return null;
        }
        return $this->supportedLocales[$this->getCurrentLocale()]['lang_name'];
    }

    /**
     * Returns current text direction
     *
     * @return string current locale name
     * @author Sang Nguyen
     */
    public function getCurrentLocaleRTL()
    {
        if (empty($this->supportedLocales)) {
            return false;
        }
        return $this->supportedLocales[$this->getCurrentLocale()]['lang_is_rtl'];
    }

    /**
     * Returns current locale code
     *
     * @return string current locale code
     * @author Marc Cámara <mcamara88@gmail.com>
     */
    public function getCurrentLocaleCode()
    {
        if (empty($this->supportedLocales)) {
            return null;
        }
        return $this->supportedLocales[$this->getCurrentLocale()]['lang_code'];
    }

    /**
     * Returns current locale code
     *
     * @return string current locale code
     * @author Marc Cámara <mcamara88@gmail.com>
     */
    public function getDefaultLocaleCode()
    {
        return $this->supportedLocales[$this->getDefaultLocale()]['lang_code'];
    }

    /**
     * Returns current locale code
     *
     * @return string current locale code
     * @author Marc Cámara <mcamara88@gmail.com>
     */
    public function getCurrentLocaleFlag()
    {
        if (empty($this->supportedLocales)) {
            return null;
        }
        return $this->supportedLocales[$this->getCurrentLocale()]['lang_flag'];
    }

    /**
     * Returns supported languages language key
     *
     * @return array keys of supported languages
     * @author Marc Cámara <mcamara88@gmail.com>
     */
    public function getSupportedLanguagesKeys()
    {
        return array_keys($this->supportedLocales);
    }

    /**
     * Check if Locale exists on the supported locales array
     *
     * @param string|boolean $locale string|bool Locale to be checked
     * @return boolean is the locale supported?
     * @author Marc Cámara <mcamara88@gmail.com>
     */
    public function checkLocaleInSupportedLocales($locale)
    {
        $locales = $this->getSupportedLocales();
        if ($locale !== false && empty($locales[$locale])) {
            return false;
        }
        return true;
    }

    /**
     * Set current route name
     * @param string $routeName current route name
     * @author Marc Cámara <mcamara88@gmail.com>
     */
    public function setRouteName($routeName)
    {
        $this->routeName = $routeName;
    }

    /**
     * Translate routes and save them to the translated routes array (used in the localize route filter)
     *
     * @param  string $routeName Key of the translated string
     *
     * @return string Translated string
     * @author Marc Cámara <mcamara88@gmail.com>
     */
    public function transRoute($routeName)
    {
        if (!in_array($routeName, $this->translatedRoutes)) {
            $this->translatedRoutes[] = $routeName;
        }

        return $this->translator->trans($routeName);
    }

    /**
     * Returns the translation key for a given path
     *
     * @param  string $path Path to get the key translated
     *
     * @return string|false Key for translation, false if not exist
     * @author Marc Cámara <mcamara88@gmail.com>
     */
    public function getRouteNameFromAPath($path)
    {
        $attributes = $this->extractAttributes($path);

        $path = str_replace(url('/'), '', $path);
        if ($path[0] !== '/') {
            $path = '/' . $path;
        }
        $path = str_replace('/' . $this->currentLocale . '/', '', $path);
        $path = trim($path, '/');

        foreach ($this->translatedRoutes as $route) {
            if ($this->substituteAttributesInRoute($attributes, $this->translator->trans($route)) === $path) {
                return $route;
            }
        }

        return false;
    }

    /**
     * Sets the base url for the site
     * @param string $url Base url for the site
     * @author Marc Cámara <mcamara88@gmail.com>
     */
    public function setBaseUrl($url)
    {
        if (substr($url, -1) != '/') {
            $url .= '/';
        }

        $this->baseUrl = $url;
    }

    /**
     * Returns translated routes
     *
     * @return array translated routes
     * @author Marc Cámara <mcamara88@gmail.com>
     */
    protected function getTranslatedRoutes()
    {
        return $this->translatedRoutes;
    }

    /**
     * @param array $select
     * @return mixed
     * @author Sang Nguyen
     */
    public function getCurrentDataLanguage($select = ['*'])
    {
        $language = UserMeta::getMeta('languages_current_data_language');
        if (empty($language)) {
            $default_language = Language::getDefaultLanguage($select);
            if (!empty($default_language)) {
                $language = $default_language->lang_code;
                UserMeta::setMeta('languages_current_data_language', $language);
            }
        }
        return $language;
    }

    /**
     * @param array $select
     * @return mixed
     * @author Sang Nguyen
     * @since 2.2
     */
    public function getDefaultLanguage($select = ['*'])
    {
        return $this->languageRepository->getDefaultLanguage($select);
    }

    /**
     * @param string $screen
     * @param \Illuminate\Http\Request $request
     * @param \Eloquent|false $data
     * @return bool
     */
    public function saveLanguage($screen, $request, $data)
    {
        $default_language = Language::getDefaultLanguage(['lang_id']);
        if (!empty($default_language)) {
            if ($data != false && in_array($screen, Language::screenUsingMultiLanguage())) {
                if ($request->input('language')) {
                    $unique_key = null;
                    $meta = $this->languageMetaRepository->getFirstBy([
                            'lang_meta_content_id' => $data->id,
                            'lang_meta_reference' => $screen,
                        ]
                    );
                    if (!$meta && !$request->input('ref_from')) {
                        $unique_key = md5($data->id . $screen . time());
                    } elseif ($request->input('ref_from')) {
                        $unique_key = $this->languageMetaRepository->getFirstBy([
                                'lang_meta_content_id' => $request->input('ref_from'),
                                'lang_meta_reference' => $screen,
                            ]
                        )->lang_meta_origin;
                    }

                    if (!$meta) {
                        $meta = $this->languageMetaRepository->getModel();
                        $meta->lang_meta_content_id = $data->id;
                        $meta->lang_meta_reference = $screen;
                        $meta->lang_meta_origin = $unique_key;
                    }

                    $meta->lang_meta_code = $request->input('language');
                    $this->languageMetaRepository->createOrUpdate($meta);
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * @param string $screen
     * @param \Eloquent|false $data
     */
    public function deleteLanguage($screen, $data)
    {
        $default_language = Language::getDefaultLanguage(['lang_id']);
        if (!empty($default_language)) {
            if (in_array($screen, Language::screenUsingMultiLanguage())) {
                $this->languageMetaRepository->deleteBy([
                    'lang_meta_content_id' => $data->id,
                    'lang_meta_reference' => $screen,
                ]);
                return true;
            }
        }
        return false;
    }
}