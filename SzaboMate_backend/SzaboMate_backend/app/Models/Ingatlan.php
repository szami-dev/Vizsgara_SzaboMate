<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Kategoria;
class Ingatlan extends Model
{
    public $table = 'ingatlanok'; // Ez megmondja a Laravelnek, hogy melyik táblát használja ehhez a modellhez
    public $timestamps = false; // Ez megakadályozza, hogy a Laravel automatikusan kezelje a created_at és updated_at mezőket
    public $guarded = []; // Ez megengedi, hogy tömeges hozzárendelést használjunk a modell létrehozásakor

     // --- IGNORE ---
     public function kategoria()
     {
         return $this->belongsTo(Kategoria::class, 'kategoria');
     }
      // --- IGNORE ---
}
