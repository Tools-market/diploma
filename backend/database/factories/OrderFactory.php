<?php


namespace Database\Factories;

use App\Models\Order;
use App\Models\User;
use App\Models\Store;
use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'address_id' => Address::factory(),
            'store_id' => Store::factory(),
            'delivery_method' => $this->faker->randomElement(['self_pickup', 'home_delivery']),
            'total_price' => $this->faker->randomFloat(2, 1, 1000),
            'status' => $this->faker->randomElement(['new', 'processing', 'completed']),
        ];
    }
}
