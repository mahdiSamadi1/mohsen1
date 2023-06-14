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
        Schema::create('company_employee_roles', function (Blueprint $table) {
            $table->unsignedBigInteger('company_employee_id');
            $table->unsignedBigInteger('skill_id');
            $table->primary(['company_employee_id' , 'skill_id']);
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
        Schema::dropIfExists('company_employee_roles');
    }
};
