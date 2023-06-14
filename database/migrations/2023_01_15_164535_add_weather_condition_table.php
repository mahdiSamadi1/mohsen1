<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent')->nullable();
            $table->foreign('parent')->references('id')->on('cities');
            $table->string('title');
            $table->tinyInteger('sort')->nullable();
            $table->timestamps();
        });

        Schema::create('weather_condition', function (Blueprint $table) {
            $table->id();
            $table->json('weather_json');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->date('date');
            $table->double('lat')->nullable();
            $table->double('lng')->nullable();
            $table->tinyInteger('low_temperature');
            $table->tinyInteger('high_temperature');
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
        Schema::dropIfExists('weather_condition');
        Schema::dropIfExists('cities');
    }
};
