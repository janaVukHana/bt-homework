<?php

require_once __DIR__ . '/models/m-products.php';

$term = '';
$sorting = '';

if(!empty($_GET['products'])) {
    $sorting = $_GET['products'];
}

if(!empty($_GET['search_term'])) {
    $term = $_GET['search_term'];
}

$selectedRandom = '';
$selectedLow = '';
$selectedHigh = '';

if($sorting === '') {
    $selectedRandom = 'selected';
    $show_products = sort_rand($term);
} else if($sorting === ORDER_BY_PRICE_ASC) {
    $selectedLow = 'selected';
    $show_products = sort_asc($term);
} else if($sorting === ORDER_BY_PRICE_DSC) {
    $selectedHigh = 'selected';
    $show_products = sort_dsc($term);
} 

require __DIR__ . '/views/_layout/v-header.php';

require __DIR__ . '/views/v-products_page.php';

require __DIR__ . '/views/_layout/v-footer.php';
