<?php

// SA OVOM KLASOM USER KREIRA PRODUCT KOJI ZELI DA KUPI
// Kreirati objektno strukturu shopping-cart-a. 
// Kreirati klasu Product koja ima atribute barcode, title, price i metode pristupa. 
class Product {
    protected $title;
    protected $price;
    protected $barcode;
    private $quantity = 0;

    public function __construct($title, $price, $barcode) {
        $this->title = $title;
        $this->price = $price;
        $this->barcode = $barcode;
    }

    function getTitle() {
        return $this->title;
    }

    function getPrice() {
        return $this->price;
    }

    function getBarcode() {
        return $this->barcode;
    }

    function get_quantity() {
        return $this->quantity;
    }

    function set_quantity() {
        $this->quantity += 1;
    }
}

// OVA KLASA KREIRA PRODUCT
// Takodje kreirati klasu ShoppingCartItem koja ima atribute (Product) product i quantity i 
// metode za pristup i setovanje atributa (validacija za quantity). 
class ShoppingCartItem extends Product {
    private $total_quantity;

    public function __construct($title, $price, $barcode, $total_quantity) {
        $this->total_quantity = $total_quantity;
        parent::__construct($title, $price, $barcode);
    }

    public function getQuantity() {
        return $this->total_quantity;
    }

    public function setQuantity() {
        $this->total_quantity--;
    }

}


// SA OVOM KLASOM SE PROIZVODI UBACUJU U KORPU
// Kreirati klasu ShoppingCart koja ima atribut $cartItems = [] kao i funkciju za pristup istih. 
// Takodje u ShoppingCart klasi kreirati funkciju addToCart($product, $quantity = 1) 
// (u ovoj funkciji obratiti paznju da li item vec postoji u nizu, i i ako ima treba ga naci i 
// povecati samo quantity). 
// Takodje u istoj klasi kreirati funkciju koja izlistava sve dodate iteme. 
// Kreirati funckiju removeItem($productBarcode) koja brise item iz niza.
class ShoppingCart {
    private $cartItems = [];

    public function getItems() {
       return $this->cartItems;
    }

    public function addToCart($cartItem, $quantity=1) {

       $item_exist = false;

       foreach($this->cartItems as $item) {

        if($item->getTitle() == $cartItem->getTitle()) {
            $item_exist = true;
            $item->set_quantity();
        }
       }

        if(!$item_exist) {
            $cartItem->set_quantity();
            $this->cartItems[] = $cartItem;
        }
    }

    public function remove($barcode) {
        foreach($this->cartItems as $key => $item) {
            if($item->getBarcode() == $barcode) {
                unset($this->cartItems[$key]);
            }
        }
    }

}

// KREIRAN PROIZVOD - ADMIN
$lopta = new ShoppingCartItem('lopta', '100', 'l_123','7');
$dres = new ShoppingCartItem('dres', '200', 'd_123', '7');

// KREIRAN PROIZVOD - USER
$product_1 = new Product('lopta', '100', 'l_123');
$product_2 = new Product('lopta', '100', 'l_123');
$product_3 = new Product('lopta', '100', 'l_123');
$product_4 = new Product('dres', '200', 'd_123');
$product_5 = new Product('dres', '200', 'd_123');
$product_6 = new Product('dres', '200', 'd_123');
$product_7 = new Product('dres', '200', 'd_123');

// KREIRAN SHOPPING CART
$shopping_cart = new ShoppingCart();

// PROVERAVAM DA LI PROIZVODA IMA NA STANJU I AKO IMA UBACUJEM GA U KORPU,
// A AKO NEMA ... ZA SAD NE RADIM NISTA
if($lopta->getQuantity() != 0) {
    $lopta->setQuantity();
    $shopping_cart->addToCart($product_1);
}
if($lopta->getQuantity() != 0) {
    $lopta->setQuantity();
    $shopping_cart->addToCart($product_2);
}
if($lopta->getQuantity() != 0) {
    $lopta->setQuantity();
    $shopping_cart->addToCart($product_3);
}
if($dres->getQuantity() != 0) {
    $dres->setQuantity();
    $shopping_cart->addToCart($product_4);
}
if($dres->getQuantity() != 0) {
    $dres->setQuantity();
    $shopping_cart->addToCart($product_5);
}
if($dres->getQuantity() != 0) {
    $dres->setQuantity();
    $shopping_cart->addToCart($product_6);
}
if($dres->getQuantity() != 0) {
    $dres->setQuantity();
    $shopping_cart->addToCart($product_7);
}


// $shopping_cart->remove('l_123');

$all_cart_items = $shopping_cart->getItems();
print_r($all_cart_items);
