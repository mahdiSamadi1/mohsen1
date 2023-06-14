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
        Schema::create('system_resources', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('resource_name',200);
            $table->string('resource_title',200)->nullable();
            $table->string('model_name',200)->nullable();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id')->references('id')->on('system_resources');
            $table->unsignedBigInteger('resource_type_id');
            $table->json('resource_property')->nullable();
            $table->tinyInteger('display_order')->nullable();

        });
        Schema::create('system_resource_permissions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('resource_id');
            $table->foreign('resource_id')->references('id')->on('system_resources');
            $table->unsignedBigInteger('statuse_id')->nullable();
            $table->foreign('statuse_id')->references('id')->on('statuses');
            $table->unsignedBigInteger('role_id')->nullable();
            $table->foreign('role_id')->references('id')->on('skills');
            $table->tinyInteger('permission_level')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('system_resource_permissions');
        Schema::dropIfExists('system_resources');
    }
};
