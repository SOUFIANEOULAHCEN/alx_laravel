<?php

namespace Database\Factories;

use App\Models\Aeroport;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vol>
 */
class VolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // return [
        //     'numero_vol' => fake()->unique()->regexify('[A-Z]{2}[0-9]{4}'),
        //     'aeroport_depart_id' => Aeroport::inRandomOrder()->first()->code_iata,
        //     'aeroport_arrivee_id' => Aeroport::inRandomOrder()->first()->code_iata,
        //     'date_heure_depart' => fake()->dateTimeBetween('now', '+1 year'),
        //     'date_heure_arrivee' => fake()->dateTimeBetween('now', '+1 year'),
        //     'statut' => fake()->randomElement(['ouvert', 'ferme', 'retarde', 'annule']),
        //     'prix' => fake()->randomFloat(2, 1000, 10000)

        // ];

        $aeroport_depart = Aeroport::inRandomOrder()->first();
        $aeroport_arrivee = Aeroport::inRandomOrder()->where('id', '!=', $aeroport_depart->id)->first();

        return [
            'numero_vol' => fake()->unique()->regexify('[A-Z]{2}[0-9]{4}'),
            'aeroport_depart_id' => $aeroport_depart->id,
            'aeroport_arrivee_id' => $aeroport_arrivee->id, 
            'date_heure_depart' => fake()->dateTimeBetween('now', '+1 year'),
            'date_heure_arrivee' => fake()->dateTimeBetween('+1 day', '+1 year'),
            'statut' => fake()->randomElement(['ouvert', 'ferme', 'retarde', 'annule']),
            'prix' => fake()->randomFloat(2, 1000, 10000)
        ];
    }
}
