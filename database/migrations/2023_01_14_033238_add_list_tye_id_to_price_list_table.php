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
        Schema::table('price_lists', function (Blueprint $table) {
            $table->unsignedBigInteger('list_type_id')->nullable();
            $table->foreign('list_type_id')
                ->references('id')
                ->on('base_info_values');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('price_lists', function (Blueprint $table) {
            $table->dropForeign('price_lists_list_type_id_foreign');
            $table->dropColumn('list_type_id');
            
            //
        });
    }
};
