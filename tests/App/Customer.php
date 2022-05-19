<?php

namespace Tests\App;

use ZipzoftInterview\ShoppingCart\UserInterface;

class Customer implements UserInterface
{
    /**
     * Get the user's ID
     */
    public function getIdentifier()
    {
        return 1;
    }

    /**
     * Get the user's name
     */
    public function getName()
    {
        return 'John Doe';
    }
}
