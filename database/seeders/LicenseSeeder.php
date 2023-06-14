<?php

namespace Database\Seeders;

use App\Models\License;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LicenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $licenses = [
            ['id' => 1, 'title' => 'لایسنس حرفه ای', 'description' => 'بالاترین لایسنس', 'fee' => '10000000.00', 'license_type_id' => '1'],
            ['id' => 2, 'title' => 'آزمایشی', 'description' => '10 کاربر آزمایشی', 'fee' => '0.00', 'license_type_id' => '1'],
        ];

        foreach ($licenses as $license) {
            if (!License::find($license['id'])) {
                License::insert($license);
            }
        }
    }
}
