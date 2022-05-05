<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePestControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pest_controls', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger("pet_id");
            $table->string("type");
            $table->string("name");
            $table->string("dose");
            $table->dateTime('date');

            $table->timestamps();

            $table->foreign('pet_id')->references('id')->on('pets')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pest_controls');
    }
}
