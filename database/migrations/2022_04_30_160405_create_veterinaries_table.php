<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeterinariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veterinaries', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger("pet_id");
            $table->string("name");
            $table->string("lastname");
            $table->string("adress");
            $table->string("zipcode");
            $table->string("city");
            $table->string('phone');
            $table->string('email');
            $table->string('image')->default('default-user.jpg');

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
        Schema::dropIfExists('veterinaries');
    }

}
