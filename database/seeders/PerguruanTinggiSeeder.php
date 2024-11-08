<?php

namespace Database\Seeders;

use App\Models\PerguruanTinggi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerguruanTinggiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PerguruanTinggi::factory(20)->create();
    }
}
