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
        if (!Schema::hasTable('companies')) {
            Schema::create('companies', function (Blueprint $table) {
                $table->id();
                $table->string('first_name', 50)->nullable(true);
                $table->string('last_name', 50)->nullable(true);
                $table->string('company_name', 50)->nullable(true);
                $table->string('national_code', 10)->nullable(true);
                $table->string('national_identify', 20)->nullable(true);
                $table->string('contact_number', 20)->nullable(true);
                $table->string('company_website', 30)->nullable(true);
                $table->string('email', 30)->nullable(true);
                $table->text('address')->nullable(true);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
};
