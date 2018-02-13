### Botble CMS
A platform based on Laravel Framework.

## Documents

Offical document for Botble CMS: https://docs.botble.com/cms

In this projects, I use the latest Laravel version (currently 5.5). Please go to laravel documentation page for more information.

## Requirement

- Apache, nginx, or another compatible web server.
- PHP >= 7.0.0 >> Higher
- MySQL Database server
- OpenSSL PHP Extension
- Mbstring PHP Extension
- Exif PHP Extension
- Fileinfo Extension
- Module Re_write server
- PHP_CURL Module Enable

## Installation
### Installation with sample data

* Import sample database from `database.sql`
  - Default Admin URL `/admin`
  - Default username and password is `botble` - `159357`
* Create `.env` file from `.env-example` and update your configuration
* Run your app on browser

### Installation without sample data

* Create `.env` file from `.env-example` and update your configuration
* Run `php artisan migrate:fresh` to create basic database.
* Run `php artisan db:seed --class="Botble\Base\Seeds\BaseSeeder"` to create base data.
* Run `php artisan user:create` to create your super user.
* Run your app on browser
* (Optional) Run `php artisan install:sample-data` to install sample data for default themes.

## Note

This site can only be run at domain name, not folder link.

On your localhost, setting virtual host. Something like `http://cms.local` is ok. 

Cannot use as `http://localhost/cms/...`.

Please remove `public` in your domain also, you can point your domain to `public` folder

or use `.httaccess` (http://stackoverflow.com/questions/23837933/how-can-i-remove-public-index-php-in-the-url-generated-laravel)

Follow these steps to see how to config virtual host: `/docs/2. Setup vitual host`.

Well done! Now, you can login to the dashboard by access to your_domain_site/admin.

```
Username: botble
Password: 159357
```

Enjoy!
