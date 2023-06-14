<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('project_types')->delete();
        
        \DB::table('project_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'پیمانکاری',
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'حق العمل کاری',
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'سایر',
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'خدمات طراحی',
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'خدمات نظارت کارگاهی',
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
            ),
        ));
        
        
    }
}