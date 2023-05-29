<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Idea>
 */
class IdeaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $str = str(fake()->words(4, true));
        return [
            "user_id" => User::factory(),
            "title" => $str->title(),
            "slug" => $str->slug(),
            "description" => fake()->paragraph(5),
        ];
    }
}
