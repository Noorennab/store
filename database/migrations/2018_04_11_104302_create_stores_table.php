<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('User_name');
            $table->unsignedInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->string('password');
            $table->string('email');
            $table->string('store_name');
            $table->string('store_locate');
            $table->string('map_locate');
            $table->string('FB_page');
            $table->integer('phone');
            $table->integer('session_key');
            $table->foreign('email')->references('email')->on('password_resets');
            $table->timestamps();
            // note
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
