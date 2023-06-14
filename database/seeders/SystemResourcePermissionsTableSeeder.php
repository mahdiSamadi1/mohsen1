<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SystemResourcePermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('system_resource_permissions')->delete();
        
        \DB::table('system_resource_permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 1,
                'statuse_id' => NULL,
                'role_id' => 1,
                'permission_level' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 1,
                'statuse_id' => NULL,
                'role_id' => 2,
                'permission_level' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 1,
                'statuse_id' => NULL,
                'role_id' => 3,
                'permission_level' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 1,
                'statuse_id' => NULL,
                'role_id' => 4,
                'permission_level' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 1,
                'statuse_id' => NULL,
                'role_id' => 5,
                'permission_level' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 2,
                'statuse_id' => NULL,
                'role_id' => 1,
                'permission_level' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 2,
                'statuse_id' => NULL,
                'role_id' => 2,
                'permission_level' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 2,
                'statuse_id' => NULL,
                'role_id' => 3,
                'permission_level' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 2,
                'statuse_id' => NULL,
                'role_id' => 4,
                'permission_level' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 2,
                'statuse_id' => NULL,
                'role_id' => 5,
                'permission_level' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 3,
                'statuse_id' => NULL,
                'role_id' => 1,
                'permission_level' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 3,
                'statuse_id' => NULL,
                'role_id' => 2,
                'permission_level' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 3,
                'statuse_id' => NULL,
                'role_id' => 3,
                'permission_level' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 3,
                'statuse_id' => NULL,
                'role_id' => 4,
                'permission_level' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 3,
                'statuse_id' => NULL,
                'role_id' => 5,
                'permission_level' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 4,
                'statuse_id' => NULL,
                'role_id' => 1,
                'permission_level' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 4,
                'statuse_id' => NULL,
                'role_id' => 2,
                'permission_level' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 4,
                'statuse_id' => NULL,
                'role_id' => 3,
                'permission_level' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 4,
                'statuse_id' => NULL,
                'role_id' => 4,
                'permission_level' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 4,
                'statuse_id' => NULL,
                'role_id' => 5,
                'permission_level' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 13,
                'statuse_id' => NULL,
                'role_id' => 1,
                'permission_level' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 13,
                'statuse_id' => NULL,
                'role_id' => 2,
                'permission_level' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 13,
                'statuse_id' => NULL,
                'role_id' => 3,
                'permission_level' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 13,
                'statuse_id' => NULL,
                'role_id' => 4,
                'permission_level' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 13,
                'statuse_id' => NULL,
                'role_id' => 5,
                'permission_level' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 14,
                'statuse_id' => NULL,
                'role_id' => 1,
                'permission_level' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 14,
                'statuse_id' => NULL,
                'role_id' => 2,
                'permission_level' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 14,
                'statuse_id' => NULL,
                'role_id' => 3,
                'permission_level' => 1,
            ),
            28 => 
            array (
                'id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 14,
                'statuse_id' => NULL,
                'role_id' => 4,
                'permission_level' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 14,
                'statuse_id' => NULL,
                'role_id' => 5,
                'permission_level' => 1,
            ),
            30 => 
            array (
                'id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 15,
                'statuse_id' => NULL,
                'role_id' => 1,
                'permission_level' => 1,
            ),
            31 => 
            array (
                'id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 15,
                'statuse_id' => NULL,
                'role_id' => 2,
                'permission_level' => 1,
            ),
            32 => 
            array (
                'id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 15,
                'statuse_id' => NULL,
                'role_id' => 3,
                'permission_level' => 1,
            ),
            33 => 
            array (
                'id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 15,
                'statuse_id' => NULL,
                'role_id' => 4,
                'permission_level' => 1,
            ),
            34 => 
            array (
                'id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 15,
                'statuse_id' => NULL,
                'role_id' => 5,
                'permission_level' => 1,
            ),
            35 => 
            array (
                'id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 16,
                'statuse_id' => NULL,
                'role_id' => 1,
                'permission_level' => 1,
            ),
            36 => 
            array (
                'id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 16,
                'statuse_id' => NULL,
                'role_id' => 2,
                'permission_level' => 1,
            ),
            37 => 
            array (
                'id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 16,
                'statuse_id' => NULL,
                'role_id' => 3,
                'permission_level' => 1,
            ),
            38 => 
            array (
                'id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 16,
                'statuse_id' => NULL,
                'role_id' => 4,
                'permission_level' => 1,
            ),
            39 => 
            array (
                'id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 16,
                'statuse_id' => NULL,
                'role_id' => 5,
                'permission_level' => 1,
            ),
            40 => 
            array (
                'id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 17,
                'statuse_id' => NULL,
                'role_id' => 1,
                'permission_level' => 1,
            ),
            41 => 
            array (
                'id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 17,
                'statuse_id' => NULL,
                'role_id' => 2,
                'permission_level' => 1,
            ),
            42 => 
            array (
                'id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 17,
                'statuse_id' => NULL,
                'role_id' => 3,
                'permission_level' => 1,
            ),
            43 => 
            array (
                'id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 17,
                'statuse_id' => NULL,
                'role_id' => 4,
                'permission_level' => 1,
            ),
            44 => 
            array (
                'id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 17,
                'statuse_id' => NULL,
                'role_id' => 5,
                'permission_level' => 1,
            ),
            45 => 
            array (
                'id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 5,
                'statuse_id' => NULL,
                'role_id' => 1,
                'permission_level' => 1,
            ),
            46 => 
            array (
                'id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 5,
                'statuse_id' => NULL,
                'role_id' => 2,
                'permission_level' => 1,
            ),
            47 => 
            array (
                'id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 5,
                'statuse_id' => NULL,
                'role_id' => 3,
                'permission_level' => 1,
            ),
            48 => 
            array (
                'id' => 49,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 5,
                'statuse_id' => NULL,
                'role_id' => 4,
                'permission_level' => 1,
            ),
            49 => 
            array (
                'id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 5,
                'statuse_id' => NULL,
                'role_id' => 5,
                'permission_level' => 1,
            ),
            50 => 
            array (
                'id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 6,
                'statuse_id' => NULL,
                'role_id' => 1,
                'permission_level' => 1,
            ),
            51 => 
            array (
                'id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 6,
                'statuse_id' => NULL,
                'role_id' => 2,
                'permission_level' => 1,
            ),
            52 => 
            array (
                'id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 6,
                'statuse_id' => NULL,
                'role_id' => 3,
                'permission_level' => 1,
            ),
            53 => 
            array (
                'id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 6,
                'statuse_id' => NULL,
                'role_id' => 4,
                'permission_level' => 1,
            ),
            54 => 
            array (
                'id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 6,
                'statuse_id' => NULL,
                'role_id' => 5,
                'permission_level' => 1,
            ),
            55 => 
            array (
                'id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 7,
                'statuse_id' => NULL,
                'role_id' => 1,
                'permission_level' => 1,
            ),
            56 => 
            array (
                'id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 7,
                'statuse_id' => NULL,
                'role_id' => 2,
                'permission_level' => 1,
            ),
            57 => 
            array (
                'id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 7,
                'statuse_id' => NULL,
                'role_id' => 3,
                'permission_level' => 1,
            ),
            58 => 
            array (
                'id' => 59,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 7,
                'statuse_id' => NULL,
                'role_id' => 4,
                'permission_level' => 1,
            ),
            59 => 
            array (
                'id' => 60,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 7,
                'statuse_id' => NULL,
                'role_id' => 5,
                'permission_level' => 1,
            ),
            60 => 
            array (
                'id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 8,
                'statuse_id' => NULL,
                'role_id' => 1,
                'permission_level' => 1,
            ),
            61 => 
            array (
                'id' => 62,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 8,
                'statuse_id' => NULL,
                'role_id' => 2,
                'permission_level' => 1,
            ),
            62 => 
            array (
                'id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 8,
                'statuse_id' => NULL,
                'role_id' => 3,
                'permission_level' => 1,
            ),
            63 => 
            array (
                'id' => 64,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 8,
                'statuse_id' => NULL,
                'role_id' => 4,
                'permission_level' => 1,
            ),
            64 => 
            array (
                'id' => 65,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 8,
                'statuse_id' => NULL,
                'role_id' => 5,
                'permission_level' => 1,
            ),
            65 => 
            array (
                'id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 9,
                'statuse_id' => NULL,
                'role_id' => 1,
                'permission_level' => 1,
            ),
            66 => 
            array (
                'id' => 67,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 9,
                'statuse_id' => NULL,
                'role_id' => 2,
                'permission_level' => 1,
            ),
            67 => 
            array (
                'id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 9,
                'statuse_id' => NULL,
                'role_id' => 3,
                'permission_level' => 1,
            ),
            68 => 
            array (
                'id' => 69,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 9,
                'statuse_id' => NULL,
                'role_id' => 4,
                'permission_level' => 1,
            ),
            69 => 
            array (
                'id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 9,
                'statuse_id' => NULL,
                'role_id' => 5,
                'permission_level' => 1,
            ),
            70 => 
            array (
                'id' => 71,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 10,
                'statuse_id' => NULL,
                'role_id' => 1,
                'permission_level' => 1,
            ),
            71 => 
            array (
                'id' => 72,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 10,
                'statuse_id' => NULL,
                'role_id' => 2,
                'permission_level' => 1,
            ),
            72 => 
            array (
                'id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 10,
                'statuse_id' => NULL,
                'role_id' => 3,
                'permission_level' => 1,
            ),
            73 => 
            array (
                'id' => 74,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 10,
                'statuse_id' => NULL,
                'role_id' => 4,
                'permission_level' => 1,
            ),
            74 => 
            array (
                'id' => 75,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 10,
                'statuse_id' => NULL,
                'role_id' => 5,
                'permission_level' => 1,
            ),
            75 => 
            array (
                'id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 11,
                'statuse_id' => NULL,
                'role_id' => 1,
                'permission_level' => 1,
            ),
            76 => 
            array (
                'id' => 77,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 11,
                'statuse_id' => NULL,
                'role_id' => 2,
                'permission_level' => 1,
            ),
            77 => 
            array (
                'id' => 78,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 11,
                'statuse_id' => NULL,
                'role_id' => 3,
                'permission_level' => 1,
            ),
            78 => 
            array (
                'id' => 79,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 11,
                'statuse_id' => NULL,
                'role_id' => 4,
                'permission_level' => 1,
            ),
            79 => 
            array (
                'id' => 80,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 11,
                'statuse_id' => NULL,
                'role_id' => 5,
                'permission_level' => 1,
            ),
            80 => 
            array (
                'id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 1,
                'statuse_id' => NULL,
                'role_id' => 27,
                'permission_level' => 1,
            ),
            81 => 
            array (
                'id' => 82,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 2,
                'statuse_id' => NULL,
                'role_id' => 27,
                'permission_level' => 1,
            ),
            82 => 
            array (
                'id' => 83,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 3,
                'statuse_id' => NULL,
                'role_id' => 27,
                'permission_level' => 1,
            ),
            83 => 
            array (
                'id' => 84,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 4,
                'statuse_id' => NULL,
                'role_id' => 27,
                'permission_level' => 1,
            ),
            84 => 
            array (
                'id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 13,
                'statuse_id' => NULL,
                'role_id' => 27,
                'permission_level' => 1,
            ),
            85 => 
            array (
                'id' => 86,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 14,
                'statuse_id' => NULL,
                'role_id' => 27,
                'permission_level' => 1,
            ),
            86 => 
            array (
                'id' => 87,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 15,
                'statuse_id' => NULL,
                'role_id' => 27,
                'permission_level' => 1,
            ),
            87 => 
            array (
                'id' => 88,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 16,
                'statuse_id' => NULL,
                'role_id' => 27,
                'permission_level' => 1,
            ),
            88 => 
            array (
                'id' => 89,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 17,
                'statuse_id' => NULL,
                'role_id' => 27,
                'permission_level' => 1,
            ),
            89 => 
            array (
                'id' => 90,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 5,
                'statuse_id' => NULL,
                'role_id' => 27,
                'permission_level' => 1,
            ),
            90 => 
            array (
                'id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 6,
                'statuse_id' => NULL,
                'role_id' => 27,
                'permission_level' => 1,
            ),
            91 => 
            array (
                'id' => 92,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 7,
                'statuse_id' => NULL,
                'role_id' => 27,
                'permission_level' => 1,
            ),
            92 => 
            array (
                'id' => 93,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 8,
                'statuse_id' => NULL,
                'role_id' => 27,
                'permission_level' => 1,
            ),
            93 => 
            array (
                'id' => 94,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 9,
                'statuse_id' => NULL,
                'role_id' => 27,
                'permission_level' => 1,
            ),
            94 => 
            array (
                'id' => 95,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 10,
                'statuse_id' => NULL,
                'role_id' => 27,
                'permission_level' => 1,
            ),
            95 => 
            array (
                'id' => 96,
                'created_at' => NULL,
                'updated_at' => NULL,
                'resource_id' => 11,
                'statuse_id' => NULL,
                'role_id' => 27,
                'permission_level' => 1,
            ),
        ));
        
        
    }
}