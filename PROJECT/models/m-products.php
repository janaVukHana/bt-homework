<?php

const ORDER_BY_PRICE_ASC='price-asc';   
const ORDER_BY_PRICE_DSC='price-desc'; 

// Funkcije: 
// getAllProducts($sort = “”), funkcija vraca niz svih proizvoda koji su available. DONEEEEEEEEEEEEEEEEEEEEEEEEE!
// getOneProductById($id) funkcija vraca jedan proizvod po id. 
// getNextProduct($currentProductId), funkcija vraca sledeci proizvod u odnosu na prosledjeni id iz niza, 
// a ako je proizvod poslednji da vrati prvi. 
// getPrevProduct($currentProductId), funkcija vraca predhodni proizvod iz niza u odnosu na prosledjeni id, 
// a ako je proizvod prvi u nizu treba da vrati poslednji. 
// searchProductsByTerm($term = “”), funkcija vraca filtrirani niz proizvoda iz niza proizvoda po $term-u, 
// a filtriranje vrsi po title ili brand ili description.


/**
 * this function return array of products if they are available
 * @param string $sort
 * @return array
 */
function getAllProducts(string $sort = ''):array {
    global $products;

    if($sort === 'price-asc') {
         $price = array_column($products, 'price');
         array_multisort($price, SORT_ASC, $products);
         return $products;
    } else if($sort === 'price-desc') {
        $price = array_column($products, 'price');
         array_multisort($price, SORT_DESC, $products);
         return $products;
    } else if($sort === '') {
        return $products;
    } 
}

/**
 * This function return one product array
 * 
 * @param string $id
 * @return array
 */

function getOneProductById(string $id):array {
    global $products;

    foreach($products as $product) {
        if($product['id'] === $id) {
            return $product;
        }
    }
}

/**
 * This function return next product based on id, or first one if current product is last one
 * 
 * @param string $currentProductId
 * @return array 
 */
function getNextProduct($currentProductId) {
    global $products;

    $numberOfProducts = count($products);
    
    foreach($products as $key => $product) {
        if($product['id'] == $currentProductId) {
            if($key == $numberOfProducts-1) {
                return $products[0];
            } else {
                return $products[$key + 1];
            }
        }
    }
}

/**
 * This function return previous product based on id, or last one if current product is first one
 * 
 * @param string $currentProductId
 * @return array
 */
function getPrevProduct($currentProductId) {
    global $products;

    $numberOfProducts = count($products);
    
    foreach($products as $key => $product) {
        if($product['id'] == $currentProductId) {
            if($key == 0) {
                return $products[$numberOfProducts-1];
            } else {
                return $products[$key - 1];
            }
        }
    }
}


/**
 * This function return filtered array of products based on search term(by title or brand)
 * 
 * @param string $term
 * @return array
 */
function searchProductsByTerm($term = '') {
    global $products;

    $filtered_products = [];

    foreach($products as $product) {
        if($product['title'] === $term || $product['brand'] === $term) {
            $filtered_products[] = $product;
        } 
    }

    return $filtered_products;
}

$products = [
    [
        'id' => 1,
        'title' => 'Spalding Ball',
        'description' => 'Best ball for your kids',
        'img' => './public/theme/img/lopte/lopta_1.jpg',
        'price' => 33.3,
        'category' => 'rekviziti',
        'brand' => 'Spalding',
        'available' => true
    ],
    [
        'id' => 2,
        'title' => 'Nike Ball',
        'description' => 'Ball you can not destroy',
        'img' => './public/theme/img/lopte/lopta_2.jpg',
        'price' => 30,
        'category' => 'rekviziti',
        'brand' => 'Nike',
        'available' => true
    ],
    [
        'id' => 3,
        'title' => 'Adidas Ball',
        'description' => 'Ball for every day',
        'img' => './public/theme/img/lopte/lopta_3.jpg',
        'price' => 31.9,
        'category' => 'rekviziti',
        'brand' => 'Adidas',
        'available' => false
    ],
    [
        'id' => 5,
        'title' => 'Nike Yersea',
        'description' => 'You will love this',
        'img' => './public/theme/img/dresovi/dres_1.jpg',
        'price' => 44,
        'category' => 'odeca',
        'brand' => 'Nike',
        'available' => true
    ],
    [
        'id' => 4,
        'title' => 'Adidas Yersea',
        'description' => 'Buy this',
        'img' => './public/theme/img/dresovi/dres_2.jpg',
        'price' => 43.5,
        'category' => 'odeca',
        'brand' => 'Adidas',
        'available' => false
    ],
    [
        'id' => 6,
        'title' => 'Puma Yersea',
        'description' => 'For your pleasure',
        'img' => './public/theme/img/dresovi/dres_3.jpg',
        'price' => 45,
        'category' => 'odeca',
        'brand' => 'Puma',
        'available' => true
    ],
];

// print_r(getAllProducts(ORDER_BY_PRICE_ASC));
// print_r(getAllProducts(ORDER_BY_PRICE_DSC));
// print_r(getAllProducts());

// print_r(getOneProductById(5));
// print_r(getOneProductById(1));
// print_r(getOneProductById(3));
// print_r(getOneProductById(9));

// print_r(getNextProduct('6'));
// print_r(getNextProduct('1'));
// print_r(getNextProduct('2'));
// print_r(getNextProduct('3'));
// print_r(getNextProduct('4'));
// print_r(getNextProduct('5'));

// print_r(getPrevProduct(1));

// print_r(searchProductsByTerm('Nike'));
// print_r(searchProductsByTerm('Adidas'));
// print_r(searchProductsByTerm('Puma'));






