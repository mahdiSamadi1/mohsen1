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
        Schema::table('project_report_r_u', function (Blueprint $table) {
            $table->char('inuse')->nullable();
            $table->char('in_out')->nullable(); // true for in and false for out
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_report_r_u', function (Blueprint $table) {
            $table->dropColumn('inuse');
            $table->dropColumn('in_out');
        });
    }
};