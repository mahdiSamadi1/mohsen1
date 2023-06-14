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
            $table->text('price_list_description')
                ->after('working_area')
                ->nullable(true);
            $table->unsignedBigInteger('parent_id')
                ->after('qty')
                ->nullable(false)
                ->default('0');
            $table->foreign('parent_id')->references('id')->on('project_w_b_s');
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
            $table->dropColumn('price_list_description');
            $table->dropColumn('parent_id');
        });
    }
};
