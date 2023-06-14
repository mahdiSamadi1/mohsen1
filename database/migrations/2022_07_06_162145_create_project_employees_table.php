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
        Schema::create('project_employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_employee_id');
            $table->unsignedBigInteger('skill_id');
            $table->unsignedBigInteger('project_id');
            $table->timestamps();
            $table->foreign('company_employee_id')->references('id')->on('company_employees');
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('skill_id')->references('id')->on('skills');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_employees');
    }
};
