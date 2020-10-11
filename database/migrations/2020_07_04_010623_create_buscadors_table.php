<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuscadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buscadors', function (Blueprint $table) {
            $table->increments('id');

            $table->string('codigofil');
            $table->string('equi1');
            $table->string('equi2')->nullable();
            $table->string('equi3')->nullable();
            $table->string('equi4')->nullable();
            $table->string('equi5')->nullable();


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
        Schema::dropIfExists('buscadors');
    }
}
