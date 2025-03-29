<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StoresController;
use App\Http\Controllers\StoreProductsController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPhotosController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\OrderItemsController;
use App\Http\Controllers\FavouritesController;
use App\Http\Controllers\AddressesController;

// API для пользователей
Route::apiResource('users', UserController::class);

// API для магазинов
Route::apiResource('stores', StoresController::class);

// API для продуктов в магазине
Route::apiResource('store_products', StoreProductsController::class);

// API для заказов
Route::apiResource('reviews', ReviewsController::class);

// API для продуктов
Route::apiResource('products', ProductController::class);

// API для фото продуктов
Route::apiResource('product_photos', ProductPhotosController::class);

// API для заказов
Route::apiResource('orders', OrdersController::class);

// API для товаров заказа
Route::apiResource('order_items', OrderItemsController::class);

// API для избранного
Route::apiResource('favourites', FavouritesController::class);

// API для избранногоS
Route::apiResource('addresses', AddressesController::class);


