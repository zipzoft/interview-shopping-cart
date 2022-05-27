<?php

namespace ZipzoftInterview\ShoppingCart\Entity;

use JsonSerializable;
use ArrayAccess;

abstract class AbstractEntity implements JsonSerializable, ArrayAccess
{

    public function __construct(array $data = [])
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
    }

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

    /**
     * Convert to an array
     */
    public function toArray()
    {
        $array = [];
        foreach ($this as $key => $value) {
            $array[$key] = $value;
        }

        return $array;
    }

    /**
     * Convert to JSON
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * Whether a offset exists
     */
    public function offsetExists($offset): bool
    {
        return isset($this->$offset);
    }

    /**
     * Offset to retrieve
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }

    /**
     * Offset to set
     */
    public function offsetSet($offset, $value): void
    {
        $this->$offset = $value;
    }

    /**
     * Offset to unset
     */
    public function offsetUnset($offset): void
    {
        unset($this->$offset);
    }


    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }

        return null;
    }
}
