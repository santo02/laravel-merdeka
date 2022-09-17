<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $pria = DB::table('products')
        ->where('kategory', 'pria')
        ->get('products.*');

        $wanita = DB::table('products')
        ->where('kategory', 'wanita')
        ->get('products.*');


        $trending = DB::table('products')
        ->orderBy('terjual', 'DESC')
        ->limit(4)
        ->get('products.*');

        return view('pages.homepage', ["pria"=> $pria, "wanita" => $wanita, "trending" => $trending]);
    }
}
