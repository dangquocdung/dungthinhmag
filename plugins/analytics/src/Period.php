<?php

namespace Botble\Analytics;

use DateTime;
use Carbon\Carbon;
use Botble\Analytics\Exceptions\InvalidPeriod;

class Period
{
    /**
     * @var \DateTime
     */
    public $startDate;

    /**
     * @var \DateTime
     */
    public $endDate;

    /**
     * @param DateTime $startDate
     * @param $endDate
     * @return Period
     */
    public static function create(DateTime $startDate, $endDate): Period
    {
        return new static($startDate, $endDate);
    }

    /**
     * @param int $numberOfDays
     * @return Period
     */
    public static function days(int $numberOfDays): Period
    {
        $endDate = Carbon::today();

        $startDate = Carbon::today()->subDays($numberOfDays)->startOfDay();

        return new static($startDate, $endDate);
    }

    /**
     * Period constructor.
     * @param DateTime $startDate
     * @param DateTime $endDate
     * @throws InvalidPeriod
     */
    public function __construct(DateTime $startDate, DateTime $endDate)
    {
        if ($startDate > $endDate) {
            throw InvalidPeriod::startDateCannotBeAfterEndDate($startDate, $endDate);
        }

        $this->startDate = $startDate;

        $this->endDate = $endDate;
    }
}
