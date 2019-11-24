<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        // $response = $this->get('test_laravel/products');
        $response = $this->get('test_laravel/products');

        $response->assertStatus(200);
    }

    public function testProductStatus(){
        $response = $this->get('test_laravel/products_status');

        $response->assertStatus(200);
    }

    public function testProductCategory(){
        $response = $this->get('test_laravel/products_categories');

        $response->assertStatus(200);
    }

    public function testProductHistory(){
        $response = $this->get('test_laravel/products_history');

        $response->assertStatus(200);
    }
}
