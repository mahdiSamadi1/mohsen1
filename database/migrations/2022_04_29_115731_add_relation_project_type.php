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
        if (Schema::hasColumn('projects', 'type')) {
            Schema::table('projects', function (Blueprint $table) {
                $table->renameColumn('type', 'project_type_id');
            });
        }

        if (Schema::hasColumn('projects', 'project_type_id')) {
            Schema::table('projects', function (Blueprint $table) {
                $table->bigInteger('project_type_id')->unsigned()->change();

                $table->foreign('project_type_id')->references('id')->on('project_types');
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
        if (Schema::hasColumn('projects', 'project_type_id')) {
            Schema::table('projects', function (Blueprint $table) {
                $table->renameColumn('project_type_id', 'type');
            });
        }
    }
};
