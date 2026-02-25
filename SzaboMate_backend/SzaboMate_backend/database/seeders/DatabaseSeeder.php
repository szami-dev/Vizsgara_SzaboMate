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
        $ingatlanok = [
            ['kategoria' => 1, 'tehermentes' => true, 'ar' => 50000000],
            ['kategoria' => 2, 'tehermentes' => false, 'ar' => 30000000],
            ['kategoria' => 3, 'tehermentes' => true, 'ar' => 10000000],
            ['kategoria' => 4, 'tehermentes' => false, 'ar' => 2000000],
            ['kategoria' => 5, 'tehermentes' => true, 'ar' => 15000000],
            ['kategoria' => 6, 'tehermentes' => false, 'ar' => 25000000],
        ];
        foreach ($ingatlanok as $ingatlan) {
            \App\Models\Ingatlan::create($ingatlan);
        }
    }
}
