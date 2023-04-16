<?php

namespace Tests\Feature;
use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CartControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function testAddItemToCartSuccess():void{
        $response =  $this->get('/book/1');
     
        $book = Book::findOrFail(1);
        $cart = [
             "name" => "story book",
                "quantity" => 1,
                "price" => 300,
                "image" => "mypicture.jpg"
            ];
            
            
                $response->assertStatus(200);
               
        
            
    }
    public function testShoppingCart() :void{
        $response =  $this->get('shopping-cart');
        $response->assertStatus(200);
    }
}
