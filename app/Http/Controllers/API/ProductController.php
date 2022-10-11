<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function Pria()
    {
        $pria = DB::table('products')
        ->join('kategoris', 'products.kategori_id', '=', 'kategoris.id')
        ->where('kategoris.nama', '=', 'pria')
        ->select('products.nama_product', 'products.harga_product', 'products.stok_product', 'products.terjual', 'products.gambar', 'products.kategori_id', 'products.deskripsi_product', 'kategoris.nama')
        ->get();
        return response()->json($pria);
    }

    public function wanita()
    {
        $wanita = DB::table('products')
        ->join('kategoris', 'products.kategori_id', '=', 'kategoris.id')
        ->where('kategoris.nama', '=', 'wanita')
        ->select('products.nama_product', 'products.harga_product', 'products.stok_product', 'products.terjual', 'products.gambar', 'products.kategori_id', 'products.deskripsi_product', 'kategoris.nama')
        ->get();
        return response()->json($wanita);
    }

    public function trending(){
        $trending = DB::table('products')
        ->join('kategoris', 'products.kategori_id', '=', 'kategoris.id')
        ->select('products.nama_product', 'products.harga_product', 'products.stok_product', 'products.terjual', 'products.gambar', 'products.kategori_id', 'products.deskripsi_product', 'kategoris.nama')
        ->orderBy('products.terjual', 'DesC')
        ->limit(4)
        ->get();
        return response()->json($trending);
    }
}
