<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class kategoriController extends Controller
{
    public function index(){
        $kategory = Kategori::all();

        return view('pages.kategori', ["kategori" => $kategory]);
    }
    public function store(Request $request){
        $request->validate([
            'nama' => 'required|string',
        ]);

        $k = new Kategori;

        $k->nama = $request->nama;
        $k->save();

        return redirect()->route('index-product')
            ->with('k-success', ' New kategori has been created successfully.');
    }
}
