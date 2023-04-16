<?php

namespace Tests\Feature;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CartControllerTest extends TestCase
{  
  public function testAddItemToCartSuccess():void{
        $response =  $this->get('/book/4');
        $response->assertStatus(302);
            
    }
    public function testShoppingCart() {
        $response =  $this->get('shopping-cart');
        $response->assertStatus(200);
    }
    public function testUpdateCart() {
        $response = $this->patch('/update-shopping-cart');
        $response->assertStatus(200);
    }
    public function testDeleteCart() {
        $response = $this->delete('/delete-cart-product');
        $response->assertStatus(200);
    }
}

