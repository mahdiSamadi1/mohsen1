<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BaseInfosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('base_infos')->delete();
        
        \DB::table('base_infos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'واحد اندازه گیری',
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'نوع کالا',
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'انواع گزارش',
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'نوع فهرست بها',
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
            ),
        ));
        
        
    }
}