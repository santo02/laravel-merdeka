<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function showKategori()
    {
        $kategori = DB::table('kategoris')->select('kategoris.nama', 'kategoris.id')->get();
        return response()->json($kategori);
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required|string'
        ]);

        $kat = new Kategori();
        $kat->nama = $request->nama;
        $kat->save();
        return response()->json([
            'message' => 'New kategori Created Successfully!!'
        ]);
    }
}
