<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductControllerCRUD extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required|string',
            'harga' => 'required|string',
            'stok' => 'required|string',
            'terjual' => 'required|string',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string',
            'gambar' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $p = new product;
        $p->nama_product = $request->nama;
        $p->harga_product = $request->harga;
        $p->stok_product = $request->stok;
        $p->terjual = $request->terjual;
        $p->deskripsi_product = $request->deskripsi;
        $p->kategori_id = $request->kategori;
        $imageName  = time() . "." . $request->gambar->extension();
        $p->gambar = $imageName;
        $p->save();

        $request->gambar->move(public_path('images'), $imageName);


        if ($p) {
            return response()->json([
                'message' => 'New Created Successfully!!',
                'product' => $p
            ]);
        } else {
            return response()->json([
                'message' => 'Something error!!',
                'product' => $p
            ]);
        }
    }

    public function index()
    {
        $product = DB::table('products')
            ->join('kategoris', 'products.kategori_id', '=', 'kategoris.id')
            ->select('products.nama_product', 'products.id', 'products.harga_product', 'products.stok_product', 'products.terjual', 'products.gambar', 'products.kategori_id', 'products.deskripsi_product', 'kategoris.nama')
            ->get();
        return response()->json($product);
    }
    public function edit($id)
    {
        $product = product::with('Kategori')->get()->find($id);
        return response()->json($product);
    }

    public function update($id, Request $request)
    {
        $p = product::find($id);

        if ($request->hasFile('gambar')) {
            $request->validate([
                'gambar' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            Storage::disk('local')->delete('/public/images/' . $p->gambar);
            $path = $request->file('gambar')->store('public/images');
            $p->gambar = $path;
        }
        $p->update($request->all());


        // $product = product::find($id);

        // if ($request->file('gambar') == "") {

        //     $product->update([
        //         'nama_product' => $request->nama,
        //         'harga_product' => $request->harga,
        //         'stok_product' => $request->stok,
        //         'terjual' => $request->terjual,
        //         'deskripsi_product' => $request->deskripsi,
        //         'kategori_id' => $request->kategori,
        //     ]);
        // } else {
        //     Storage::disk('local')->delete('/public/images/' . $product->gambar);

        //     $imageName  = time() . "." . $request->gambar->extension();
        //     $product->gambar = $imageName;
        //     $request->gambar->move(public_path('images'), $imageName);
        //     $product->update([
        //         'nama_product' => $request->nama,
        //         'harga_product' => $request->harga,
        //         'stok_product' => $request->stok,
        //         'terjual' => $request->terjual,
        //         'deskripsi_product' => $request->deskripsi,
        //         'kategori_id' => $request->kategori,
        //         'gambar' => $request->gambar
        //     ]);
        // }
        return response()->json([
            'message' => "The product successfully updated",
        ]);
    }
    public function delete($id)
    {
        $product = product::find($id);
        $product->delete();

        return response()->json('The product successfully deleted');
    }
}
