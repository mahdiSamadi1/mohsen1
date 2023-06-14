<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BaseInfo;
use App\Models\BaseInfoValue;
use Illuminate\Support\Facades\DB;

class BaseInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('base_infos')->delete();

        $BaseInfo = [
            ['id' => 1, 'name' => 'واحد اندازه گیری'],
            ['id' => 2, 'name' => 'نوع کالا'],
            ['id' => 3, 'name' => 'انواع گزارش'],
        ];
        BaseInfo::insert($BaseInfo);
        
    }
}
