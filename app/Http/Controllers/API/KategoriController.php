<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function showKategori()
    {
        $kategori = DB::table('kategoris')->select('kategoris.nama', 'kategoris.id')->get();
        return response()->json($kategori);
    }
}
