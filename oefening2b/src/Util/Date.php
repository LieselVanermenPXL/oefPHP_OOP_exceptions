<?php


class Date
{
    private $day, $month, $year;
    private static $MONTHS =  ["jan", "feb", "mar", "apr", "mei", "jun", "jul", "aug", "sept", "okt", "nov", "dec"];

    private function __construct($day = 1, $month = 1, $year = 2008)
    {
        if ($day <= 0 || $day > 31) {
            throw new DateException("Wrong input for day");
        }
        $this->day = $day;

//        if ($month <= 0 || $month > 12) {
//            throw new DateException("Wrong input for month");
//        }
        $this->month = $month;

        $this->year = $year;
    }

    public static function make($day, $month, $year)
    {
        try {
           $date = new self($day, $month, $year);
        }
        catch (DateException $dateException) {
            throw $dateException;
        }
        return $date;
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function changeDay($day) {
        return new self($this->day = $day, $this->month, $this->year);
    }

    public function changeMonth($month) {
        return new self($this->day, $this->month = $month, $this->year);
    }

    public function changeYear($year) {
        return new self($this->day, $this->month, $this->year = $year);
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