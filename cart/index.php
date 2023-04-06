<?php

/**
 * Autoloading all class
 */
spl_autoload_register( function( $class ){
    require_once( __DIR__ . 'inc/' . $class . '.php' );
});

$product1 = new Product( 1, 'Macbook Air Pro', 2000, 10 );
$product2 = new Product( 2, 'Realme C25s', 1000, 10 );
$product3 = new Product( 3, 'Airbuds Pro', 500, 10 );

$cart = new Cart();
$cartItem1 = $cart->addProduct( $product1, 1);
$cartItem2 = $product2->addToCart( $cart, 1);

echo "Number of items in cart:<br>";
echo $cart->getTotalQuantity();
echo "Total price of items in cart:<br>";
echo $cart->getTotalSum();

$cartItem2->increaseQuantity();
$cartItem2->increaseQuantity();

echo "Number of items in cart: <br>";
echo $cart->getTotalQuantity();

echo "Total price of items in cart: <br>";
echo $cart->getTotalSum();