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
        if (!Schema::hasColumn('project_devices','company_id')){
            Schema::table('project_devices', function (Blueprint $table) {
                $table->unsignedBigInteger('company_id')->nullable()->after('id');
                $table->foreign('company_id')->references('id')->on('companies');
            });
        }
        if (!Schema::hasColumn('project_devices','company_id')){
            Schema::table('project_employees', function (Blueprint $table) {
                $table->unsignedBigInteger('company_id')->nullable()->after('id');
                $table->foreign('company_id')->references('id')->on('companies');
            });
        }
        Schema::table('project_employee_roles', function (Blueprint $table) {
            $table->unsignedBigInteger('company_id')->nullable();
            $table->foreign('company_id')->references('id')->on('companies');
        });


        Schema::table('project_machineries', function (Blueprint $table) {
            $table->unsignedBigInteger('company_id')->nullable()->after('id');
            $table->foreign('company_id')->references('id')->on('companies');
        });
        Schema::table('project_materials', function (Blueprint $table) {
            $table->unsignedBigInteger('company_id')->nullable()->after('id');
            $table->foreign('company_id')->references('id')->on('companies');
        });
        Schema::table('project_payments', function (Blueprint $table) {
            $table->unsignedBigInteger('company_id')->nullable()->after('id');
            $table->foreign('company_id')->references('id')->on('companies');
        });


        Schema::table('project_payment_details', function (Blueprint $table) {
            $table->unsignedBigInteger('company_id')->nullable()->after('id');
            $table->foreign('company_id')->references('id')->on('companies');
        });
        Schema::table('project_w_b_s', function (Blueprint $table) {
            $table->unsignedBigInteger('company_id')->nullable()->after('id');
            $table->foreign('company_id')->references('id')->on('companies');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tables', function (Blueprint $table) {
            //
        });
    }
};
