<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'company_name' => $this->faker->company,
            'phone_number' => $this->faker->phoneNumber,
            'company_email' => $this->faker->companyEmail,
            'solutionType' => $this->faker->randomElement(['option1', 'option2', 'option3']),
            'referred' => $this->faker->words(3, true),
            'additional_comments' => $this->faker->sentence,
        ];
    }
}
