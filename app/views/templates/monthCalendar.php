<?php
// Function for displaying the current month
function displayMonth($date, $monthArray) {
	
	// If you want to display weeknumber, else false.
    $weeknumber = false;
	//var_dump($monthArray);
	$dayName = [];

	isset($_GET['date']) ? $date = $_GET['date'] : $date = date("Y-m-d");

	// If you wish the calendar to start the week with Monday, leave this true.
	$startWithMonday = true;
	
	// Does the week start with Monday? If so, dayName array that holds the weekday names, begins with Moday. Otherwise, begin with Suday.
	$startWithMonday ? $dayName = array("MON", "TUE", "WED", "THU", "FRI", "SAT", "SUN") : $dayName = array("SUN", "MON", "TUE", "WED", "THU", "FRI", "SAT");

	// Array holding all 12 month names
	$monthName = array("JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC");

	$date = explode("-", $date);
	$year = $date[0];
	$month = $date[1];
	
	$thisMonth = mktime(0, 0, 0, $month, 1,  $year);
	$lastMonth = mktime(0, 0, 0, $month - 1, 1,  $year);
	$nextMonth = mktime(0, 0, 0, $month + 1, 1,  $year);

echo "<TABLE class=\"table\" cellspacing=\"0\" cellpadding=\"0\" width=\"400px\">\n<TR>\n";
echo "<TD class=\"td\" color=\"#A7D18D\" bgcolor=\"#FFFFFF\" onMouseOver=\"this.className='sel'\" onMouseOut=\"this.className='td'\" >\n<A class=\"A\" HREF=\"?date=";
echo date("Y-m-j", $lastMonth);
echo "\">&laquo;</A>\n</TD>\n<TD class=\"td\" color=\"#A7D18D\"  bgcolor=\"#FFFFFF\">\n";
echo $monthName[$month-1];
echo date(" Y", $thisMonth);
echo "\n</TD>\n<TD class=\"td\" color=\"#A7D18D\"  bgcolor=\"#FFFFFF\" onMouseOver=\"this.className='sel'\" onMouseOut=\"this.className='td'\" >\n<A class=\"A\" HREF=\"?date=";
echo date("Y-m-j", $nextMonth);
echo "\">&raquo;</A>\n</TD>\n</TR>\n<TR>\n";
	
echo "<TD class=\"td\" colspan=\"3\">\n	<TABLE class=\"table\" width=\"100%\">\n<TR>\n";

foreach ($dayName as $key) {
	echo "<TD class=\"td\"  bgcolor=\"#CCCCCC\">$key</TD>\n";
}
if($weeknumber) {
	echo "<TD class=\"td\"  bgcolor=\"#CCCCCC\">v.</TD>\n";
}
echo "</TR>\n\n<TR>\n";

	// Prints the days.
	$day = 0;
	if($weeknumber) {
		$week = date("W", $thisMonth);
	}
	foreach ($monthArray as $key) {
		$date = explode("-", $key[1]);	
		if($key[0] == 0) {
		        echo "<TD class=\"empty\">$date[2]</TD>\n";
		} else if($key[0] == 1) {
			echo "<TD onMouseOver=\"this.className='sel'\" onMouseOut=\"this.className='event'\" class=\"event\">$date[2]</TD>\n";
		} else if($key[0] == 2) {
			echo "<TD onMouseOver=\"this.className='sel'\" onMouseOut=\"this.className='event'\" class=\"event\"><A class=\"A\" HREF=\"javascript:event('?act=event&date=" . $key[1] . "')\">$date[2]</A></TD>\n";
		} else if ($key[0] == 3) {
			echo "<TD onMouseOver=\"this.className='sel'\" onMouseOut=\"this.className='today'\" class=\"today\">$date[2]</TD>\n";
		} else if ($key[0] == 4) {
			echo "<TD onMouseOver=\"this.className='sel'\" onMouseOut=\"this.className='today'\" class=\"today\"><A class=\"A\" HREF=\"javascript:event('?act=event&date=" . $key[1] . "')\"><B>$date[2]</B></A></TD>\n";
		}
	$day++;
	if($day >= 7) {
		if($weeknumber) {
			echo "<TD bgcolor=\"#EEEEEE\" class=\"event\">$week</TD>\n";
			if($week >= 53) {
				$week = 0;
			}
			$week++;
		}
		echo "</TR>\n<TR>\n";
		$day = 0;
	}
}
echo "</TR>\n</TABLE>\n</TD></TR></TABLE>\n";
};
displayMonth(date("Y-n-j"), $data['thisMonthCalendar']->monthArray);