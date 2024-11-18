<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use App\Models\Fakultas;
use App\Models\PerguruanTinggi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PerguruanTinggiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PerguruanTinggi::factory(30)->create()->each(function ($pt) {
              Fakultas::factory(10)->create([
                'perguruan_tinggi_id' => $pt->id,
              ])->each(function ($fakultas) {
                Jurusan::factory(20)->create([
                    'fakultas_id' => $fakultas->id,
                ]);
              });
        });


    }
}
