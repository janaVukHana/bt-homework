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
    $show_products_test = getAllProducts();
    $show_products = searchProductsByTerm($term);
} else if($sorting === 'price-asc') {
    $selectedRandom = '';
    $selectedLow = 'selected';
    $selectedHigh = '';
    $show_products_test = getAllProducts('price-asc');
    $show_products = searchProductsByTerm($term);
} else if($sorting === 'price-desc') {
    $selectedRandom = '';
    $selectedLow = '';
    $selectedHigh = 'selected';
    $show_products_test = getAllProducts('price-desc');
    $show_products = searchProductsByTerm($term);
} 


require __DIR__ . '/views/_layout/v-header.php';

require __DIR__ . '/views/v-products_page.php';

require __DIR__ . '/views/_layout/v-footer.php';
