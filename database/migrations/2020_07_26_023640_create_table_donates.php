<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDonates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donates', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("image")->nullable();
            $table->string("slug")->nullable();
            $table->string("description");
            $table->string("content")->nullable();
            $table->dateTime("start_at");
            $table->dateTime("end_at");
            $table->integer("target_money");
            $table->decimal("raiser_money",12,0)->default(0);
            $table->unsignedBigInteger("view_count")->default(0);
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
        Schema::dropIfExists('donates');
    }
}
