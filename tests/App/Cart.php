<?php

namespace Tests\App;

use ZipzoftInterview\ShoppingCart\CartInterface;
use ZipzoftInterview\ShoppingCart\Entity\CartItemEntity;
use ZipzoftInterview\ShoppingCart\Entity\ProductEntity;

class Cart implements CartInterface
{

    /**
     * @var CartItemEntity[]
     */
    private $items = [];

    /**
     * Add a product to the cart
     * 
     * @param ProductEntity $item
     * @return \ZipzoftInterview\ShoppingCart\Entity\CartItemEntity
     */
    public function add(ProductEntity $item): CartItemEntity
    {
        $this->items[] = $item;

        return CartItemEntity::fromArray([
            'product' => $item->id,
            'quantity' => 1,
            'price' => $item->price,
        ]);
    }

    /**
     * Remove a product from the cart
     * 
     * @param ProductEntity|CartItemEntity $product
     * @return boolean
     */
    public function remove($item)
    {
        $key = array_search($item, $this->items);

        if ($key !== false) {
            unset($this->items[$key]);
            return true;
        }

        return false;
    }

    /**
     * Get all products in the cart
     * 
     * @return CartItemEntity[]
     */
    public function getProducts()
    {
        return $this->items;
    }

    /**
     * Get the total price of the cart
     * 
     * @return float
     */
    public function getTotal()
    {
        $total = 0;

        foreach ($this->items as $item) {
            $total += $item->price;
        }

        return $total;
    }
}
