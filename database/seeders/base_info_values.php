<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BaseInfoValue;

class base_info_values extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BaseInfoValue::insert(['id' => 8,'base_info_id'=>1, 'value' => 'ثانیه']);
    }
}
