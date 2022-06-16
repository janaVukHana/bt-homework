<?php

if($_GET['first_name'] == '') {
    echo 'Enter first name';
} else if($_GET['last_name'] == '') {
    echo 'Enter last name';
} else if(!isset($_GET['gender'])) {
    echo 'Tell me are you male or female';
} else if($_GET['email'] == '') {
    echo 'Enter you email';
} else if($_GET['password'] == '') {
    echo 'Enter password';
} else if(!isset($_GET['courses'])) {
    echo 'Pick at least one course';
}

else {

    $first_name = $_GET['first_name'];
    $last_name = $_GET['last_name'];
    $gender = $_GET['gender'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    $confirm_password = $_GET['confirm_password'];
    $courses_arr = $_GET['courses'];
    $courses_num = count($courses_arr);
    
    if($gender == 'male') {
        echo "Postovani $first_name $last_name,";
    } else {
        echo "Postovana $first_name $last_name,";
    }
    echo '<br>';
    echo 'Usposno ste se registrovali na nasem sajtu.';
    echo '<br>';
    echo "Vasa lozinka je $password.";
    echo '<br>';
    echo "Vas email je $email.";
    echo '<br>';
    if($courses_num == 1) {
        echo "Vasi odabrani kursevi su: $courses_arr[0]";
    } else if($courses_num == 2) {
        echo "Vasi odabrani kursevi su: $courses_arr[0], $courses_arr[1]";
    } else if($courses_num == 3) {
        echo "Vasi odabrani kursevi su: $courses_arr[0], $courses_arr[1]. $courses_arr[2]";
    }
}
