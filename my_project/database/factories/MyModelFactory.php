<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MyModel>
 */
class MyModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "first_name" => $this->faker->sentence(),
            "last_name" => $this->faker->sentence(),
            "description" => $this->faker->paragraph(5),
            // "first_name" => $this->faker->company(),
            // "first_name" => $this->faker->companyEmail(),
            // "first_name" => $this->faker->url(),
            // "first_name" => $this->faker->city(),
            // "first_name" => "tag_1, tag_2, tag_3",
        ];
    }
}
