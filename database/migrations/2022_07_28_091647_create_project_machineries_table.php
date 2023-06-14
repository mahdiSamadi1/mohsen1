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
        Schema::create('project_machineries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('unit_id');
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('project_id')->references('id')->on('projects');
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
        Schema::dropIfExists('project_machineries');
    }
};
