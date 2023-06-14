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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('introduction', 500)->nullable();
            $table->integer('type')->nullable();
            $table->string('location', 255)->nullable();
            $table->integer('cost')->nullable();
            $table->dateTime('start_date')->nullable();
            $table->integer('duration')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->string('taskmaster', 150)->nullable();
            $table->string('consultant', 150)->nullable();
            $table->integer('user_id')->references('id')->on('users');;
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
        Schema::dropIfExists('projects');
    }
};
