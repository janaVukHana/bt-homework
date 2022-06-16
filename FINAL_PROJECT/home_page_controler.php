<?php
session_start();

$page = 'Home page';

if(isset($_SESSION['username'])) {
    header('Location: courts_page_controler.php');
}

// require_once __DIR__ . '/models/m-products.php';

require __DIR__ . '/views/_layout/v-header.php';

require __DIR__ . '/views/v-home_page.php';

require __DIR__ . '/views/_layout/v-footer.php';