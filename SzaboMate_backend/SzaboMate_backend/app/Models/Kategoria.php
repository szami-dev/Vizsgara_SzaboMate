<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Ingatlan;


class Kategoria extends Model
{
    public $table = 'kategoriak'; // Ez megmondja a Laravelnek, hogy melyik táblát használja ehhez a modellhez
    public $fillable = ['nev']; // Ez megengedi, hogy a 'nev' mező tömegesen kitölthető legyen
    public $timestamps = false; // Ez megakadályozza, hogy a Laravel automatikusan kezelje a created_at és updated_at mezőket
    
    
}
