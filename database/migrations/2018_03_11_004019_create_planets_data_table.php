<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanetsDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planets_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('month');
            $table->integer('day');
            $table->string('mercury_direction');
            $table->string('mercury_sign');
            $table->time('mercury_time');
            $table->integer('mercury_degrees');
            $table->integer('mercury_minutes');
            $table->string('venus_direction');
            $table->string('venus_sign');
            $table->time('venus_time');
            $table->integer('venus_degrees');
            $table->integer('venus_minutes');
            $table->string('mars_direction');
            $table->string('mars_sign');
            $table->time('mars_time');
            $table->integer('mars_degrees');
            $table->integer('mars_minutes');
            $table->string('jupiter_direction');
            $table->string('jupiter_sign');
            $table->time('jupiter_time');
            $table->integer('jupiter_degrees');
            $table->integer('jupiter_minutes');
            $table->string('saturn_direction');
            $table->string('saturn_sign');
            $table->time('saturn_time');
            $table->integer('saturn_degrees');
            $table->integer('saturn_minutes');
            $table->string('uranus_direction');
            $table->string('uranus_sign');
            $table->time('uranus_time');
            $table->integer('uranus_degrees');
            $table->integer('uranus_minutes');
            $table->string('neptune_direction');
            $table->string('neptune_sign');
            $table->time('neptune_time');
            $table->integer('neptune_degrees');
            $table->integer('neptune_minutes');
            $table->string('pluto_direction');
            $table->string('pluto_sign');
            $table->time('pluto_time');
            $table->integer('pluto_degrees');
            $table->integer('pluto_minutes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planets_data');
    }
}
