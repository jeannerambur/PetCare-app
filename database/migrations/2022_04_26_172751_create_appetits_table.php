<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppetitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appetits', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger("pet_id");
            $table->string('title_name');
            $table->string("appetit");
            $table->date('date');
            $table->string('heure')->nullable();

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
        Schema::dropIfExists('appetits');
    }
}
