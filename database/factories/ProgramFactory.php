<?php

namespace Database\Factories;

use App\Models\Program;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Program>
 */
class ProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'slug' => \Illuminate\Support\Str::slug($this->faker->sentence(3)),
            'user_id' => \App\Models\User::factory(),
            'tag_id' => \App\Models\Tag::factory(),
            'image_url' => 'programs/' . $this->faker->word() . '.jpg',
            'content' => $this->faker->paragraph(4),
        ];
    }
}
