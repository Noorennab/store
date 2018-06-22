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
            $table->string('name');
            $table->unsignedInteger('store_id');
            $table->foreign('store_id')->references('id')->on('stores');
            $table->unsignedInteger('type_id');
            $table->foreign('type_id')->references('id')->on('types');
            $table->unsignedInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('models');
            $table->unsignedInteger('status_id');
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->unsignedInteger('color_id');
            $table->foreign('color_id')->references('id')->on('colors');
            $table->unsignedInteger('size_id');
            $table->foreign('size_id')->references('id')->on('sizes');
            $table->integer('price');
            $table->text('Notes')->nullable();

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
