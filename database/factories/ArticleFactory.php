<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'subject' => $this->faker->name,
            'content' => $this->faker->name,
            'cgy_id' => rand(1, 10),
            'enabled_at' => Carbon::now()->addDays(rand(0, 20)),
            'sort' => rand(0, 20),
            'pic' => $this->faker->imageUrl($width = 640, $height = 480),
            'enabled' => $this->faker->randomElement([true, false]),
        ];

    }
}
