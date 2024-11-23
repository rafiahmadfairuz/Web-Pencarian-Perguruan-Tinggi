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
            // 'web' => "www.kampus.com",
            'alamat' => $this->faker->streetAddress(),
            'biaya' => $this->faker->randomNumber(7, false),
            'kategori' => $this->faker->randomElement(['Politeknik', 'Swasta', 'Negri', 'Sekolah Tinggi', 'Institut']),
            'akreditasi' => $this->faker->randomElement(['A', 'B', 'C']),
            'waktu_pendaftaran_awal' => "2024-11-01",
            'waktu_pendaftaran_berakhir' => "2024-12-20",
            'icon' => 'image/ub.png',
            'banner' => 'maha.jpg',
        ];
    }
}
