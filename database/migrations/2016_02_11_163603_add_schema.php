<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSchema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->string('content');
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('category_post', function (Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('post_id');
            $table->unsignedInteger('category_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('category_post');
        Schema::drop('categories');
        Schema::drop('posts');
    }
}
