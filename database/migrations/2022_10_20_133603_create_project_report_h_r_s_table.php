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
        Schema::create('project_report_HRs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('project_report_id');
            $table->foreign('project_report_id')->references('id')->on('project_reports');
            $table->unsignedBigInteger('company_employee_id');
            $table->foreign('company_employee_id')->references('id')->on('company_employees');
            $table->unsignedBigInteger('skill_id')->nullable();
            $table->foreign('skill_id')->references('id')->on('project_reports');
            $table->unsignedBigInteger('contractor_id')->nullable();
            $table->time('work_start_time');
            $table->time('work_end_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_report_h_r_s');
    }
};
