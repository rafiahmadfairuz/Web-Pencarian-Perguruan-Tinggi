<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PerguruanTinggi>
 */
class PerguruanTinggiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->sentence(2),
            'deskripsi' => $this->faker->paragraph(10, false),
            'slogan' => "Membangun Masa Depan Anda",
            'telp' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'web' => "www.kampus.com",
            'alamat' => $this->faker->streetAddress(),
            'biaya' => $this->faker->randomNumber(7, false),
            'kategori' => 'Politeknik',
            'waktu_pendaftaran' => $this->faker->date(),
            'foto' => 'ub.png',
            'banner' => 'maha.jpg',
        ];
    }
}
