<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SystemResource;

class system_resources extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // DB::table('system_resources')->delete();

        $types = [
            ['id' => 1, 'resource_title' => 'داشبورد','resource_name'=>'Dashboard','resource_type_id'=>1, 'parent_id' =>null,'resource_property'=>'{"url":"", "hasbullet":1, "icon":"","fonticon":""}'],
            ['id' => 2, 'resource_title' => 'اطلاعات شرکت','resource_name'=>'Company Information','resource_type_id'=>1, 'parent_id' =>null,'resource_property'=>'{"url":"", "hasbullet":1, "icon":"","fonticon":""}'],
            ['id' => 3, 'resource_title' => 'مدیریت پروژه ها','resource_name'=>'Project Management','resource_type_id'=>1, 'parent_id' =>null,'resource_property'=>'{"url":"", "hasbullet":1, "icon":"","fonticon":""}'],
            ['id' => 4, 'resource_title' => 'اطلاعات کاربری','resource_name'=>'User Information','resource_type_id'=>1, 'parent_id' =>null,'resource_property'=>'{"url":"", "hasbullet":1, "icon":"","fonticon":""}'],

            ['id' => 5, 'resource_title' => 'جزئیات شرکت', 'resource_name' => 'Company Information Detail', 'resource_type_id' => 1, 'parent_id' =>2 ,'resource_property'=>'{"url":"", "hasbullet":1, "icon":"","fonticon":""}'],
            ['id' => 6, 'resource_title' => 'افراد شرکت', 'resource_name' => 'Company Person', 'resource_type_id' => 1, 'parent_id' =>2 ,'resource_property'=>'{"url":"", "hasbullet":1, "icon":"","fonticon":""}'],

            ['id' => 7, 'resource_title' => 'لیست پروژه ها', 'resource_name' => 'Project List', 'resource_type_id' => 1, 'parent_id' =>3 ,'resource_property'=>'{"url":"", "hasbullet":1, "icon":"","fonticon":""}'],
            ['id' => 8, 'resource_title' => 'پروژه جدید', 'resource_name' => 'New Project', 'resource_type_id' => 1, 'parent_id' =>3 ,'resource_property'=>'{"url":"", "hasbullet":1, "icon":"","fonticon":""}'],
            ['id' => 9, 'resource_title' => 'گزارشات پروژه', 'resource_name' => 'Project Report', 'resource_type_id' => 1, 'parent_id' =>3 ,'resource_property'=>'{"url":"", "hasbullet":1, "icon":"","fonticon":""}'],


            ['id' => 10, 'resource_title' => 'مشاهده', 'resource_name' => 'Profile View', 'resource_type_id' => 1, 'parent_id' =>4 ,'resource_property'=>'{"url":"", "hasbullet":1, "icon":"","fonticon":""}'],
            ['id' => 11, 'resource_title' => 'ویرایش', 'resource_name' => 'Profile Edit', 'resource_type_id' => 1, 'parent_id' =>4 ,'resource_property'=>'{"url":"", "hasbullet":1, "icon":"","fonticon":""}'],


            ['id' => 13, 'resource_title' => 'روت پروژه جدید', 'resource_name' => '/newproject', 'resource_type_id' => 2],
            ['id' => 14, 'resource_title' => 'گزارش پروژه', 'resource_name' => '/project-reports', 'resource_type_id' => 2],
            ['id' => 15, 'resource_title' => 'لیست پروژه ها', 'resource_name' => '/projectsList', 'resource_type_id' => 2],
            ['id' => 16, 'resource_title' => 'اطلاعات شرکت', 'resource_name' => '/companypage', 'resource_type_id' => 2],
            ['id' => 17, 'resource_title' => 'داشبورد', 'resource_name' => '/dashboard', 'resource_type_id' => 2],
        ];
        foreach ($types as $type) {
            if (!SystemResource::find($type['id'])) {
                SystemResource::insert($type);
            }
        }
    }
}
