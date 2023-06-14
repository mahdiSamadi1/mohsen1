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
        Schema::table('users', function (Blueprint $table) {
            $table->string('family',11)->nullable(true)->after('remember_token');
            $table->string('phone',11)->nullable(true)->after('family');
            $table->string('avatar',255)->nullable(true)->after('phone');
            $table->string('company_name',150)->nullable(true)->after('avatar');
            $table->char('status')->nullable(true)->after('company_name');
            $table->dateTime('lastlogin')->nullable(true)->after('status');
            $table->integer('createdby')->unsigned()->nullable(false)->default(1)->after('lastlogin');
            $table->integer('updatedby')->unsigned()->nullable(false)->default(1)->after('createdby');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('lastlogin');
            $table->dropColumn('createdby');
            $table->dropColumn('updatedby');
        });
    }
};
