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
        Schema::table('project_reports', function (Blueprint $table) {
            $table->unique(["report_date", "project_id", "report_type_id"], 'report_date_project_type_unique');
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
            $table->dropUnique('report_date_project_type_unique');
        });
    }
};
