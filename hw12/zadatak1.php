<?php

// Check if user entered all values
// if($_GET['weight'] === '' || $_GET['age'] === '' || isset($_GET['activity'])) {
//     $message = 'Go back and fill all fields in form.';
// }
if(!isset($_GET['activity']) || $_GET['weight'] === '' || $_GET['age'] === '') {
    $message = 'Fill all fields in form.';
} else {
    $activity = $_GET['activity'];
    $weight = $_GET['weight'];
    $age = $_GET['age'];

    $activity_factor = '';
    $age_factor = '';

    // calc activity factor
    if($activity === 'programer' || $activity === 'menadzer' || $activity === 'admin') {
        $activity_factor = 100;
    } else if($activity === 'policajac' || $activity === 'vojnik') {
        $activity_factor = 200;
    } else if($activity === 'sportista') {
        $activity_factor = 300;
    } else {
        $activity_factor = 150;
    }

    // calc age factor
    if($age >= 0 && $age <=3) {
        $age_factor = 1.9;
    } else if($age >= 4 && $age <= 10) {
        $age_factor = 1.5;
    } else if($age >= 11 && $age <= 18) {
        $age_factor = 1.2;
    } else if($age >= 19 && $age <= 26) {
        $age_factor = 1;
    } else if(($age >= 27 && $age <= 30) || ($age >= 50 && $age <= 60)) {
        $age_factor = 0.8;
    } else if(($age >= 31 && $age <= 35) || ($age >= 45 && $age <= 49)) {
        $age_factor = 0.7;
    } else if(($age >= 36 && $age <= 44) || $age > 60) {
        $age_factor = 0.6;
    }

    function calc_recommended_calories($age_factor, $activity_factor, $weight) {
        return $age_factor * $activity_factor * $weight;
    }

    $max_cal = calc_recommended_calories($age_factor, $activity_factor, $weight);

    $message = "Recommendation for daily calories number for you: $max_cal.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calories Number</title>
</head>
<body>
    <div class="container">
        <h1>Calories Number</h1>

        <p><?php echo $message ?></p>



    </div>
</body>
</html>