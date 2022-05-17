<?php

namespace ZipzoftInterview\ShoppingCart;

/**
 * UserInterface
 * Tells the shopping cart what information is required to identify a user
 */
interface UserInterface
{

    /**
     * Get the user's ID
     */
    public function getIdentifier();

    /**
     * Get the user's name
     */
    public function getName();
}