let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass('./core/base/resources/assets/sass/core.scss', 'public/vendor/core/css')
    .sass('./core/base/resources/assets/sass/custom/admin-bar.scss', 'public/vendor/core/css')
    .sass('./core/acl/resources/assets/sass/my-account.scss', 'public/vendor/core/css');

mix
    .scripts(
        [
            './core/base/resources/assets/js/base/layouts.js',
            './core/base/resources/assets/js/script.js',
            './core/base/resources/assets/js/csrf.js'
        ], 'public/vendor/core/js/core.js');

mix
    .sass('./core/base/resources/assets/sass/base/themes/black.scss', 'public/vendor/core/css/themes')
    .sass('./core/base/resources/assets/sass/base/themes/default.scss', 'public/vendor/core/css/themes');

mix
    .js('./core/base/resources/assets/js/app_modules/editor.js', 'public/vendor/core/js/app_modules')
    .scripts(['./core/dashboard/resources/assets/js/app_modules/dashboard.js'], 'public/vendor/core/js/app_modules/dashboard.js')
    .js('./core/base/resources/assets/js/app_modules/datatables.js', 'public/vendor/core/js/app_modules')
    .scripts(['./core/acl/resources/assets/js/app_modules/profile.js'], 'public/vendor/core/js/app_modules/profile.js')
    .js('./plugins/blog/resources/assets/js/app_modules/tags.js', 'public/vendor/core/js/app_modules')
    .js('./core/slug/resources/assets/js/app_modules/slug.js', 'public/vendor/core/js/app_modules')
    .js('./core/acl/resources/assets/js/app_modules/feature.js', 'public/vendor/core/js/app_modules')
    .js('./core/acl/resources/assets/js/app_modules/role.js', 'public/vendor/core/js/app_modules')
    .js('./core/menu/resources/assets/js/app_modules/menu.js', 'public/vendor/core/js/app_modules')
    .js('./core/widget/resources/assets/js/app_modules/widget.js', 'public/vendor/core/js/app_modules')
    .js('./core/base/resources/assets/js/app_modules/plugin.js', 'public/vendor/core/js/app_modules')
    .js('./core/acl/resources/assets/js/app_modules/login.js', 'public/vendor/core/js/app_modules')
    .scripts('./vendor/proengsoft/laravel-jsvalidation/public/js/jsvalidation.js', 'public/vendor/core/js/app_modules/form-validation.js');

mix
    .sass('./core/media/resources/assets/sass/media.scss', 'public/vendor/core/media/css/media.css')
    .js('./core/media/resources/assets/js/media.js', 'public/vendor/core/media/js/media.js')
    .js('./core/media/resources/assets/js/jquery.addMedia.js', 'public/vendor/core/media/js/jquery.addMedia.js')
    .js('./core/media/resources/assets/js/integrate.js', 'public/vendor/core/media/js/integrate.js');

// Translation
mix.js('./plugins/translation/resources/assets/js/translation.js', 'public/vendor/core/plugins/translation/js');

// Backup
mix.js('./plugins/backup/resources/assets/js/backup.js', 'public/vendor/core/plugins/backup/js');

// Language
mix
    .scripts(['./plugins/language/resources/assets/js/language.js'], 'public/vendor/core/plugins/language/js/language.js')
    .scripts(['./plugins/language/resources/assets/js/language-global.js'], 'public/vendor/core/plugins/language/js/language-global.js')
    .scripts(['./plugins/language/resources/assets/js/language-public.js'], 'public/vendor/core/plugins/language/js/language-public.js')
    .sass('./plugins/language/resources/assets/sass/language.scss', 'public/vendor/core/plugins/language/css/language.css');

mix
    .sass('./plugins/facebook/resources/assets/sass/facebook.scss', 'public/vendor/core/plugins/facebook/css')
    .js('./plugins/facebook/resources/assets/js/facebook.js', 'public/vendor/core/plugins/facebook/js');

mix
    .sass('./plugins/gallery/resources/assets/sass/gallery.scss', 'public/vendor/core/plugins/gallery/css/gallery.css')
    .sass('./plugins/gallery/resources/assets/sass/object-gallery.scss', 'public/vendor/core/plugins/gallery/css/object-gallery.css')
    .scripts('./plugins/gallery/resources/assets/js/gallery.js', 'public/vendor/core/plugins/gallery/js/gallery.js')
    .scripts('./plugins/gallery/resources/assets/js/object-gallery.js', 'public/vendor/core/plugins/gallery/js/object-gallery.js');

mix
    .sass('./plugins/simple-slider/resources/assets/sass/simple-slider.scss', 'public/vendor/core/plugins/simple-slider/css/simple-slider.css')
    .scripts('./plugins/simple-slider/resources/assets/js/simple-slider.js', 'public/vendor/core/plugins/simple-slider/js/simple-slider.js');

mix
    .sass('./public/themes/lara-mag/assets/sass/lara-mag.scss', 'public/themes/lara-mag/assets/css/lara-mag.css');

mix
    .scripts(
        [
            './public/themes/lara-mag/assets/js/jquery.min.js',
            './public/themes/lara-mag/assets/js/custom.js',
            './public/themes/lara-mag/assets/js/jquery.fancybox.min.js'
        ], 'public/themes/lara-mag/assets/js/lara-mag.js');