<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corrals', function (Blueprint $table) {
            $table->id();
            $table->integer('animal')->unsigned();
            $table->foreign('animal')->references('id')->on('animals');
            $table->string('nombre');
            $table->string('capacidad');
            $table->string('detalle');
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
        Schema::dropIfExists('corrals');
    }
}
