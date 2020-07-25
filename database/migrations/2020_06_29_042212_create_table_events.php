<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEvents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("image")->nullable();
            $table->string("description");
            $table->string("content");
            $table->dateTime("start_at");
            $table->dateTime("end_at");
            $table->integer("total_money");
            $table->unsignedBigInteger("organization_id");
            $table->timestamps();
            $table->foreign("organization_id")->references("id")->on("organizations");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
