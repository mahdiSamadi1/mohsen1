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
        Schema::create('project_payment_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_payment_id');
            $table->foreign('project_payment_id')->references('id')->on('project_payments');
            $table->string('description',255)->nullable();
            $table->decimal('price',20,2)->nullable();
            $table->string('type','20')->nullable();
            $table->dateTime('date')->nullable();
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
        Schema::dropIfExists('project_payment_details');
    }
};
