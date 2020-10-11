<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquivalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equivals', function (Blueprint $table) {
            $table->id();

            $table->string('codigo');
            $table->string('equi1')->nullable();
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
        Schema::dropIfExists('equivals');
    }
}
