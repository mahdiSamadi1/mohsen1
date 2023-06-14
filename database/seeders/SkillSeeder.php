<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('skills')->delete();

        $skills = [
            ['id' => 1, 'title' => 'مشاور'],
            ['id' => 2, 'title' => 'سرپرست کارگاه'],
            ['id' => 3, 'title' => 'ناظر'],
            ['id' => 4, 'title' => 'معمار'],
            ['id' => 5, 'title' => 'کارگر'],
            ['id' => 6, 'title' => 'مدیر عامل','all_projectview_access'=>'1'],
            ['id' => 7, 'title' => 'حسابدار'],
            ['id' => 8, 'title' => 'مدیر آتلیه'],
            ['id' => 9, 'title' => 'رئیس هیئت مدیره'],
            ['id' => 10, 'title' => 'منشی'],
            ['id' => 11, 'title' => 'کارپرداز'],
            ['id' => 12, 'title' => 'کارشناس سازه'],
            ['id' => 13, 'title' => 'کارشناس برق'],
            ['id' => 14, 'title' => 'کارشناس مکانیک'],
            ['id' => 15, 'title' => 'ناظر تاسیسات'],
            ['id' => 16, 'title' => 'سر ناظر'],
            ['id' => 17, 'title' => 'ناظر عمران'],
            ['id' => 18, 'title' => 'کارشناس انفورماتیک'],
            ['id' => 19, 'title' => 'عضو هیئت مدیره'],
            ['id' => 20, 'title' => ' کارشناس متره و برآورد'],
            ['id' => 21, 'title' => 'ناظر معمار'],
            ['id' => 22, 'title' => 'کارشناس معمار'],
            ['id' => 23, 'title' => 'مدیر فنی'],
            ['id' => 24, 'title' => 'ناظر برق'],
            ['id' => 25, 'title' => 'عضو هیئت مدیره'],
            ['id' => 26, 'title' => 'توسعه دهنده فول استک'],
            ['id' => 27, 'title' => 'ایجاد کننده','all_projectview_access'=>'1'],
        ];
        foreach ($skills as $skill) {
            if (!Skill::find($skill['id'])) {
                Skill::insert($skill);
            }
        }
    }
}
