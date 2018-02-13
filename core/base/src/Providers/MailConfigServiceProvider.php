<?php

namespace Botble\Base\Providers;

use Illuminate\Support\ServiceProvider;

class MailConfigServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        if (check_database_connection()) {
            $mail_config = [
                'driver' => setting('email_driver', config('mail.driver')),
                'host' => setting('email_host', config('mail.host')),
                'port' => (int)setting('email_port', config('mail.port')),
                'encryption' => setting('email_encryption', config('mail.encryption')),
                'username' => setting('email_username', config('mail.username')),
                'password' => setting('email_password', config('mail.password')),
                'from' => [
                    'address' => setting('email_from_address', config('mail.from.address')),
                    'name' => setting('email_from_name', config('mail.from.name')),
                ],
            ];
            config(['mail' => $mail_config]);
        }
    }
}