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
        Schema::table('project_reports', function (Blueprint $table) {
            $table->time('site_start_time');
            $table->time('site_end_time');
            $table->boolean('site_active');
            $table->tinyInteger('low_temperature');
            $table->tinyInteger('high_temperature');
            $table->string('weather_conditions',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
