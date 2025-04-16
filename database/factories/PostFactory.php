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
        $title = Str::headline(fake()->sentence(5));
        $slug = Str::slug($title);
        return [
            //
            'menu_id' => 4,
            'title' => $title,
            'sub_title' => fake()->sentence(3),
            'slug' => $slug,
            'content' => array(
                [
                    'type' => 'heading',
                    'data' => [
                        'title' => fake()->title(),
                        'level' => 'h2',
                    ]
                ],
                [
                    'type' => 'paragraph',
                    'data' => [
                        'content' => fake()->paragraph(),
                    ]
                ]
                   
            ),
            'image' => null,
            'published_at' => now(),
            'is_active' => true,
            'categori_id' => 1,
            'created_by' => 1,
        ];
    }
}
