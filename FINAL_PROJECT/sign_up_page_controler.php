<?php
session_start();

$page = 'Sign up page';

require_once __DIR__ . '/models/Users.php';
require_once __DIR__ . '/models/test_input.php';

$systemErrors = [];
$username = $email = $password = "";

if(isset($_POST['sign_up'])) { 

    // USERNAME: Required. + Must have 2 or more charaters
    if (empty($_POST['username'])) {
        $systemErrors['username_err'] = "* Username is required";
        echo $systemErrors['username_err'];
      } 
      else {
        $username = test_input($_POST["username"]);
        if(strlen($username) < 2) {
            $systemErrors['username_err'] = '* Usename must be at least 2 characters long.';
        }
      }
    
    // EMAIL: Required. + Must contain a valid email address (with @ and .) 
      if (empty($_POST["email"])) {
        $systemErrors['email_err'] = "* Email is required";
      } else {
        $email = test_input($_POST["email"]);

        if(!str_contains($email, '@')) {
            $systemErrors['email_err'] = "* Email must contain '@'.";
        }
      }

    // PASSWORD: Required + Must be 6 to 10 characters long, 
    // have one capital letter and one number and start with letter
      if (empty($_POST["password"])) {
        $systemErrors['password_err'] = "* Password is required";
      } else {
        $password = test_input($_POST["password"]);

        // check if password is 6 to 10 chars long
        if(strlen($password) < 6 || strlen($password) > 10) {
            $systemErrors['password_err'] = "* Password must have 6 to 10 characters.";
        }
        // check if password start with letter
        else if(!ctype_alpha($password[0])) {
            $systemErrors['password_err'] = "* Password must start with letter.";
        }
        // check if there is capital letter in password
        else if(!preg_match('/[A-Z]/', $password)){
            $systemErrors['password_err'] = "* One capital letter is required.";
        } 
        // check if there is number in password
        else if (!preg_match('~[0-9]+~', $password)) {
            $systemErrors['password_err'] = "* Number is required.";
        }
      }

    $is_errors = count($systemErrors) > 0 ? false : true;

    // if there is no errors in form try to register user
    if($is_errors) {
        $user = new Users();
        $user_registration = $user->registration($username, $email, $password);
    }

    if($user_registration) {
        $_SESSION['username'] = $username;
        header('Location: courts_page_controler.php');
    }

    if($is_errors) {
        $registration_failed_message = 'That username is already taken. <strong>Choose another one</strong>.';
    }
    

}



require __DIR__ . '/views/_layout/v-header.php';

require __DIR__ . '/views/v-sign_up.php';

require __DIR__ . '/views/_layout/v-footer.php';