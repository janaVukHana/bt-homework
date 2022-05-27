<?php

require_once __DIR__ . '/models/m-products.php';

$id = $_GET['id'];
$quantity = $_GET['quantity'];

$choosen_product = getOneProductById($id);

$img = $choosen_product['img'];
$title = $choosen_product['title'];
$price = $choosen_product['price'];
$total_price = $quantity * $price;
$alt = $choosen_product['category'];

// $title is two words and when I send it thrue input value I just 
// get first word. Solution: replace space char with &nbsp;
// But now can not wrap in htmlspecialchars()...
$title_as_input_value = str_replace(' ', '&nbsp;', $title);


require __DIR__ . '/views/_layout/v-header.php';

require __DIR__ . '/views/v-checkout_page.php';

require __DIR__ . '/views/_layout/v-footer.php';