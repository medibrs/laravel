<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class classeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'libelle' => $this->faker->randomElement(['classe1', 'classe2', 'classe3', 'classe4', 'classe5']),
            'idformation'=>$this->faker->numberBetween(1,5),
            'NombreMax'=>$this->faker->numberBetween(1,5),
        ];
    }
}
