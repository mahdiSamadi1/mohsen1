<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class AdminTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // base tables
        \Encore\Admin\Auth\Database\Menu::truncate();
        \Encore\Admin\Auth\Database\Menu::insert(
            [
                [
                    "parent_id" => 0,
                    "order" => 1,
                    "title" => "Dashboard",
                    "icon" => "fa-bar-chart",
                    "uri" => "/",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 2,
                    "title" => "Admin",
                    "icon" => "fa-tasks",
                    "uri" => "",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 3,
                    "title" => "Users",
                    "icon" => "fa-users",
                    "uri" => "auth/users",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 4,
                    "title" => "Roles",
                    "icon" => "fa-user",
                    "uri" => "auth/roles",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 5,
                    "title" => "Permission",
                    "icon" => "fa-ban",
                    "uri" => "auth/permissions",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 6,
                    "title" => "Menu",
                    "icon" => "fa-bars",
                    "uri" => "auth/menu",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 2,
                    "order" => 7,
                    "title" => "Operation log",
                    "icon" => "fa-history",
                    "uri" => "auth/logs",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 0,
                    "title" => "site",
                    "icon" => "fa-chrome",
                    "uri" => NULL,
                    "permission" => "*"
                ],
                [
                    "parent_id" => 10,
                    "order" => 0,
                    "title" => "users list",
                    "icon" => "fa-list",
                    "uri" => "site/users",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 8,
                    "order" => 0,
                    "title" => "users",
                    "icon" => "fa-users",
                    "uri" => NULL,
                    "permission" => NULL
                ],
                [
                    "parent_id" => 8,
                    "order" => 0,
                    "title" => "projects",
                    "icon" => "fa-cubes",
                    "uri" => NULL,
                    "permission" => NULL
                ],
                [
                    "parent_id" => 13,
                    "order" => 0,
                    "title" => "پروژه ها",
                    "icon" => "fa-bars",
                    "uri" => "site/base-values/projects",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 8,
                    "order" => 0,
                    "title" => "اطلاعات پایه",
                    "icon" => "fa-bars",
                    "uri" => "",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 13,
                    "order" => 0,
                    "title" => "انواع پروژه",
                    "icon" => "fa-bars",
                    "uri" => "site/base-values/project-types",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 8,
                    "order" => 0,
                    "title" => "شرکت ها",
                    "icon" => "fa-align-justify",
                    "uri" => "site/companies",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 13,
                    "order" => 0,
                    "title" => "نقش افراد در شرکت",
                    "icon" => "fa-briefcase",
                    "uri" => "site/skills",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 13,
                    "order" => 0,
                    "title" => "دسته بندی اطلاعات پایه",
                    "icon" => "fa-bars",
                    "uri" => "site/base-values/base-infos",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 13,
                    "order" => 0,
                    "title" => "مقادیر اطلاعات پایه",
                    "icon" => "fa-bars",
                    "uri" => "site/base-values/base-info-values",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 13,
                    "order" => 0,
                    "title" => "کالا",
                    "icon" => "fa-archive",
                    "uri" => "site/base-values/products",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 13,
                    "order" => 0,
                    "title" => "تعریف ماشین ها",
                    "icon" => "fa-bars",
                    "uri" => "site/base-values/devices",
                    "permission" => "*"
                ],
                [
                    "parent_id" => 13,
                    "order" => 0,
                    "title" => "اتصال ماشین به پروژه",
                    "icon" => "fa-bars",
                    "uri" => "site/base-values/project-devices",
                    "permission" => "*"
                ]
            ]
        );

        \Encore\Admin\Auth\Database\Permission::truncate();
        \Encore\Admin\Auth\Database\Permission::insert(
            [
                [
                    "name" => "All permission",
                    "slug" => "*",
                    "http_method" => "",
                    "http_path" => "*"
                ],
                [
                    "name" => "Dashboard",
                    "slug" => "dashboard",
                    "http_method" => "GET",
                    "http_path" => "/"
                ],
                [
                    "name" => "Login",
                    "slug" => "auth.login",
                    "http_method" => "",
                    "http_path" => "/auth/login\r\n/auth/logout"
                ],
                [
                    "name" => "User setting",
                    "slug" => "auth.setting",
                    "http_method" => "GET,PUT",
                    "http_path" => "/auth/setting"
                ],
                [
                    "name" => "Auth management",
                    "slug" => "auth.management",
                    "http_method" => "",
                    "http_path" => "/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs"
                ]
            ]
        );

        \Encore\Admin\Auth\Database\Role::truncate();
        \Encore\Admin\Auth\Database\Role::insert(
            [
                [
                    "name" => "Administrator",
                    "slug" => "administrator"
                ]
            ]
        );

        // pivot tables
        DB::table('admin_role_menu')->truncate();
        DB::table('admin_role_menu')->insert(
            [
                [
                    "role_id" => 1,
                    "menu_id" => 2
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 8
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 9
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 12
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 14
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 15
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 16
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 17
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 18
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 19
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 21
                ],
                [
                    "role_id" => 1,
                    "menu_id" => 22
                ]
            ]
        );

        DB::table('admin_role_permissions')->truncate();
        DB::table('admin_role_permissions')->insert(
            [
                [
                    "role_id" => 1,
                    "permission_id" => 1
                ]
            ]
        );

        // finish
    }
}
