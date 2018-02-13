<?php

namespace Botble\Analytics\Http\Controllers;

use Botble\Analytics\Exceptions\InvalidConfiguration;
use Botble\Analytics\Period;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\AjaxResponse;
use Carbon;
use Analytics;
use Exception;

class AnalyticsController extends BaseController
{

    /**
     * @param AjaxResponse $response
     * @return AjaxResponse
     * @author Sang Nguyen
     */
    public static function getGeneral(AjaxResponse $response)
    {
        $startDate = Carbon::today()->startOfDay();
        $endDate = Carbon::now()->endOfDay();
        $dimensions = 'hour';

        try {
            $period = Period::create($startDate, $endDate);

            $visitorData = [];

            $answer = Analytics::performQuery($period, 'ga:visits,ga:pageviews', ['dimensions' => 'ga:' . $dimensions]);

            if ($answer->rows == null) {
                return collect([]);
            }

            if ($dimensions === 'hour') {
                foreach ($answer->rows as $dateRow) {
                    $visitorData[] = [
                        'axis' => (int)$dateRow[0] . 'h',
                        'visitors' => $dateRow[1],
                        'pageViews' => $dateRow[2],
                    ];
                }
            } else {
                foreach ($answer->rows as $dateRow) {
                    $visitorData[] = [
                        'axis' => Carbon::parse($dateRow[0])->toDateString(),
                        'visitors' => $dateRow[1],
                        'pageViews' => $dateRow[2],
                    ];
                }
            }

            $stats = collect($visitorData);
            $country_stats = Analytics::performQuery($period, 'ga:sessions', ['dimensions' => 'ga:countryIsoCode'])->rows;
            $total = Analytics::performQuery($period, 'ga:sessions, ga:users, ga:pageviews, ga:percentNewSessions, ga:bounceRate, ga:pageviewsPerVisit, ga:avgSessionDuration, ga:newUsers')->totalsForAllResults;

            return $response->setData(view('analytics::widgets.general.general', compact('stats', 'country_stats', 'total'))->render());
        } catch (InvalidConfiguration $ex) {
            return $response->setError(true)->setMessage(trans('analytics::analytics.wrong_configuration', ['version' => config('cms.version')]));
        } catch (Exception $ex) {
            return $response->setError(true)->setMessage($ex->getMessage());
        }
    }

    /**
     * @param AjaxResponse $response
     * @return AjaxResponse
     * @author Sang Nguyen
     */
    public function getTopVisitPages(AjaxResponse $response)
    {
        $startDate = Carbon::today()->startOfDay();
        $endDate = Carbon::now()->endOfDay();

        try {
            $period = Period::create($startDate, $endDate);
            $pages = Analytics::fetchMostVisitedPages($period, 10);

            return $response->setData(view('analytics::widgets.page.page', compact('pages'))->render());
        } catch (InvalidConfiguration $ex) {
            return $response->setError(true)->setMessage(trans('analytics::analytics.wrong_configuration', ['version' => config('cms.version')]));
        } catch (Exception $ex) {
            return $response->setError(true)->setMessage($ex->getMessage());
        }
    }

    /**
     * @param AjaxResponse $response
     * @return AjaxResponse
     * @author Sang Nguyen
     */
    public function getTopBrowser(AjaxResponse $response)
    {
        $startDate = Carbon::today()->startOfDay();
        $endDate = Carbon::now()->endOfDay();

        try {
            $period = Period::create($startDate, $endDate);
            $browsers = Analytics::fetchTopBrowsers($period, 10);

            return $response->setData(view('analytics::widgets.browser.browser', compact('browsers'))->render());
        } catch (InvalidConfiguration $ex) {
            return $response->setError(true)->setMessage(trans('analytics::analytics.wrong_configuration', ['version' => config('cms.version')]));
        } catch (Exception $ex) {
            return $response->setError(true)->setMessage($ex->getMessage());
        }
    }

    /**
     * @param AjaxResponse $response
     * @return AjaxResponse
     * @author Sang Nguyen
     */
    public function getTopReferrer(AjaxResponse $response)
    {
        $startDate = Carbon::today()->startOfDay();
        $endDate = Carbon::now()->endOfDay();

        try {
            $period = Period::create($startDate, $endDate);
            $referrers = Analytics::fetchTopReferrers($period, 10);

            return $response->setData(view('analytics::widgets.referrer.referrer', compact('referrers'))->render());
        } catch (InvalidConfiguration $ex) {
            return $response->setError(true)->setMessage(trans('analytics::analytics.wrong_configuration', ['version' => config('cms.version')]));
        } catch (Exception $ex) {
            return $response->setError(true)->setMessage($ex->getMessage());
        }
    }
}