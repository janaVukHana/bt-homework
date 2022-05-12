<?php

if(empty($_POST['month']) || $_POST['month'] < 1 || $_POST['month'] > 12) {
    die('You need to write month(number from 1 to 12).');
}

if(empty($_POST['day']) || $_POST['day'] < 1 || $_POST['day'] > 31) {
    die('You need to write day(number from 1 to 31).');
}

if(empty($_POST['year']) || $_POST['year'] < 1 || $_POST['year'] > 2101) {
    die('You need to write year(number from 1 to 2101).');
}

$month = $_POST['month'];
$day = $_POST['day'];
$year = $_POST['year'];

$is_date_valid = checkdate($month, $day, $year);

if($is_date_valid) {
    echo 'Date is valid';
} else {
    echo 'Date is not valid.';
}

?>