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
            $table->unsignedFloat('width')->nullable();
            $table->unsignedFloat('height')->after('width')->nullable();
            $table->unsignedFloat('length')->after('height')->nullable();
            $table->unsignedFloat('weight')->after('length')->nullable();
            $table->unsignedFloat('count')->after('weight')->nullable();
            $table->unsignedFloat('qty')->storedAs('IFNULL(width,1) * IFNULL(height,1) * IFNULL(length,1) * IFNULL(weight,1) *  IFNULL(count,1)')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_report_outcomes', function (Blueprint $table) {
            $table->dropColumn('qty');
            $table->dropColumn('width');
            $table->dropColumn('height');
            $table->dropColumn('length');
            $table->dropColumn('weight');
            $table->dropColumn('count');

        });
    }
};
