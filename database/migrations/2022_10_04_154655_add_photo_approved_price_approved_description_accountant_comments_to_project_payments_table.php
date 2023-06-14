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
        Schema::table('project_payments', function (Blueprint $table) {
            $table->string('bill_photo',255)
                ->after('babat_id')
                ->nullable(true);
            $table->decimal('approved_price',20,2)->after('bill_photo')->nullable();
            $table->text('approved_description')->after('approved_price')->nullable();
            $table->text('accountant_description')->after('approved_description')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_payments', function (Blueprint $table) {
            $table->dropColumn('bill_photo');
            $table->dropColumn('approved_price');
            $table->dropColumn('approved_description');
            $table->dropColumn('accountant_description');
        });
    }
};
