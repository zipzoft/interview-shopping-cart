<?php

namespace Tests\App;

use ZipzoftInterview\ShoppingCart\CashierInterface;
use ZipzoftInterview\ShoppingCart\UserInterface;
use ZipzoftInterview\ShoppingCart\CartInterface;

class Cashier implements CashierInterface
{
    /**
     * Summary cart items
     * 
     * @return array
     */
    public function summary(UserInterface $user, CartInterface $cart)
    {
        return [
            'total' => $cart->getTotal(),
        ];
    }

    /**
     * Checkout the cart
     * 
     * @param CartInterface $cart
     * @return float
     */
    public function checkout(UserInterface $user, CartInterface $cart)
    {
        return $cart->getTotal();
    }
}
