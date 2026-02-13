<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingatlan;
use Illuminate\Support\Facades\Validator;

class IngatlanController extends Controller
{
    public function index()
    {
        $ingatlanok = Ingatlan::with('kategoria')->get();
        return response()->json($ingatlanok);
    }

   
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kategoria' => 'required',
            'tehermentes' => 'required',
            'ar' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['message' => "Hiányos adatok"], 400);
        }
        $ingatlan = Ingatlan::create(request()->all());
        return response()->json(['id' => $ingatlan->id], 201);
    }

    
    

    public function destroy($id)
    {
        $ingatlan = Ingatlan::find($id);
        if (!$ingatlan) {
            return response()->json(['message' => "Ingatlan nem található"], 404);
        }
        Ingatlan::destroy($id);
        return response()->json(['message' => ""], 204);
    }
}
