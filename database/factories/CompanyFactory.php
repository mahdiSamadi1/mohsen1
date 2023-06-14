<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use PersianFaker\PersianFaker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'last_name' => PersianFaker::get('MaleName'),
            'company_name' => PersianFaker::get('LastName'),
            'national_code' => rand(1000000000,9999999999).'',
            'national_identify' => rand(10000000,99999999).'',
            'contact_number' => $this->faker->phoneNumber(),
            'company_website' => $this->faker->domainName(),
//            'email' => $this->faker->email(),
            'address' => $this->faker->address(),
        ];
    }
}
