<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cgy>
 */
class CgyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'title' => $this->faker->unique()->numberbetween(1, 999),
            // 'enabled' => $this->faker->randomElement([true, false]),
            // 'enabled_at' => Carbon::now()->addDays(rand(0, 20)),
            'title' => $this->faker->name,
            'pic' => $this->faker->url,
            'sort' => rand(0, 20),
        ];
    }
}