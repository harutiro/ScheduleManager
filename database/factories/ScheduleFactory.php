<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Schedule;
use Faker\Generator as Faker;

class ScheduleFactory extends Factory
{
    protected $model = Schedule::class;

    public function definition(): array
    {
        return [
            'user_id' => 1,
            'title' => $this->faker->word,
            'description' => $this->faker->sentence,
            'place' => $this->faker->word,
            'start' => $this->faker->dateTimeBetween('now', '+1 month'),
            'end' => $this->faker->dateTimeBetween('+1 month', '+2 month'),
        ];
    }
}