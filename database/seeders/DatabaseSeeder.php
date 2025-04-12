<?php

namespace Database\Seeders;

use App\Models\kategoria;
use App\Models\tevekenyseg;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $kategoria1 = Kategoria::create(['katnev' => 'Kategória 1']);
        $kategoria2 = Kategoria::create(['katnev' => 'Kategória 2']);

        tevekenyseg::create([
            'kat_id' => $kategoria1->id,
            'tev_nev' => 'Tevékenység 1 kat1',
            'allapot' => true,
        ]);

        Tevekenyseg::create([
            'kat_id' => $kategoria1->id,
            'tev_nev' => 'Tevékenység 2 kat1',
            'allapot' => false,
        ]);

        Tevekenyseg::create([
            'kat_id' => $kategoria2->id,
            'tev_nev' => 'Tevékenység 1 kat2',
            'allapot' => true,
        ]);

        Tevekenyseg::create([
            'kat_id' => $kategoria2->id,
            'tev_nev' => 'Tevékenység 2 kat2',
            'allapot' => true,
        ]);
        Tevekenyseg::create([
            'kat_id' => $kategoria2->id,
            'tev_nev' => 'Tevékenység 3 kat2',
            'allapot' => true,
        ]);
        Tevekenyseg::create([
            'kat_id' => $kategoria2->id,
            'tev_nev' => 'Tevékenység 4 kat2',
            'allapot' => true,
        ]);
        Tevekenyseg::create([
            'kat_id' => $kategoria2->id,
            'tev_nev' => 'Tevékenység 5 kat2',
            'allapot' => true,
        ]);
        Tevekenyseg::create([
            'kat_id' => $kategoria2->id,
            'tev_nev' => 'Tevékenység 6 kat2',
            'allapot' => true,
        ]);
        Tevekenyseg::create([
            'kat_id' => $kategoria2->id,
            'tev_nev' => 'Tevékenység 7 kat2',
            'allapot' => true,
        ]);
    }
}
