<?php


namespace Database\Factories;

use App\Models\ProductPhoto;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductPhotoFactory extends Factory
{
    protected $model = ProductPhoto::class;

    public function definition()
    {
        return [
            'product_id' => Product::factory(),
            'photo_url' => $this->faker->imageUrl(),
        ];
    }
}
