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
        Schema::table('company_employees', function (Blueprint $table) {
            $table->unique(["mobile", "company_id"], 'employee_company_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('company_employees', function (Blueprint $table) {
            $table->dropUnique('employee_company_unique');
        });
    }
};
