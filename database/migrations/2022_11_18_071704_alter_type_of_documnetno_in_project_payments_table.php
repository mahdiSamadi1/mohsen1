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
        DB::statement("UPDATE project_payments SET documentno = null where documentno=''");
        Schema::table('project_payments', function (Blueprint $table) {
            $table->unsignedBigInteger('documentno')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_payments', function (Blueprint $table) {
            //
        });
    }
};
