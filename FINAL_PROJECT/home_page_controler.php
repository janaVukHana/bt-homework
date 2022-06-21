<?php
session_start();

$page = 'Home page';

// if session is set show add court page, else show login/signup buttons
$is_set_session = false;
if(isset($_SESSION['username'])) {
    $is_set_session = true;
}

require __DIR__ . '/views/_layout/v-header.php';

require __DIR__ . '/views/v-home_page.php';

require __DIR__ . '/views/_layout/v-footer.php';