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
//        dd(\Doctrine\DBAL\Types\Type::getTypesMap());
        Schema::table('project_reports', function (Blueprint $table) {
//            $table->unique(["report_date", "project_id", "report_type_id"], 'report_date_project_type_unique');
            $table->time('site_start_time')->nullable()->change();
            $table->time('site_end_time')->nullable()->change();
            $table->smallInteger('site_active')->tinyInteger('site_active')->nullable()->change();
            $table->smallInteger('low_temperature')->tinyInteger('low_temperature')->nullable()->change();
            $table->smallInteger('high_temperature')->tinyInteger('high_temperature')->nullable()->change();
            $table->string('weather_conditions')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_reports', function (Blueprint $table) {
            //
        });
    }
};
