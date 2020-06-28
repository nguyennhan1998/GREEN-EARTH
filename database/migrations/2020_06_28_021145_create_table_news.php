<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("summary");
            $table->string("image_url");
            $table->date("date");
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("event_id");
            $table->unsignedBigInteger("type_id");
            $table->unsignedBigInteger("news_type_id");
            $table->string("content");
            $table->string("status");
            $table->timestamps();
            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("event_id")->references("id")->on("events");
            $table->foreign("type_id")->references("id")->on("types");
            $table->foreign("news_type_id")->references("id")->on("news_type");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
