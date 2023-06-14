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
        Schema::table('companies', function (Blueprint $table) {
            $table->string('telegram_id',20)
                ->after('address')
                ->nullable(true);
            $table->string('instagram_id',20)
                ->after('telegram_id')
                ->nullable(true);
            $table->unsignedBigInteger('user_id')
                ->after('instagram_id')
                ->nullable(false)
                ->default('2');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->dropColumn('telegram_id');
            $table->dropColumn('instagram_id');
            $table->dropColumn('user_id');
        });
    }
};
