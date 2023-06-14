<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BabatsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('babats')->delete();
        
        \DB::table('babats')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'خرید مصالح',
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'پرداخت حق الزحمه',
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'کرایه تجهیزات و ماشین آلات',
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'تنخواه',
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'خرید تجهیزات',
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'ایاب ذهاب',
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'پذیرایی',
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'کرایه حمل',
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'سایر',
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'خرید API',
                'created_at' => NULL,
                'updated_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
            ),
        ));
        
        
    }
}