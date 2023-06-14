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
        Schema::table('project_employees', function (Blueprint $table) {
            $table->dropForeign('project_employees_skill_id_foreign');
        });
        Schema::table('project_employees', function (Blueprint $table) {
            $table->dropColumn('skill_id');
        });
        Schema::table('project_employees', function (Blueprint $table) {
            $table->string('skill_id',255);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_employees', function (Blueprint $table) {
            //
        });
    }
};
