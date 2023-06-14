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
        $tables=DB::select('SHOW TABLES'); //DB::select('SHOW TABLES');
        $tables = array_map('current',$tables);
        for($i=0;$i<count($tables);$i++){
            Schema::table($tables[$i], function (Blueprint $table) {
                $table->unsignedBigInteger('created_by')->nullable();
                $table->unsignedBigInteger('updated_by')->nullable();    //suppose the datatype is text
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
        $tables=DB::select('SHOW TABLES'); //DB::select('SHOW TABLES');
        $tables = array_map('current',$tables);
        for($i=0;$i<count($tables);$i++){
            Schema::table($tables[$i], function (Blueprint $table) {
                $table->dropColumn('created_by')->nullable();
                $table->dropColumn('updated_by')->nullable();    //suppose the datatype is text
            });
        }
    }
};
