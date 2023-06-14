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
        Schema::table('projects', function (Blueprint $table) {
            $table->string('contract_number',255)->nullable();
            $table->dateTime('contract_date')->nullable();
            $table->double('lat')->nullable();
            $table->double('lng')->nullable();
            $table->decimal('last_adjustment_price', 20,2)->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('contract_number');
            $table->dropColumn('contract_date');
            $table->dropColumn('lat');
            $table->dropColumn('lng');
            $table->dropColumn('last_adjustment_price');
        });
    }
};
