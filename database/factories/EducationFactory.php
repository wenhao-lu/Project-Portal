<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'degree' => $this->faker->word,
            'major' => $this->faker->word,
            'school' => $this->faker->sentence,
            'date' => $this->faker->date,
            'course' => $this->faker->sentence,
        ];
    }
}
