<?php

function check_date($month, $day, $year) {
    $is_leap_year = false;
// If the year is evenly divisible by 4, go to step 2. Otherwise, go to step 5.
// If the year is evenly divisible by 100, go to step 3. Otherwise, go to step 4.
// If the year is evenly divisible by 400, go to step 4. Otherwise, go to step 5.
// The year is a leap year (it has 366 days).
// The year is not a leap year (it has 365 days).

    if($year % 4 === 0) {
        if($year % 100 === 0) {
            if($year % 400 === 0) {
                $is_leap_year = true;
            } else {
                $is_leap_year = false;
            }
        } else {
            $is_leap_year = true;
        }
    } else {
        $is_leap_year = false;
    }

    if($is_leap_year) {
        if($month == 2) {
            if($day > 28) {
                return $year . ' Incorect date. <br>';
            } else if($day > 29) {
                return $yera . ' Incorect date. <br>';
            }
        }
    } else {
        if($month == 4 || $month == 6 || $month == 9 || $month == 11) {
            if($day > 30) {
                return $year . ' Incorect date <br>';
            }
        }
    }

    return $year . ' Corect date. <br>';

}







