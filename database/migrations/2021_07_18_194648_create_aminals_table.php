<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAminalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aminals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('dispo');
            $table->date('date_reception');
            $table->string('race');
            $table->integer('age');
            $table->string('weight');
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
        Schema::dropIfExists('aminals');
    }
}
