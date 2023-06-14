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
        Schema::table('projects', function (Blueprint $table) {
            $table->string('consultant_logo',255)
                ->after('location')
                ->nullable(true);
            $table->string('taskmaster_logo',255)
                ->after('consultant_logo')
                ->nullable(true);
            $table->string('project_stamp',255)
                ->after('taskmaster_logo')
                ->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('consultant_logo');
            $table->dropColumn('taskmaster_logo');
            $table->dropColumn('project_stamp');
        });
    }
};
