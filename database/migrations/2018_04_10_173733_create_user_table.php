<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('User_id');
            $table->string('User_name');
            $table->integer('role_id');
            $table->string('password');
            $table->string('email');
            $table->string('shop_name');
            $table->string('shop_locate');
            $table->string('map_locate');
            $table->string('FB_page');
            $table->integer('phone');
            $table->integer('session_key');
            $table->string('name');
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
        Schema::dropIfExists('user');
    }
}
