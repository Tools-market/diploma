<?php


namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    protected $model = Address::class;

    public function definition()
    {
        return [
            'address' => $this->faker->address,
            'entrance' => $this->faker->optional()->word,
            'floor' => $this->faker->optional()->numberBetween(1, 25),
            'apartment' => $this->faker->optional()->numberBetween(1, 100),
        ];
    }
}
