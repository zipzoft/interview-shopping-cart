<?php

namespace ZipzoftInterview\ShoppingCart;

use ZipzoftInterview\ShoppingCart\Entity\AddressEntity;

/**
 * Shipping Address interface for the shopping cart
 * Tells the shopping cart what information is required to identify a shipping address
 */
interface ShippingInterface
{

    /**
     * Get the shipping address for the user
     * 
     * @param UserInterface $user
     * @return AddressEntity
     */
    public function getAddress(UserInterface $user): AddressEntity;
}