<?php

namespace Database\Factories;

use App\Models\Work;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Work>
 */
class WorkFactory extends Factory
{
    protected $model = Work::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $images = ['citylab.jpg', 'lamina.jpg', 'smoothiesta.jpg', 'tabilog.jpg', 'web-conference.jpg'];

        return [
            'title' => $this->faker->company(),
            'works_category_id' => $this->faker->numberBetween(1, 5),
            'thumbnail' => 'img/works/' . $this->faker->randomElement($images),
            'content' => $this->faker->realText(500),
            'is_public' => $this->faker->numberBetween(0, 1),
            'created_at' => $this->faker->dateTimeBetween('-1 year', now()),
            'updated_at' => now(),
        ];
    }
}
