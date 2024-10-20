<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = ['draft', 'publish'];

        return [
            'title' => fake('id')->sentence(),
            'slug' => Str::slug(fake('id')->sentence()),
            'description' => fake('id')->text(100),
            'content' => fake()->text('1000'),
            'status' => $status[array_rand($status)],
            'user_id' => 1
        ];
    }
}
