<?php

namespace ZipzoftInterview\ShoppingCart;

/**
 * AddressEntity
 * You can use this entity to store the shipping address for the user
 */
class AddressEntity
{
    /**
     * ID of the address
     * 
     * @var mixed
     */
    public $id;

    /**
     * Name of the address
     */
    public $name;

    /**
     * Address of the address
     */
    public $address;

    /**
     * City of the address
     */
    public $city;

    /**
     * State of the address
     */
    public $state;

    /**
     * Zip of the address
     */
    public $zip;

    /**
     * Country of the address
     */
    public $country;

}