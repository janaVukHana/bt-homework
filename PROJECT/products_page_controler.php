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


if($sorting === '') {
    $selectedRandom = 'selected';
    $selectedLow = '';
    $selectedHigh = '';
    getAllProducts();
    $show_products = searchProductsByTerm($term);
    shuffle($show_products);
} else if($sorting === ORDER_BY_PRICE_ASC) {
    $selectedRandom = '';
    $selectedLow = 'selected';
    $selectedHigh = '';
    getAllProducts(ORDER_BY_PRICE_ASC);
    $show_products = searchProductsByTerm($term);
} else if($sorting === ORDER_BY_PRICE_DSC) {
    $selectedRandom = '';
    $selectedLow = '';
    $selectedHigh = 'selected';
    getAllProducts(ORDER_BY_PRICE_DSC);
    $show_products = searchProductsByTerm($term);
} 


require __DIR__ . '/views/_layout/v-header.php';

require __DIR__ . '/views/v-products_page.php';

require __DIR__ . '/views/_layout/v-footer.php';
