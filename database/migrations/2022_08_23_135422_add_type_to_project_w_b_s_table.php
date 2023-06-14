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
        Schema::table('project_w_b_s', function (Blueprint $table) {
            $table->text('type')
                ->after('working_area')
                ->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_w_b_s', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
};
