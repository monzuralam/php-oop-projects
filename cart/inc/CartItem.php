<?php
class CartItem{
    private Product $product;
    private int $quantity;

    /**
     * CartItem constructor
     *
     * @param \Product $product
     * @param int $quantity
     */
    public function __construct(\Product $product, $quantity){
        $this->product = $product;
        $this->quantity = $quantity;
    }

    /**
     * get product
     *
     * @return \Product
     */ 
    public function getProduct(){
        return $this->product;
    }
    
    /**
     * set Product
     *
     * @param \Product $product
     */
    public function setProduct( $product ){
        $this->product = $product;
    }

    /**
     * get total quantity
     *
     * @return int
     */
    public function getQuantity(){
        return $this->quantity;
    }

    /**
     * setQuantity
     *
     * @param int $quantity
     */
    public function setQuantity( $quantity ){
        $this->quantity = $quantity;
    }

    public function increaseQuantity(){

    }

    public function decreaseQuantity(){

    }
}