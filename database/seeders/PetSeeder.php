<?php

namespace Database\Seeders;

use App\Models\Pet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pet::factory()->count(3)->create([
            'specie' => 'Perro',
            'breed' => 'Labrador'
        ]);

        Pet::factory()->count(3)->create([
            'specie' => 'Perro',
            'breed' => 'Pastor Aleman'
        ]);

        Pet::factory()->count(3)->create([
            'specie' => 'Perro',
            'breed' => 'Chihuahua'
        ]);

        Pet::factory()->count(3)->create([
            'specie' => 'Perro',
            'breed' => 'Pug'
        ]);

        Pet::factory()->count(3)->create([
            'specie' => 'Gato',
            'breed' => 'Persa'
        ]);

        Pet::factory()->count(3)->create([
            'specie' => 'Gato',
            'breed' => 'Siamés'
        ]);

        Pet::factory()->count(3)->create([
            'specie' => 'Gato',
            'breed' => 'Sphynx'
        ]);

        Pet::factory()->count(3)->create([
            'specie' => 'Conejo',
            'breed' => 'Enano Holandés'
        ]);

        Pet::factory()->count(3)->create([
            'specie' => 'Conejo',
            'breed' => 'Rex'
        ]);

        Pet::factory()->count(3)->create([
            'specie' => 'Conejo',
            'breed' => 'Cabeza de León'
        ]);

        Pet::factory()->count(3)->create([
            'specie' => 'Ave',
            'breed' => 'Periquito Australiano'
        ]);

        Pet::factory()->count(3)->create([
            'specie' => 'Ave',
            'breed' => 'Cotorra Argentina'
        ]);

        Pet::factory()->count(3)->create([
            'specie' => 'Ave',
            'breed' => 'Agapornis'
        ]);

        Pet::factory()->count(3)->create([
            'specie' => 'Hámster',
            'breed' => 'Roborowski'
        ]);

        Pet::factory()->count(3)->create([
            'specie' => 'Hámster',
            'breed' => 'Sirio'
        ]);
    }
}
