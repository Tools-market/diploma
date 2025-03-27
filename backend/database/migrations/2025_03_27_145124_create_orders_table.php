<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('address_id')->nullable()->constrained('addresses');
            $table->foreignId('store_id')->nullable()->constrained('stores');
            $table->enum('delivery_method', ['self_pickup', 'home_delivery']);
            $table->decimal('total_price', 10, 2);
            $table->enum('status', ['new', 'processing', 'completed']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
