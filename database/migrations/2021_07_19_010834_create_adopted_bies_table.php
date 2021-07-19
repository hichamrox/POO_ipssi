<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdoptedBiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adopted_by', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('animal_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('animal_id')->references('id')->on('aminals');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adopted_bies');
    }
}
