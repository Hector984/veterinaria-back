<?php

namespace Database\Seeders;

use App\Models\Owner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Owner::factory()->count(5)->create([
            'veterinary_id' => 1
        ]);

        Owner::factory()->count(5)->create([
            'veterinary_id' => 2
        ]);

        Owner::factory()->count(5)->create([
            'veterinary_id' => 3
        ]);

        Owner::factory()->count(5)->create([
            'veterinary_id' => 4
        ]);

        Owner::factory()->count(5)->create([
            'veterinary_id' => 5
        ]);

        Owner::factory()->count(5)->create([
            'veterinary_id' => 6
        ]);
    }
}
