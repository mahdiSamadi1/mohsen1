<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SystemResourcesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('system_resources')->delete();
        
        \DB::table('system_resources')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_name' => 'MENU.DASHBOARD',
                'resource_title' => 'داشبورد',
                'model_name' => NULL,
                'parent_id' => NULL,
                'resource_type_id' => 1,
                'resource_property' => '{"url": "/dashboard", "icon": "/media/icons/duotune/art/art002.svg", "fonticon": "bi-app-indicator", "hasbullet": 1}',
                'display_order' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_name' => 'MENU.COMPANY_INFO',
                'resource_title' => 'اطلاعات شرکت',
                'model_name' => NULL,
                'parent_id' => NULL,
                'resource_type_id' => 1,
                'resource_property' => '{"url": "/crafted/pages", "icon": "/media/icons/duotune/general/gen001.svg", "fonticon": "bi-archive", "hasbullet": 1}',
                'display_order' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_name' => 'MENU.PROJECT_MANAGE',
                'resource_title' => 'مدیریت پروژه ها',
                'model_name' => NULL,
                'parent_id' => NULL,
                'resource_type_id' => 1,
                'resource_property' => '{"url": "/crafted/pages", "icon": "/media/icons/duotune/general/gen022.svg", "fonticon": "bi-archive", "hasbullet": 1}',
                'display_order' => 5,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_name' => 'MENU.USER_INFO',
                'resource_title' => 'اطلاعات کاربری',
                'model_name' => NULL,
                'parent_id' => NULL,
                'resource_type_id' => 1,
                'resource_property' => '{"url": "/crafted/accounts", "icon": "/media/icons/duotune/communication/com006.svg", "fonticon": "bi-person", "hasbullet": 1}',
                'display_order' => 9,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_name' => 'MENU.COMPANY_INFO',
                'resource_title' => 'اطلاعات شرکت',
                'model_name' => NULL,
                'parent_id' => 2,
                'resource_type_id' => 1,
                'resource_property' => '{"url": "/companypage/${compny.id}/overview", "icon": "", "fonticon": "", "hasbullet": 1}',
                'display_order' => 3,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_name' => 'MENU.COMPANY_EMPOLYEES',
                'resource_title' => 'کارکنان شرکت',
                'model_name' => NULL,
                'parent_id' => 2,
                'resource_type_id' => 1,
                'resource_property' => '{"url": "/companypage/${compny.id}/people", "icon": "", "fonticon": "", "hasbullet": 1}',
                'display_order' => 4,
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_name' => 'MENU.PROJECT_LIST',
                'resource_title' => 'لیست پروژه ها',
                'model_name' => NULL,
                'parent_id' => 3,
                'resource_type_id' => 1,
                'resource_property' => '{"url": "/projectslist", "icon": "", "fonticon": "", "hasbullet": 1}',
                'display_order' => 6,
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_name' => 'MENU.PROJECT_NEW',
                'resource_title' => 'پروژه جدید',
                'model_name' => NULL,
                'parent_id' => 3,
                'resource_type_id' => 1,
                'resource_property' => '{"url": "/newproject", "icon": "", "fonticon": "", "hasbullet": 1}',
                'display_order' => 7,
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_name' => 'MENU.PROJECT_REPORTS',
                'resource_title' => 'گزارشات پروژه',
                'model_name' => NULL,
                'parent_id' => 3,
                'resource_type_id' => 1,
                'resource_property' => '{"url": "/project-reports", "icon": "", "fonticon": "", "hasbullet": 1}',
                'display_order' => 8,
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_name' => 'MENU.USER_INFO_VIEW',
                'resource_title' => 'مشاهده',
                'model_name' => NULL,
                'parent_id' => 4,
                'resource_type_id' => 1,
                'resource_property' => '{"url": "/crafted/account/overview", "icon": "", "fonticon": "", "hasbullet": 1}',
                'display_order' => 10,
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_name' => 'MENU.USER_INFO_EDIT',
                'resource_title' => 'ویرایش',
                'model_name' => NULL,
                'parent_id' => 4,
                'resource_type_id' => 1,
                'resource_property' => '{"url": "/crafted/account/settings", "icon": "", "fonticon": "", "hasbullet": 1}',
                'display_order' => 11,
            ),
            11 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_name' => '/newproject',
                'resource_title' => 'روت پروژه جدید',
                'model_name' => NULL,
                'parent_id' => NULL,
                'resource_type_id' => 2,
                'resource_property' => NULL,
                'display_order' => NULL,
            ),
            12 => 
            array (
                'id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_name' => '/project-reports',
                'resource_title' => 'گزارش پروژه',
                'model_name' => NULL,
                'parent_id' => NULL,
                'resource_type_id' => 2,
                'resource_property' => NULL,
                'display_order' => NULL,
            ),
            13 => 
            array (
                'id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_name' => '/projectsList',
                'resource_title' => 'لیست پروژه ها',
                'model_name' => NULL,
                'parent_id' => NULL,
                'resource_type_id' => 2,
                'resource_property' => NULL,
                'display_order' => NULL,
            ),
            14 => 
            array (
                'id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_name' => '/companypage',
                'resource_title' => 'اطلاعات شرکت',
                'model_name' => NULL,
                'parent_id' => NULL,
                'resource_type_id' => 2,
                'resource_property' => NULL,
                'display_order' => NULL,
            ),
            15 => 
            array (
                'id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_name' => '/dashboard',
                'resource_title' => 'داشبورد',
                'model_name' => NULL,
                'parent_id' => NULL,
                'resource_type_id' => 2,
                'resource_property' => NULL,
                'display_order' => NULL,
            ),
        ));
        
        
    }
}