<?php
session_start();

require_once __DIR__ . '/models/Courts.php';
require_once __DIR__ . '/models/handle_header_form.php';
handle_header_form();

// get courts from db
$courts = new Courts();
$all_courts = $courts->get_all_courts();

$page = 'Courts page';

// require_once __DIR__ . '/models/Users.php';

require __DIR__ . '/views/_layout/v-header.php';

if(!isset($_SESSION['username'])) {
    echo "<h2 class='text-center text-warning my-5'>You need to be logged.</h2>";
    header( "refresh:2;url=login_page_controler.php" );
} else {
    require __DIR__ . '/views/v-courts.php';
}

require __DIR__ . '/views/_layout/v-footer.php';