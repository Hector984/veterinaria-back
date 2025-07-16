<?php

namespace Database\Seeders;

use App\Models\Veterinary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VeterinarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Veterinary::factory()->create([
            'user_id' => 1,
            'name' => 'Huellitas',
            'location' => 'C. Orión, 54840 Ciudad de México, Méx.',
            'lattitude' => 19.6916051,
            'longitude' => -99.1675423
        ]);

        Veterinary::factory()->create([
            'user_id' => 2,
            'name' => 'Zoo Veterinaria',
            'location' => 'Calle Juárez #123, Colonia Centro, Ciudad de México, MX'
        ]);

        Veterinary::factory()->create([
            'user_id' => 3,
            'name' => 'Mr pulgas',
            'location' => 'Avenida Benito Juárez #456, Colonia Reforma, Guadalajara, MX.'
        ]);

        Veterinary::factory()->create([
            'user_id' => 4,
            'name' => 'Pet Care',
            'location' => 'Calle Hidalgo #789, Colonia Juárez, Monterrey, MX'
        ]);

        Veterinary::factory()->create([
            'user_id' => 5,
            'name' => 'Salud animal',
            'location' => 'Paseo de la Reforma #234, Colonia Condesa, Ciudad de México, MX'
        ]);

        Veterinary::factory()->create([
            'user_id' => 6,
            'name' => 'La Caballeriza',
            'location' => 'Avenida Insurgentes #567, Colonia Del Valle, Puebla, MX'
        ]);
        
    }
}
