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
        Schema::table('project_payments', function (Blueprint $table) {
            $table->dropColumn('price');
            $table->dropColumn('type');
            $table->dropColumn('date');
            $table->unsignedBigInteger('user_id')
                ->after('status_id')
                ->nullable(false)
                ->default('2');
            $table->foreign('user_id')->references('id')->on('users');
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

            $table->dropColumn('user_id');
        });
    }
};
