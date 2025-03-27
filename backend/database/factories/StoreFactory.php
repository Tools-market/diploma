<?php

namespace Database\Factories;

use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

class StoreFactory extends Factory
{
    protected $model = Store::class;

    public function definition()
    {
        return [
            'phone' => '+7(' . $this->faker->numberBetween(100, 999) . ')-' . 
                $this->faker->numberBetween(100, 999) . '-' . 
                $this->faker->numberBetween(10, 99) . '-' . 
                $this->faker->numberBetween(10, 99),
            'working_hours' => '09:00 - 21:00',
            'address_id' => \App\Models\Address::factory(),
        ];
    }
}
