<?php

namespace Database\Seeders;

use App\Models\ProjectType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('project_types')->delete();

        $types = [
            ['id' => 1, 'name' => 'پیمانکاری'],
            ['id' => 2, 'name' => 'حق العمل کاری'],
        ];
        foreach ($types as $type) {
            if (!ProjectType::find($type['id'])) {
                ProjectType::insert($type);
            }
        }
    }
}
