<?php

namespace Tests\Feature;

use App\Models\product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
class ProductInsertTest extends TestCase
{
    /**
     * @test
     */
    use RefreshDatabase;
    public function store_a_new_product()
    {


        $this->get('api/add-product');
        $this->post('Save',[
            'nama_product' => 'sepatu test 1',
            'harga_product' => '1200000',
            'stok_product' => '200',
            'terjual' => '100',
            'gambar' =>  'gambarsepatu1.png',
            'kategori_id' => '3',
            'deskripsi_product' => 'Lorem ipsum dolor sit .',
        ]);

        // $this->assertStatus(200);
    }
}
