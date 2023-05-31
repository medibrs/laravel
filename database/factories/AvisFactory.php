<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AvisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $idE = $this->faker->numberBetween(1,30);
        $idf = $this->faker->numberBetween(1,30);
    
        try {
            DB::table('your_table_name')->insert([
                'idE' => $idE,
                'idf' => $idf,
                'points' => $this->faker->numberBetween(1,100),
            ]);
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->errorInfo[1] == 1062) {
                // Duplicate entry
                return $this->definition();
            }
        }
    
        return [
            'idE' => $idE,
            'idf' => $idf,
            'points' => $this->faker->numberBetween(1,100),
        ];
    }
}
