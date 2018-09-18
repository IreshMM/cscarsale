<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('seller_id');
            $table->string('car_model');
            $table->String('year');
            $table->String('transsmission');
            $table->String('fuel');
            $table->String('engine');
            $table->String('condition');
            $table->String('mileage');
            $table->integer('price');
            $table->String('price_condition');
            $table->String('color');
            $table->longText('description');
            $table->String('productimg'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
