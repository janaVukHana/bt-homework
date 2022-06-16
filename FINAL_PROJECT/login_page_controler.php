<?php
session_start();

require_once __DIR__ . '/models/Users.php';

$page = 'Login page';
$username_password_match = true;

if(isset($_POST['log_in'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $users = new Users();
    $user_is_logged = $users->log_in($username, $password);

    if($user_is_logged) {
        $_SESSION['username'] = $username;
        header('Location: courts_page_controler.php');
    }

    $username_password_match = false;
}

require __DIR__ . '/views/_layout/v-header.php';

require __DIR__ . '/views/v-login_page.php';

require __DIR__ . '/views/_layout/v-footer.php';