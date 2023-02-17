<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Province;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Province::factory()->create([
            'province' => 'Bukidnun',
        ]);

        Province::factory()->create([
            'province' => 'Lanao Del Norte',
        ]);

        Province::factory()->create([
            'province' => 'Misamis Oriental',
        ]);

        Province::factory()->create([
            'province' => 'Misamis Occidental',
        ]);

        Province::factory()->create([
            'province' => 'Camiguin',
        ]);
    }
}
