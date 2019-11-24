<?php
namespace Tests\Feature\Routes;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
class WebTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     $response = $this->get('/');
    //     $response->assertStatus(200);
    // }
    // vendor/bin/phpunit --filter 'Tests\\Feature\\Routes\\WebTest'
    // public function testIsPropertiesPageExists()
    // {
    //     $response = $this->get('/properties');
    //     $response->assertStatus(200);
    // }

    public function testRouteProperies(){
        $response = $this->get('/properties');
        $response->assertStatus(200);
    }
    public function testIsPropertyTypesPageExists()
    {
        $response = $this->get('/properties-type');
        $response->assertStatus(200);
    }
    public function testIsPropertyStatusesPageExists()
    {
        $response = $this->get('/properties-status');
        $response->assertStatus(200);
    }
    public function testIsZonesPageExists()
    {
        $response = $this->get('/properties-zone');
        $response->assertStatus(200);
    }
    public function testIsShapesPageExists()
    {
        $response = $this->get('/properties-shape');
        $response->assertStatus(200);
    }

    public function testIsPricHistoryeExists()
    {
        $response = $this->get('/properties-price-history');
        $response->assertStatus(200);
    }
}