<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class formationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        $titres = [
            'Ingénieur en informatique',
            'Licence en gestion',
            'Master en marketing digital',
            'Technicien en électricité',
            'BTS en comptabilité',
            'DUT en génie mécanique',
            'CAP en boulangerie',
            'Bachelor en design graphique',
            'Doctorat en physique',
            'MBA en management international'
        ];
        return ['Titre'=>$this->faker->randomElement($titres),
        'NbreHeure'=>$this->faker->numberBetween(1,5)
            //
        ];
    }
}
