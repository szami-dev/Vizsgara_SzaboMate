<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategoria;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Kategóriák létrehozása
        $kategoeiak = ['Ház', 'Lakás', 'Építési telek', 'Garázs', 'Mezőgazdasági terület', 'Ipari ingatlan'];
        foreach ($kategoeiak as $nev) {
            Kategoria::create(['nev' => $nev]);
        }

        
    }
}
