<?php

const ORDER_BY_PRICE_ASC='price-asc';   
const ORDER_BY_PRICE_DSC='price-desc'; 

/**
 * this function return array of products if they are available
 * @param string $sort
 * @return array
 */
function getAllProducts(string $sort = ''):array {
    global $products;

    if($sort === ORDER_BY_PRICE_ASC) {
         $price = array_column($products, 'price');
         array_multisort($price, SORT_ASC, $products);
         return $products;
    } else if($sort === ORDER_BY_PRICE_DSC) {
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
        if($product['id'] == $id) {
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
function getNextProduct(string $currentProductId):array {
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
function getPrevProduct(string $currentProductId):array {
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

    if($term === '') {
        return $products;
    }
    
    foreach($products as $product) {
        $title = $product['title'];
        $brand = $product['brand'];
        
        // change everything to be small letter (strtolower())
        $title_to_lower = strtolower($title);
        $brand_to_lower = strtolower($brand);
        $term_to_lower = strtolower($term);

        // check if $title or $brand contains $term (str_contains($sencence, $word))
        $is_title = str_contains($title_to_lower, $term_to_lower);
        $is_brand = str_contains($brand_to_lower, $term_to_lower);
        if($is_title || $is_brand) {
            $filtered_products[] = $product;
        } 
    }
   
    return $filtered_products;
}

/**
 * This function return filtered array by category
 * @param string $category
 * @return array
 */
function getRelatedByCategory(string $category):array {
    global $products;

    $related_products = [];

    foreach($products as $product) {
        if($product['category'] == $category) {
            $related_products[] = $product;
        }
    }

    return $related_products;
}

$products = [
    [
        'id' => 1,
        'title' => 'Spalding Ball',
        'description' => 'Best ball for your kids.Best ball for your kids.Best ball for your kids.Best ball for your kids.',
        'img' => './public/theme/img/lopte/lopta_1.jpg',
        'price' => 33.3,
        'category' => 'rekviziti',
        'brand' => 'Spalding',
        'available' => true
    ],
    [
        'id' => 2,
        'title' => 'Nike Ball',
        'description' => 'Ball you can not destroy. Ball you can not destroy. Ball you can not destroy. Ball you can not destroy. Ball you can not destroy. ',
        'img' => './public/theme/img/lopte/lopta_2.jpg',
        'price' => 30,
        'category' => 'rekviziti',
        'brand' => 'Nike',
        'available' => true
    ],
    [
        'id' => 3,
        'title' => 'Adidas Ball',
        'description' => 'Ball for every dayBall for every dayBall for every dayBall for every dayBall for every dayBall for every day',
        'img' => './public/theme/img/lopte/lopta_3.jpg',
        'price' => 31.9,
        'category' => 'rekviziti',
        'brand' => 'Adidas',
        'available' => false
    ],
    [
        'id' => 16,
        'title' => 'Adidas Ball',
        'description' => 'Ball for every dayBall for every dayBall for every dayBall for every dayBall for every dayBall for every day',
        'img' => './public/theme/img/lopte/lopta_4.jpg',
        'price' => 50.9,
        'category' => 'rekviziti',
        'brand' => 'Adidas',
        'available' => true
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
    [
        'id' => 7,
        'title' => 'Teg 1',
        'description' => 'For your pleasure',
        'img' => './public/theme/img/tegovi/tegovi_1.jpg',
        'price' => 100,
        'category' => 'tegovi',
        'brand' => 'HSK',
        'available' => true
    ],
    [
        'id' => 8,
        'title' => 'Teg 2',
        'description' => 'For your pleasure',
        'img' => './public/theme/img/tegovi/tegovi_2.jpg',
        'price' => 100,
        'category' => 'tegovi',
        'brand' => 'HSK',
        'available' => false
    ],
    [
        'id' => 9,
        'title' => 'Teg 3',
        'description' => 'For your pleasure',
        'img' => './public/theme/img/tegovi/tegovi_3.jpg',
        'price' => 100,
        'category' => 'tegovi',
        'brand' => 'HSK',
        'available' => true
    ],
    [
        'id' => 10,
        'title' => 'Teg 6',
        'description' => 'For your pleasure',
        'img' => './public/theme/img/tegovi/tegovi_6.jpg',
        'price' => 66,
        'category' => 'tegovi',
        'brand' => 'HSK',
        'available' => true
    ],
    [
        'id' => 15,
        'title' => 'Teg 4',
        'description' => 'For your pleasure',
        'img' => './public/theme/img/tegovi/tegovi_4.jpg',
        'price' => 100,
        'category' => 'tegovi',
        'brand' => 'HSK',
        'available' => false
    ],
    [
        'id' => 17,
        'title' => 'Teg 5',
        'description' => 'For your pleasure',
        'img' => './public/theme/img/tegovi/tegovi_5.jpg',
        'price' => 98,
        'category' => 'tegovi',
        'brand' => 'HSK',
        'available' => false
    ],
    [
        'id' => 18,
        'title' => 'Teg 7',
        'description' => 'For your pleasure',
        'img' => './public/theme/img/tegovi/tegovi_7.jpg',
        'price' => 93,
        'category' => 'tegovi',
        'brand' => 'HSK',
        'available' => true
    ]

];







