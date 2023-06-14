<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use PersianFaker\PersianFaker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $start = $this->faker->dateTimeBetween('-365 days', '+59 days');
        $end = $this->faker->dateTimeBetween($start, $start->format('Y-m-d H:i:s').'+'. rand(60,365). ' days');
        return [
            'name' => PersianFaker::get('Job'),
            'introduction' => PersianFaker::get('Lorem',['words'=>10]),
            'project_type_id' => rand(1,2),
            'cost' => rand(10,99) . str_repeat("0", 6),
            'start_date' => $start,
            'end_date' => $end,
            'taskmaster' => PersianFaker::get('FullName', ['sex' => 'm']),
            'consultant' => PersianFaker::get('FullName', ['sex' => 'm']),
            'user_id' => User::all()->random()->id,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
