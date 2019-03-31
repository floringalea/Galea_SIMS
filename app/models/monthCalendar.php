<?php
class MonthCalendar
{
    // Virtual path to event files. - Replace with db connectivity
    public $path = "./";

    public $startWithMonday = true;
    
    public $dayName = [];
    public $date;
    public $monthArray;

    function __construct()
    {
        isset($_GET['date']) ? $this->date = $_GET['date'] : $this->date = date("Y-m-d");
        
        $this->monthArray = $this->createMonth($this->date);
        // Mark Today in a different colour
        $this->monthArray = $this->addToday($this->date, $this->monthArray);
        // Call to view, passing data
        //var_dump($this->monthArray);
    }

    public function makeDate($year, $month, $day) {
        return mktime(0, 0, 0, $month, $day,  $year);// hour, minute, second, month, day, year  - returns the Unix timestamp of the arguments given
    }

    // Function for creating the current month
    public function createMonth($date) 
    {
        $date = explode("-", $date);
        $year = $date[0];
        $month = $date[1];
        
        // Dates
        $this_month_date = $this->makeDate($year, $month, 1);
        $last_month_date = $this->makeDate($year, $month - 1, 1);
        $next_month_date = $this->makeDate($year, $month + 1, 1);

        // Numbers
        $this_month_first_day = trim(date("w", $this_month_date));// Numeric representaion of the day of the week 0 - 6
        
        $this_month_days = trim(date("t", $this_month_date));// Number of days in the given month
        $last_month_days = trim(date("t", $last_month_date));// Number of days in the given month
        
        $this_month_number = trim(date("n", $this_month_date));// Numeric representation of a month, without leading zeros 	1 - 12
        $last_month_number = trim(date("n", $last_month_date));// Numeric representation of a month, without leading zeros 	1 - 12
        $next_month_number = trim(date("n", $next_month_date));// Numeric representation of a month, without leading zeros 	1 - 12
        
        $this_month_year = trim(date("Y", $this_month_date));// A full numeric representation of a year, 4 digits
        $last_month_year = trim(date("Y", $last_month_date));// A full numeric representation of a year, 4 digits
        $next_month_year = trim(date("Y", $next_month_date));// A full numeric representation of a year, 4 digits
        
        if($this->startWithMonday) {
            if($this_month_first_day == 0) {
                $this_month_first_day = 7;
            }
        } else {
            $this_month_first_day++;
        }
        
            
        // F�rra
        for($I = 1; $I < $this_month_first_day; $I++) {
            $temp = $last_month_days - $this_month_first_day + $I + 1;
            $monthArray["$last_month_year-$last_month_number-$temp"] = array(0, "$last_month_year-$last_month_number-$temp");
        }
        // M�nad.
        for($I = 1; $I <= $this_month_days; $I++) {
            $monthArray["$this_month_year-$this_month_number-$I"] = array(1, "$this_month_year-$this_month_number-$I");
        }
        // N�sta
        for($I = 1; $I <= 43 - $this_month_days - $this_month_first_day; $I++) {
            $monthArray["$next_month_year-$next_month_number-$I"] = array(0, "$next_month_year-$next_month_number-$I");
        }

    return $monthArray;	
    }

    // Function for adding the current day
    public function addToday($date, $monthArray) 
    {
        $date = explode("-", $date);
        $year = $date[0];
        $month = $date[1];
        $this_year = date("Y");
        $this_month = date("n");
        
        if($year == $this_year && $month == $this_month) {
            $monthArray[date("Y-n-j")][0] +=2;
        }
        return $monthArray;
    }
}		
?>