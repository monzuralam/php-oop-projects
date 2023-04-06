<?php
class Cart{
    private array $items = [];

    /**
     * Add Product $product into cart. If product already exits inside cart
     * It must update quantity.
     * This must create CartItem and return CartItem from method.
     * Bonus: $quantity must not become more than whatever
     * is $availibleQuantity of the product
     *
     * @param Product $product
     * @param integer $quantity
     * @return CartItem
     */
    public function addProduct( Product $product, int $quantity ){
        // find product in cart
        foreach( $this->items as $item ){
            if( $item->getProduct()->getId() === $product->getId() ){
                if( $item->getQuantity() + $quantity > $item->getProduct()->getAvailibleQuantity() ){
                    throw new Exception( 'Product quantity can be more than' . $product->getAvailibleQuantity() );
                }
                $item->setQuantity( $item->getQuantity() + $quantity );
            }
        }
        $cartItem = new CartItem( $product, $quantity );
    }

    /**
     * Remove product from cart
     * @param Product $product
     *
     * @param Product $product
     * @return void
     */
    public function removeProduct( Product $product ){

    }
    
    /**
     * This returns total number of products added in cart
     *
     * @return int
     */
    public function getTotalQuantity(){

    }

    /**
     * This returns total price of products added in cart
     *
     * @return float
     */
    public function getTotalSum(){

    }
}