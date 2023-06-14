<?php

namespace Database\Seeders;

use App\Models\Babat;
use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('statuses')->delete();

        $statuses = [
            ['id' => 1, 'name' => 'پیش نویس'],
            ['id' => 2, 'name' => 'منتظر تایید مدیر عامل'],
            ['id' => 3, 'name' => 'بررسی حسابدار'],
            ['id' => 4, 'name' => 'تایید شده'],
        ];

        foreach ($statuses as $statuse) {
            if (!Status::find($statuse['id'])) {
                Status::insert($statuse);
            }
        }
    }
}
