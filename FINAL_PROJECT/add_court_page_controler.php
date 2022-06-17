<?php
session_start();

require_once __DIR__ . '/models/Courts.php';
require_once __DIR__ . '/models/test_input.php';

$page = 'Add court page';

$systemErrors = [];

if(isset($_POST['add_new_court'])) {
    // VALIDATIONS
    // print_r($_FILES);
    // validate name not empty, min 2 characters, trim
    if (empty($_POST['court_name'])) {
        $systemErrors['court_name_err'] = "* Court name is required";
      } 
      else {
        $court_name = test_input($_POST["court_name"]);
        if(strlen($court_name) < 2) {
            $systemErrors['court_name_err'] = '* Court name must be at least 2 characters long.';
        }
      }
    // LOCATION: location not empty, 
    if (empty($_POST['location'])) {
        $systemErrors['location_err'] = "* Location is required";
      } else {
        $court_location = $_POST['location'];
      }
    // DESCRIPTION: description, not empty, min 30 max 100 characters, trim
    if (empty($_POST['description'])) {
        $systemErrors['description_err'] = "* Description is required";
      } 
      else {
        $court_description = test_input($_POST["description"]);
        if(strlen($court_description) < 30 || strlen($court_description) > 100) {
            $systemErrors['description_err'] = '* Desctiption must contain between 30 and 100 chars.';
        }
      }
    // UPLOAD: file
    $allower_ext = ['png', 'jpg', 'jpeg', 'gif'];

    if(!empty($_FILES['upload']['name'])) {
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];

        $target_dir = "public/theme/img/{$file_name}";

        // get file extension
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));
        
        if(in_array($file_ext, $allower_ext)) {
            if($file_size <= 1000000) {
                move_uploaded_file($file_tmp, $target_dir);
            } else {
                $systemErrors['file_err'] = '* File is too large.';
            }
        } else {
            $systemErrors['file_err'] = '* Invalid file type.';
        }
    } else {
        $systemErrors['file_err'] = '* Please choose a file.';
    }

    // echo "$court_name $court_location $court_description $target_dir";
    $is_errors = count($systemErrors) > 0 ? false : true;

    if(!$systemErrors) {
        $post_creator = $_SESSION['username'];
        $courts = new Courts();
        $adding_court = $courts->add_court($court_name, $court_location, $target_dir, $court_description , $post_creator);

        if($adding_court) {
            header('Location: ./courts_page_controler.php');
        }
    }
    
}

require __DIR__ . '/views/_layout/v-header.php';

if(!isset($_SESSION['username'])) {
    echo "<h2 class='text-center text-warning my-5'>You need to be logged.</h2>";
    header( "refresh:2;url=login_page_controler.php" );
} else {
    require __DIR__ . '/views/v-add_court.php';
}

require __DIR__ . '/views/_layout/v-footer.php';