<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function index()
    {
        //Raw query
        $kategori = DB::select('select nama, id from kategoris');

        return view('pages.kelolaProduct', ["kategori" => $kategori]);
    }
    public function show()
    {
        //Raw query
        $kategori = DB::select('select nama, id from kategoris');

        //eloquent
        $product = product::with('Kategori')->get();

        return view('pages.productShow', ["product" => $product, "kategori" => $kategori]);
    }
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

        $path = $request->file('gambar')->store('public/images');
        $p = new product;
        $p->nama_product = $request->nama;
        $p->harga_product = $request->harga;
        $p->stok_product = $request->stok;
        $p->terjual = $request->terjual;
        $p->deskripsi_product = $request->deskripsi;
        $p->kategori_id = $request->kategori;
        $p->gambar = $path;
        $p->save();

        return redirect()->route('index-product')
            ->with('success', ' New product has been created successfully.');
    }

    public function update(Request $request, $id)
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

        $p = product::find($id);

        if ($request->hasFile('gambar')) {
            $request->validate([
                'gambar' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('gambar')->store('public/images');
            $p->gambar = $path;
        }

        $p->nama_product = $request->nama;
        $p->harga_product = $request->harga;
        $p->stok_product = $request->stok;
        $p->terjual = $request->terjual;
        $p->deskripsi_product = $request->deskripsi;
        $p->kategori_id = $request->kategori;
        $p->save();


        return redirect()->route('show-product')
            ->with('success', 'Product has been edited successfully.');
    }

    public function destroy($id)
    {
        product::where('id', $id)->delete();

        return redirect()->route('show-product')
            ->with('success', 'Product has been Deleted successfully.');
    }
}
