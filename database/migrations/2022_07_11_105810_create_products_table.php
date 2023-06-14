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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('titel', 255);
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('base_info_values');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id')->references('id')->on('products');
            $table->unsignedBigInteger('base_unit_id');
            $table->foreign('base_unit_id')->references('id')->on('base_info_values');
            $table->decimal('conversion_rate', 20, 8);
            $table->char('product_type', 4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
