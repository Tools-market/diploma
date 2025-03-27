<?php

// database/seeders/DatabaseSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Address;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Store;
use App\Models\ProductPhoto;
use App\Models\StoreProduct;
use App\Models\Favourite;
use App\Models\Review;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Создаем 10 адресов
        Address::factory(10)->create();
        
        // Создаем пользователей
        User::factory(10)->create();
        
        // Создаем магазины
        Store::factory(5)->create();
        
        // Создаем продукты
        Product::factory(20)->create();
        
        // Создаем фото продуктов
        ProductPhoto::factory(50)->create();
        
        // Создаем связь магазина и продуктов
        StoreProduct::factory(30)->create();
        
        // Добавляем избранные товары для пользователей
        Favourite::factory(15)->create();
        
        // Добавляем отзывы
        Review::factory(30)->create();

        // Создаем заказы
        Order::factory(20)->create()->each(function ($order) {
            // Добавляем от 1 до 5 товаров в заказ
            OrderItem::factory(rand(1, 5))->create([
                'order_id' => $order->id,
            ]);
        });
    }
}