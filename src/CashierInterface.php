<?php

namespace ZipzoftInterview\ShoppingCart;

/**
 * CashierInterface
 * Tells the shopping cart How to charge the user
 */
interface CashierInterface {

    /**
     * Summary cart items
     * 
     * @return array
     */
    public function summary(UserInterface $user, CartInterface $cart);

    /**
     * Checkout the cart
     * 
     * @param CartInterface $cart
     * @return float
     */
    public function checkout(UserInterface $user, CartInterface $cart);
}