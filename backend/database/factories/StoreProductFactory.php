<?php


namespace Database\Factories;

use App\Models\StoreProduct;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

class StoreProductFactory extends Factory
{
    protected $model = StoreProduct::class;

    public function definition()
    {
        return [
            'store_id' => Store::factory(),
            'product_id' => Product::factory(),
            'stock' => $this->faker->numberBetween(1, 100),
        ];
    }
}
