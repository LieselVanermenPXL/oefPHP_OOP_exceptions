<?php namespace Util;


class Date
{
    private $day, $month, $year;
    private static $MONTHS = ["jan", "feb", "mar", "apr", "mei", "jun", "jul", "aug", "sept", "okt", "nov", "dec"];
    const DEFAULT_DAY = 1;
    const DEFAULT_MONTH = 1;
    const DEFAULT_YEAR = 2008;


    public function __construct($day = self::DEFAULT_DAY, $month = self::DEFAULT_MONTH, $year = self::DEFAULT_YEAR)
    {
        if ($day == '') {
            $day = self::DEFAULT_DAY;
        }
        if ($month == '') {
            $month = self::DEFAULT_MONTH;
        }
        if ($year == '') {
            $year = self::DEFAULT_YEAR;
        }
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function setDay(int $day)
    {
        $this->day = $day;
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function setMonth(int $month)
    {
        $this->month = $month;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year)
    {
        $this->year = $year;
    }

    public function print()
    {
        print($this->day . "/" . $this->month . "/" . $this->year);
    }

    public function printMonth()
    {
        print($this->day . "/" . self::$MONTHS[$this->month - 1] . "/" . $this->year);
    }
}