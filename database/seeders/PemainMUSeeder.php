<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PemainMU;

class PemainMUSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            PemainMU::create([
                'nama_pemain' => fake()->name(),
                'no_punggung' => fake()->numberBetween(1, 11),
                'posisi' => fake()->sentence(1),
            ]);
        }
    }
}
