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
            $table->dropForeign('project_reports_project_site_id_foreign');
//            $table->dropForeign(['project_site_id']);
//            $table->dropColumn('project_site_id');
        });
        Schema::table('project_reports', function (Blueprint $table) {
            $table->unsignedBigInteger('project_site_id')->nullable()->change();

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
