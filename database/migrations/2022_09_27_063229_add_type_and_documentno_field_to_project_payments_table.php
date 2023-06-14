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
            $table->string('type',20)
                ->after('cash_price');
            $table->string('documentno',20)
                ->after('id')
                ->nullable(true);
            $table->renameColumn('cash_price', 'price');
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
            $table->dropColumn('type');
            $table->dropColumn('documentno');
            $table->renameColumn('price', 'cash_price');
        });
    }
};
