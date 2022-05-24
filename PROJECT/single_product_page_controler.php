<?php

require_once __DIR__ . '/models/m-products.php';

$id = $_GET['id'];

$current_product = getOneProductById($id);
$next_product = getNextProduct($id);
$prev_product = getPrevProduct($id);

$related_products = getRelatedByCategory($current_product['category']);
$related_products_num = count($related_products);
$random_item = rand(0, $related_products_num-1);
$random_item_2 = rand(0, $related_products_num-1);
$random_item_3 = rand(0, $related_products_num-1);

while($random_item == $random_item_2) {
    $random_item_2 = rand(0, $related_products_num-1);
}
while($random_item == $random_item_3 || $random_item_2 == $random_item_3) {
    $random_item_3 = rand(0, $related_products_num-1);
}


require __DIR__ . '/views/_layout/v-header.php';

require __DIR__ . '/views/v-single_product_page.php';

require __DIR__ . '/views/_layout/v-footer.php';
