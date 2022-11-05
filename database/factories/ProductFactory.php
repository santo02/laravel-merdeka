<?php

namespace Database\Factories;

use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class ProductFactory extends Factory
{
    protected $model = product::class;
    public function definition()
    {
        return [
            'nama_product' => $this->faker->title,
            'harga_product' => $this->faker->number,
            'stok_product' => $this->faker->number,
            'terjual' => $this->faker->number,
            'gambar' =>  $this->faker->imageUrl(640,480),
            'kategori_id'=>$this->faker->number,
            'deskripsi_product'=>$this->faker->text,

        ];
    }
}
