<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableNewsType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_type', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("url");
            $table->string("show");
            $table->unsignedBigInteger("type_id");
            $table->integer("target");
            $table->string("icon");
            $table->timestamps();
            $table->foreign("type_id")->references("id")->on("types");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_type');
    }
}
