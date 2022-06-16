<?php

require_once __DIR__ . '/models/m-products.php';

$id = $_GET['id'];

$current_product = getOneProductById($id);
$next_product = getNextProduct($id);
$prev_product = getPrevProduct($id);

$related_products = getRelatedByCategory($current_product['category']);


$related_products = getRelatedProducts($related_products, $current_product);


require __DIR__ . '/views/_layout/v-header.php';

require __DIR__ . '/views/v-single_product_page.php';

require __DIR__ . '/views/_layout/v-footer.php';
