<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BaseInfoSeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(ProjectTypeSeeder::class);
        $this->call(AdminTablesSeeder::class);
        $this->call(BasicUsersSeeder::class);
        $this->call(BabatSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(BabatsTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(ProjectTypesTableSeeder::class);
        $this->call(LicenseSeeder::class);
        $this->call(SystemResourcesTableSeeder::class);
        $this->call(BaseInfosTableSeeder::class);
        $this->call(BaseInfoValuesTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(SystemResourcePermissionsTableSeeder::class);
        $this->call(PriceListsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
    }
}
