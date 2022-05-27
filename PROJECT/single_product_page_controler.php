<?php

require_once __DIR__ . '/models/m-products.php';

$id = $_GET['id'];

$current_product = getOneProductById($id);
$next_product = getNextProduct($id);
$prev_product = getPrevProduct($id);

$related_products = getRelatedByCategory($current_product['category']);
$related_products_num = count($related_products);
$random_item_0 = rand(0, $related_products_num-1);
$random_item_1 = rand(0, $related_products_num-1);
$random_item_2 = rand(0, $related_products_num-1);

while($current_product['id'] == $related_products[$random_item_0]['id']) {
    $random_item_0 = rand(0, $related_products_num-1);
}

while($random_item_0 == $random_item_1 || $current_product['id'] == $related_products[$random_item_1]['id']) {
    $random_item_1 = rand(0, $related_products_num-1);
}

while($random_item_0 == $random_item_2 || $random_item_1 == $random_item_2 || $current_product['id'] == $related_products[$random_item_2]['id']) {
    $random_item_2 = rand(0, $related_products_num-1);
}

$random_items = [$random_item_0, $random_item_1, $random_item_2];

$num_rand_items = 3;


require __DIR__ . '/views/_layout/v-header.php';

require __DIR__ . '/views/v-single_product_page.php';

require __DIR__ . '/views/_layout/v-footer.php';
