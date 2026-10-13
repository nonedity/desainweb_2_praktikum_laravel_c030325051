<?php

namespace Database\Factories;

use App\Models\Matakuliah;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Matakuliah>
 */
class MatakuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_mk' => fake()->unique()->bothify('IF###'),
            'nama_mk' => fake()->randomElement(['Pemrograman Web', 'Basis Data Lanjut', 'Pemrograman Berorientasi Objek', 'Struktur Data']),
            'sks' => fake()->numberBetween(2, 4),
        ];
    }
}