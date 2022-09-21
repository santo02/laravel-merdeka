<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class DashboardController extends Controller
{
    public function index()
    {
        $pria = product::with('Kategori')->where('kategori_id', '1')->get();

        $wanita = product::with('Kategori')->where('kategori_id', '2')->get();

        $trending = product::with('Kategori')
        ->orderBy('terjual', 'DESC')
        ->limit(4)
        ->get();

        return view('pages.homepage', ["pria"=> $pria, "wanita" => $wanita, "trending" => $trending]);
        // return view('pages.homepage', ["pria"=> $pria]);
    }
}
