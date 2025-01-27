<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function(Blueprint $table) {

            $table->increments('id');
            $table->integer('category_id', false, true); //false = autoincrement ; true = unsigned
            $table->string('title', 255);
            $table->longText('content');
            $table->string('link', 255);
            $table->boolean('displayed_link');
            $table->boolean('published');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
