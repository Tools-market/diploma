<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPhotosTable extends Migration
{
    public function up()
    {
        Schema::create('product_photos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products');
            $table->string('photo_url');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_photos');
    }
}
