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
        Schema::table('project_reports', function (Blueprint $table) {
            $table->dateTime('approved_date')->nullable();
            $table->unsignedBigInteger('confirmer_id');
            $table->foreign('confirmer_id')->references('id')->on('users');
            $table->unsignedBigInteger('project_site_id');
            $table->foreign('project_site_id')->references('id')->on('project_sites');
            $table->string('review_note',255)->nullable();
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
