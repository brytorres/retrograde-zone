<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanetsDataTable2 extends Migration
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
            $table->string('mercury_direction')->nullable();
            $table->string('mercury_sign')->nullable();
            $table->time('mercury_time')->nullable();
            $table->integer('mercury_degrees')->nullable();
            $table->integer('mercury_minutes')->nullable();
            $table->string('venus_direction')->nullable();
            $table->string('venus_sign')->nullable();
            $table->time('venus_time')->nullable();
            $table->integer('venus_degrees')->nullable();
            $table->integer('venus_minutes')->nullable();
            $table->string('mars_direction')->nullable();
            $table->string('mars_sign')->nullable();
            $table->time('mars_time')->nullable();
            $table->integer('mars_degrees')->nullable();
            $table->integer('mars_minutes')->nullable();
            $table->string('jupiter_direction')->nullable();
            $table->string('jupiter_sign')->nullable();
            $table->time('jupiter_time')->nullable();
            $table->integer('jupiter_degrees')->nullable();
            $table->integer('jupiter_minutes')->nullable();
            $table->string('saturn_direction')->nullable();
            $table->string('saturn_sign')->nullable();
            $table->time('saturn_time')->nullable();
            $table->integer('saturn_degrees')->nullable();
            $table->integer('saturn_minutes')->nullable();
            $table->string('uranus_direction')->nullable();
            $table->string('uranus_sign')->nullable();
            $table->time('uranus_time')->nullable();
            $table->integer('uranus_degrees')->nullable();
            $table->integer('uranus_minutes')->nullable();
            $table->string('neptune_direction')->nullable();
            $table->string('neptune_sign')->nullable();
            $table->time('neptune_time')->nullable();
            $table->integer('neptune_degrees')->nullable();
            $table->integer('neptune_minutes')->nullable();
            $table->string('pluto_direction')->nullable();
            $table->string('pluto_sign')->nullable();
            $table->time('pluto_time')->nullable();
            $table->integer('pluto_degrees')->nullable();
            $table->integer('pluto_minutes')->nullable();
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
