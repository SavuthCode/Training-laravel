<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * // vendor/bin/phpunit --filter 'Tests\\Feature\\Routes\\WebTest'
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/test');

        $response->assertStatus(200);
    }
}
