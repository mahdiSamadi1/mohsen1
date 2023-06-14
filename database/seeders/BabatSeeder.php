<?php

namespace Database\Seeders;

use App\Models\Babat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BabatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('babats')->delete();

        $babats = [
            ['id' => 1, 'name' => 'خرید مصالح'],
            ['id' => 2, 'name' => 'پرداخت حق الزحمه'],
            ['id' => 3, 'name' => 'کرایه تجهیزات و ماشین آلات'],
            ['id' => 4, 'name' => 'تنخواه'],
            ['id' => 5, 'name' => 'خرید تجهیزات'],
            ['id' => 6, 'name' => 'ایاب ذهاب'],
            ['id' => 7, 'name' => 'پذیرایی'],
            ['id' => 8, 'name' => 'کرایه حمل'],
            ['id' => 9, 'name' => 'سایر'],
        ];
        foreach ($babats as $babat) {
            if (!Babat::find($babat['id'])) {
                Babat::insert($babat);
            }
        }
    }
}
