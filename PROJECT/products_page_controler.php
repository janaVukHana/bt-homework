<?php

require_once __DIR__ . '/models/m-products.php';

if($_GET['products'] === '' || !isset($_GET['products'])) {
    $selectedRandom = 'selected';
    $selectedLow = '';
    $selectedHigh = '';
    $show_products = getAllProducts();
} else if($_GET['products'] === 'price-asc') {
    $selectedRandom = '';
    $selectedLow = 'selected';
    $selectedHigh = '';
    $show_products = getAllProducts('price-asc');
} else if($_GET['products'] === 'price-desc') {
    $selectedRandom = '';
    $selectedLow = '';
    $selectedHigh = 'selected';
    $show_products = getAllProducts('price-desc');
} 


require __DIR__ . '/views/_layout/v-header.php';

require __DIR__ . '/views/v-products_page.php';

require __DIR__ . '/views/_layout/v-footer.php';
