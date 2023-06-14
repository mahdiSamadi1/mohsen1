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
        Schema::rename('project_report_HRs','project_report_r_u');
        schema::table('project_report_r_u',function(BluePrint $table){
            $table->dropForeign('project_report_hrs_company_employee_id_foreign');
            $table->unsignedBigInteger('resource_usage')->nullable();
            $table->unsignedBigInteger('resource_type_id');
            $table->unsignedBigInteger('unit_id');
            $table->renameColumn('company_employee_id','resource_id');
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
