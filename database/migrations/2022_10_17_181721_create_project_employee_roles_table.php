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
        Schema::create('project_employee_roles', function (Blueprint $table) {
            $table->unsignedBigInteger('project_employee_id');
            $table->unsignedBigInteger('skill_id');
            $table->primary(['project_employee_id' , 'skill_id']);
            $table->timestamps();
        });

        Schema::table('project_employees', function (Blueprint $table) {
            $table->unique(["project_id", "company_employee_id"], 'employee_project_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_employee_roles');
        Schema::table('project_employees', function (Blueprint $table) {
            $table->dropUnique('employee_project_unique');
        });
    }
};
