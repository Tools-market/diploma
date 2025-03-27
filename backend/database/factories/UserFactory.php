<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'middle_name' => $this->faker->optional()->firstName,
            'phone' => '+7(' . $this->faker->numberBetween(100, 999) . ')-' . 
                $this->faker->numberBetween(100, 999) . '-' . 
                $this->faker->numberBetween(10, 99) . '-' . 
                $this->faker->numberBetween(10, 99),
            'email' => $this->faker->unique()->safeEmail,
            'birth_date' => $this->faker->date,
            'address_id' => \App\Models\Address::factory(),
        ];
    }
}
