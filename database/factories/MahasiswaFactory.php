<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nim' => fake()->unique()->numerify('C030325###'),
            'nama' => fake()->name(),
            'prodi' => 'Teknik Informatika',
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}