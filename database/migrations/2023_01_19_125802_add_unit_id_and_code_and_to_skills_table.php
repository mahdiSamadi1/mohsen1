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
        Schema::table('skills', function (Blueprint $table) {
            $table->unsignedBigInteger('unit_id')->nullable();
            $table->string('operation_code',10)->nullable();
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
        Schema::table('skills', function (Blueprint $table) {
            $table->dropForeign('skills_unit_id_foreign');
            $table->dropColumn('unit_id');
            $table->dropColumn('operation_code');
        });
    }
};
