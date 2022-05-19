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
}
