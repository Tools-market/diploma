<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Store;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Address::factory(10)->create();
        User::factory(10)->create();
        Store::factory(5)->create();
        Product::factory(20)->create();
    }
}
