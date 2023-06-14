<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class BasicUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!User::where('phone','09156111781')->get()) {
            User::create([
                'name' => 'reza',
                'family' => 'labbafi',
                'company_name' => 'aqr',
                'phone' => '09156111781',
                'email' => 'admin@demo.com',
                'password' => Hash::make('demo'),
            ]);
        }
    }
}
