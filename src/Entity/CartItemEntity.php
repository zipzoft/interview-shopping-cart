<?php

namespace ZipzoftInterview\ShoppingCart\Entity;

/**
 * CartItemEntity
 * You can use this class to store the cart item in your database
 */
class CartItemEntity extends AbstractEntity
{
    /**
     * ID of the cart item
     * 
     * @var mixed
     */
    public $id;

    /**
     * ID of the product
     */
    public $product;

    /**
     * Quantity of the product
     * 
     * @var int
     */
    public $quantity;

    /**
     * Price of the product
     * 
     * @var float
     */
    public $price;
}
