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
        Schema::create('company_licenses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('license_id');
            $table->date('start_date');
            $table->date('expiration_date')->nullable();
            $table->string('description',200)->nullable();
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('license_id')->references('id')->on('licenses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_licenses');
    }
};
