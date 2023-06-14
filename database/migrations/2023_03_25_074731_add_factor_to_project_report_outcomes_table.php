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
        if (Schema::hasColumn('project_report_outcomes', 'factor'))
        {
            Schema::table('project_report_outcomes', function (Blueprint $table) {
                $table->dropColumn('factor');
            });
        }
        if (Schema::hasColumn('project_report_outcomes', 'qty'))
        {
            Schema::table('project_report_outcomes', function (Blueprint $table) {
                $table->dropColumn('qty');
            });
        }
        Schema::table('project_report_outcomes', function (Blueprint $table) {
            $table->decimal('factor',5,2)->nullable();
            $table->unsignedFloat('qty')->storedAs('IFNULL(width,1) * IFNULL(height,1) * IFNULL(length,1) * IFNULL(weight,1) *  IFNULL(count,1) *  IFNULL(factor,1)')->nullable();
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
            $table->dropColumn('factor');
            $table->dropColumn('qty');
        });
    }
};
