<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wounds', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger("pet_id");
            $table->string("name");
            $table->dateTime('wound_date');
            $table->dateTime('healing_date');

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
        Schema::dropIfExists('wounds');
    }
}
