<?php

namespace Botble\Analytics;

use Cache;
use Google_Client;
use Google_Service_Analytics;
use Illuminate\Contracts\Cache\Repository;
use Madewithlove\IlluminatePsrCacheBridge\Laravel\CacheItemPool;

class AnalyticsClientFactory
{
    /**
     * @param array $analyticsConfig
     * @return AnalyticsClient
     */
    public static function createForConfig(array $analyticsConfig): AnalyticsClient
    {
        $authenticatedClient = self::createAuthenticatedGoogleClient($analyticsConfig);

        $googleService = new Google_Service_Analytics($authenticatedClient);

        return self::createAnalyticsClient($analyticsConfig, $googleService);
    }

    /**
     * @param array $config
     * @return Google_Client
     */
    public static function createAuthenticatedGoogleClient(array $config): Google_Client
    {
        $client = new Google_Client();

        $client->setScopes([
            Google_Service_Analytics::ANALYTICS_READONLY,
        ]);

        $client->setAuthConfig($config['service_account_credentials_json']);

        self::configureCache($client, $config['cache']);

        return $client;
    }

    /**
     * @param Google_Client $client
     * @param $config
     */
    protected static function configureCache(Google_Client $client, $config)
    {
        $config = collect($config);

        $store = Cache::store($config->get('store'));

        $cache = new CacheItemPool($store);

        $client->setCache($cache);

        $client->setCacheConfig(
            $config->except('store')->toArray()
        );
    }

    /**
     * @param array $analyticsConfig
     * @param Google_Service_Analytics $googleService
     * @return AnalyticsClient
     */
    protected static function createAnalyticsClient(array $analyticsConfig, Google_Service_Analytics $googleService): AnalyticsClient
    {
        $client = new AnalyticsClient($googleService, app(Repository::class));

        $client->setCacheLifeTimeInMinutes($analyticsConfig['cache_lifetime_in_minutes']);

        return $client;
    }
}
