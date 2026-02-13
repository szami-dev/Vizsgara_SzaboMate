<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ingatlanok', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategoria')->references('id')->on('kategoriak')->onDelete('cascade'); // idegen kulcs a kategoriak táblára (a neve az ingatlanok tablaba, milyen paraméterrel, milyen tablaban kapcsolod ossze)
            $table->string('leiras')->nullable(); // leírás mező, ami lehet null értékű
            $table->timestamp('hirdetesDatuma')->nullable()->default(DB::raw('CURRENT_TIMESTAMP')); // hirdetés dátuma mező, ami automatikusan a létrehozás időpontját veszi fel
            $table->boolean('tehermentes')->default(false); // tehermentes mező, ami alapértelmezés szerint hamis értékű
            $table->integer('ar');
            $table->string('kepUrl')->nullable(); // kép URL mező, ami lehet null értékű

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingatlanok');
    }
};
