<?php

return [
    'admin_dir' => env('ADMIN_DIR', 'admin'),
    'version' => env('VERSION', '2.3'),
    'plugin-default-img' => '/vendor/core/images/plugin.png',
    'plugin_path' => base_path() . '/plugins',
    'media-default-img' => '/vendor/core/images/default-image.jpg',
    'upload' => [
        'base_dir' => public_path('uploads'),
    ],
    'default-theme' => env('DEFAULT_THEME', 'default'),
    'base_name' => env('APP_NAME', 'Botble Technologies'),
    'logo' => '/vendor/core/images/logo_white.png',
    'favicon' => '/vendor/core/images/favicon.png',
    'editor' => [
        'ckeditor' => [
            'js' => [
                '/vendor/core/packages/ckeditor/ckeditor.js',
            ],
        ],
        'tinymce' => [
            'js' => [
                '/vendor/core/packages/tinymce/tinymce.min.js',
            ],
        ],
        'primary' => env('PRIMARY_EDITOR', 'ckeditor'),
    ],
    'email_template' => 'bases::system.email',
    'error_reporting' => [
        'via_email' => env('ERROR_REPORTING_VIA_EMAIL', false),
        'to' => null,
        'via_slack' => env('SLACK_REPORT_ENABLED', false),
        'ignored_bots' => [
            'googlebot',        // Googlebot
            'bingbot',          // Microsoft Bingbot
            'slurp',            // Yahoo! Slurp
            'ia_archiver',      // Alexa
        ],
    ],
    'enable_https_support' => env('ENABLE_HTTPS_SUPPORT', false),
    'enable_cache_dashboard_menu' => env('ENABLE_CACHE_DASHBOARD_MENU', false),
    'date_format' => [
        'date' => 'Y-m-d',
        'date_time' => 'Y-m-d H:i:s',
        'js' => [
            'date' => 'yyyy-mm-dd',
            'date_time' => 'yyyy-mm-dd H:i:s',
        ],
    ],
    'cache_site_map' => env('ENABLE_CACHE_SITE_MAP', false),
    'public_single_ending_url' => env('PUBLIC_SINGLE_ENDING_URL', null),
    'hide_admin_profile_in_sidebar' => env('ADMIN_HIDE_PROFILE_IN_SIDEBAR', true),
];
