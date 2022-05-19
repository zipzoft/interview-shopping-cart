<?php

namespace ZipzoftInterview\ShoppingCart\Entity;

abstract class AbstractEntity
{
    /**
     * Initial from an array of data
     */
    public static function fromArray(array $item)
    {
        $entity = new static();
        foreach ($item as $key => $value) {
            $entity->$key = $value;
        }

        return $entity;
    }
}
