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
        Schema::table('project_report_outcomes', function (Blueprint $table) {
            $table->unsignedBigInteger('project_report_id');
            $table->foreign('project_report_id')->references('id')->on('project_reports');
            $table->unsignedBigInteger('company_id')->after('id');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->text('description')->nullable();
            $table->unsignedbiginteger('project_wbs_id')->nullable();
            $table->foreign('project_wbs_id')->references('id')->on('project_w_b_s');
            $table->float('qty', 8, 2)->nullable();
            $table->unsignedBigInteger('unit_id')->nullable();
            $table->foreign('unit_id')->references('id')->on('base_info_values');
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
