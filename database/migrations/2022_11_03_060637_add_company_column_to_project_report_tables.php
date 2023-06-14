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
            $table->unsignedBigInteger('company_id')->after('id');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->unsignedBigInteger('project_site_id')->nullable()->change();
        });
        Schema::table('project_report_r_u', function (Blueprint $table) {
            $table->unsignedBigInteger('company_id')->after('id');
            $table->foreign('company_id')->references('id')->on('companies');
        });
        Schema::table('project_sites', function (Blueprint $table) {
            $table->unsignedBigInteger('company_id')->after('id');
            $table->foreign('company_id')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_report_tables', function (Blueprint $table) {
            //
        });
    }
};
