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
            $table->unsignedBigInteger('price_list_id')->nullable()->unsigned()->change();
            $table->string('working_area',255)->nullable()->change();
            $table->unsignedBigInteger('parent_id')->nullable()->unsigned()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
