<?php

namespace App\Http\Controllers;

use App\Models\tevekenyseg;
use Illuminate\Http\Request;

class TevekenysegController extends Controller
{
    public function index()
    {
        $tevekenysegek = tevekenyseg::with('kategoria')->get();


        return response()->json($tevekenysegek);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kat_id' => 'required|exists:kategorias,id',
            'tev_nev' => 'required|string|max:255',
            'allapot' => 'required|boolean',
        ]);

        $tevekenyseg = Tevekenyseg::create([
            'kat_id' => $request->kat_id,
            'tev_nev' => $request->tev_nev,
            'allapot' => $request->allapot,
        ]);

        return response()->json($tevekenyseg, 201);
    }

    public function destroy($id)
    {
        $tevekenyseg = Tevekenyseg::find($id);

        if (!$tevekenyseg) {
            return response()->json(['message' => 'Tevékenység nem található'], 404);
        }

        $tevekenyseg->delete();

        return response()->json(['message' => 'Tevékenység törölve'], 200);
    }

    public function update(Request $request, $id)
    {
        $tevekenyseg = Tevekenyseg::find($id);

        if (!$tevekenyseg) {
            return response()->json(['message' => 'Tevékenység nem található'], 404);
        }

        $request->validate([
            'kat_id' => 'required|exists:kategorias,id',
            'tev_nev' => 'required|string|max:255',
            'allapot' => 'required|boolean',
        ]);

        $tevekenyseg->update([
            'kat_id' => $request->kat_id,
            'tev_nev' => $request->tev_nev,
            'allapot' => $request->allapot,
        ]);

        return response()->json($tevekenyseg, 200);
    }
}
