<?php

// Kreirati objektno strukturu shopping-cart-a. 
// Kreirati klasu Product koja ima atribute barcode, title, price i metode pristupa. 



class Product {
    protected $title;
    protected $price;
    protected $barcode;

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
}

// Takodje kreirati klasu ShoppingCartItem koja ima atribute (Product) product i quantity i 
// metode za pristup i setovanje atributa (validacija za quantity). 
class ShoppingCartItem extends Product {
    private $quantity;

    public function __construct($title, $price, $barcode, $quantity = 1) {
        $this->quantity = $quantity;
        parent::__construct($title, $price, $barcode);
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function setQuantity($newQuantity) {
        $this->quantity += $newQuantity;
    }

}

$shopping_cart_item_1 = new ShoppingCartItem('lopta', '100', 'l_123');
$shopping_cart_item_3 = new ShoppingCartItem('lopta', '100', 'l_123');
$shopping_cart_item_2 = new ShoppingCartItem('dres', '50', 'd_123');
$shopping_cart_item_4 = new ShoppingCartItem('dres', '50', 'l_123');
$shopping_cart_item_5 = new ShoppingCartItem('lopta', '50', 'l_123');

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
            $item->setQuantity($quantity);
        }
       }

        if(!$item_exist) {
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

$shopping_cart = new ShoppingCart();

$shopping_cart->addToCart($shopping_cart_item_1);
$shopping_cart->addToCart($shopping_cart_item_2);
$shopping_cart->addToCart($shopping_cart_item_3);
$shopping_cart->addToCart($shopping_cart_item_4);
$shopping_cart->addToCart($shopping_cart_item_5);

$shopping_cart->remove('l_123');

$all_cart_items = $shopping_cart->getItems();
print_r($all_cart_items);
