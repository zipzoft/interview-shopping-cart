<?php

namespace ZipzoftInterview\ShoppingCart;

/**
 * PaymentMethodInterface
 * Tells the shopping cart what your payment methods are available
 */
interface PaymentMethodInterface {

    /**
     * Get the payment method's ID
     * 
     * @return mixed
     */
    public function getIdentifier();

    /**
     * Get the payment method's name
     * 
     * @return string
     */
    public function getName();

    /**
     * Get the payment method's description
     * 
     * @return string
     */
    public function getDescription();
    
    /**
     * Check if the payment method is available for the user
     *
     * @return boolean
     */
    public function isAvailable();
}