<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aeroport>
 */
class AeroportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $aeroports = ['Casablanca Mohammed V', 'Paris Charles de Gaulle', 'New York JFK', 'Dubai International', 'London Heathrow'];
        $codes = ['CMN', 'CDG', 'JFK', 'DXB', 'LHR'];
        $villes = ['Casablanca', 'Paris', 'New York', 'Dubai', 'London'];
        $pays = ['Maroc', 'France', 'Etats-Unis', 'Emirats Arabes Unis', 'Royaume-Uni'];
        return [
            'nom' => fake()->randomElement($aeroports),
            'code_iata' => fake()->randomElement($codes),
            'ville' => fake()->randomElement($villes),
            'pays' => fake()->randomElement($pays)
        ];
    }
}
