<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableArticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("image")->nullable();
            $table->string("description");
            $table->string("slug")->nullable();
            $table->string("content")->nullable();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("category_id");
            $table->unsignedBigInteger("view_count")->default(0);
            $table->timestamps();
            $table->foreign("category_id")->references("id")->on("categories");
            $table->foreign("user_id")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
