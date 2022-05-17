<?php 

namespace ZipzoftInterview\ShoppingCart;

use ZipzoftInterview\ShoppingCart\Entity\ProductEntity;
use ZipzoftInterview\ShoppingCart\Entity\CartItemEntity;

/**
 * CartInterface
 * Tells the shopping cart how to store and retrieve cart items
 */
interface CartInterface {
{
    /**
     * Add a product to the cart
     * 
     * @param ProductEntity $item
     * @return \ZipzoftInterview\ShoppingCart\Entity\CartItemEntity
     */
    public function add(ProductEntity $item): CartItemEntity;

    /**
     * Remove a product from the cart
     * 
     * @param ProductEntity|CartItemEntity $product
     * @return boolean
     */
    public function remove(ProductEntity|CartItemEntity $item);

    /**
     * Get all products in the cart
     * 
     * @return CartItemEntity[]
     */
    */
    public function getProducts();
    
    /**
     * Get the total price of the cart
     * 
     * @return float
     */
    public function getTotal();
}