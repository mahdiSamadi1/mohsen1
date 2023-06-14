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
        Schema::table('project_report_hrs', function (Blueprint $table) {
   //         $table->dropForeign('project_report_hrs_project_employee_id_foreign');
//            $table->dropColumn('project_employee_id');
//            $table->unsignedBigInteger('company_employee_id');
            //$table->foreign('company_employee_id')->references('id')->on('company_employees');
          //  $table->string('title',50)->nullable();
//            $table->unsignedBigInteger('company_employee_id')->nullable()->change();
        });
        // Schema::rename('project_report_hrs', 'project_report_h_r_s');
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
