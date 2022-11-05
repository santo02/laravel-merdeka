<?php

namespace Tests\Feature;

use App\Models\product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * @test
     */
    public function test_see_all_product()
    {
        $response = $this->get('/product-show');

        $response->assertStatus(200);
    }

}
