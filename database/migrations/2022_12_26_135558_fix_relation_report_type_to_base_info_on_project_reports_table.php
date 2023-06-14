<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('project_reports', function (Blueprint $table) {
//            $table->unsignedBigInteger('report_type_id');
//            $table->foreign('report_type_id')
//                ->references('id')
//                ->on('base_info_values');
//            $table->unique(["report_date", "project_id", "report_type_id"], 'report_date_project_type_unique');

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
            $table->dropIndex('report_date_project_type_unique');
            $table->dropForeign('project_reports_report_type_id_foreign');
            $table->dropColumn('report_type_id');
        });
//        Schema::table('project_reports', function (Blueprint $table) {
//            $table->unsignedBigInteger('report_type_id');
//            $table->foreign('report_type_id')
//                ->references('id')
//                ->on('base_info_values');
//
//
//        });
    }
};
