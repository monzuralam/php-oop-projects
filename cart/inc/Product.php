<?php
class Product{
    private int $id;
    private string $title;
    private float $price;
    private int $availibleQuantity;

    /**
     * Constructor
     *
     * @param int $id
     * @param string $title
     * @param float $price
     * @param int $availibleQuantity
     */
    public function __construct( $id, $title, $price, $availibleQuantity ){
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->availibleQuantity = $availibleQuantity;
    }

    /**
     * Add Product $product into cart. If product already exists inside cart
     * It must update quantity
     *
     * @param Cart $cart
     * @param integer $quantity
     * @return void
     */
    public function addToCart( Cart $cart, int $quantity){

    }

    /**
     * Remove product from cart
     *
     * @param Cart $cart
     * @return void
     */
    public function removeFromCart( Cart $cart ){

    }
}