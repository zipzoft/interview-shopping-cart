<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Tests\App\Cart;
use ZipzoftInterview\ShoppingCart\Entity\CartItemEntity;
use ZipzoftInterview\ShoppingCart\Entity\ProductEntity;

class CartTest extends TestCase
{

    private Cart $cart;

    protected function setUp(): void
    {
        parent::setUp();

        $this->cart = new Cart();
    }

    public function test_should_add_item_cart_success()
    {
        $item = $this->cart->add(ProductEntity::fromArray([
            'id' => 1,
            'name' => 'Product 1',
            'price' => 10.00,
        ]));

        $this->assertInstanceOf(CartItemEntity::class, $item);

        $this->assertEquals(1, $item->product);
        $this->assertEquals(1, $item->quantity);
        $this->assertEquals(10.00, $item->price);
    }

    public function test_should_remove_item_cart_success()
    {
        $item = $this->cart->add(ProductEntity::fromArray([
            'id' => 1,
            'name' => 'Product 1',
            'price' => 10.00,
        ]));

        $this->assertTrue($this->cart->remove($item));

        $this->assertEmpty($this->cart->getProducts());
    }


    public function test_should_remove_item_cart_fail()
    {
        $item = $this->cart->add(ProductEntity::fromArray([
            'id' => 1,
            'name' => 'Product 1',
            'price' => 10.00,
        ]));

        $this->assertFalse($this->cart->remove(ProductEntity::fromArray([
            'id' => 2,
            'name' => 'Product 2',
            'price' => 20.00,
        ])));

        $this->assertNotEmpty($this->cart->getProducts());

        $this->assertFalse($this->cart->remove(CartItemEntity::fromArray([
            'product' => 2,
            'quantity' => 1,
            'price' => 20.00,
        ])));

        $this->assertNotEmpty($this->cart->getProducts());
    }

    public function test_should_get_total_cart_success()
    {
        $this->cart->add(ProductEntity::fromArray([
            'id' => 1,
            'name' => 'Product 1',
            'price' => 10.00,
        ]));

        $this->cart->add(ProductEntity::fromArray([
            'id' => 2,
            'name' => 'Product 2',
            'price' => 20.00,
        ]));

        $this->assertEquals(30.00, $this->cart->getTotal());
    }

    public function test_should_get_total_cart_fail()
    {
        $this->cart->add(ProductEntity::fromArray([
            'id' => 1,
            'name' => 'Product 1',
            'price' => 10.00,
        ]));

        $this->cart->add(ProductEntity::fromArray([
            'id' => 2,
            'name' => 'Product 2',
            'price' => 20.00,
        ]));

        $this->cart->remove(ProductEntity::fromArray([
            'id' => 1,
            'name' => 'Product 1',
            'price' => 10.00,
        ]));

        $this->assertEquals(20.00, $this->cart->getTotal());
    }
}
