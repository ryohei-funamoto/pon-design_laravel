<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $types = ['お仕事のご依頼・ご相談', 'お見積りのご依頼', '採用について', 'その他'];
        $jobs = ['Google/Yahoo検索', 'SNS', 'ブログ', '友人や知人', 'その他'];

        return [
            'type' => $this->faker->randomElement($types),
            'name' => $this->faker->name(),
            'company' => $this->faker->company(),
            'email' => $this->faker->safeEmail(),
            'tel' => $this->faker->phoneNumber(),
            'comment' => $this->faker->realText($this->faker->numberBetween(250, 500)),
            'job' => $this->faker->randomElement($jobs),
            'created_at' => $this->faker->dateTimeBetween('-1 year', now()),
        ];
    }
}
