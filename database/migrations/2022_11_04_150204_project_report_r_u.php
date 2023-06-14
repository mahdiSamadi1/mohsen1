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
        Schema::table('project_report_r_u', function (Blueprint $table) {
            $table->dropForeign('project_report_hrs_skill_id_foreign');
            $table->foreign('skill_id')->references('id')->on('skills');
            $table->time('work_start_time')->nullable()->change();
            $table->time('work_end_time')->nullable()->change();
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
