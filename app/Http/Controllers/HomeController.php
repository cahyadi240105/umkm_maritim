<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class HomeController extends Controller
{
    public function index(Request $request)
    {
        $takecount = 2;
        $keyword = $request->query('search');
        $produkJson = File::get(resource_path('data/allproduk.json'));
        $produk = collect(json_decode($produkJson, true));

        if ($keyword) {
            $filtered = $produk->filter(function ($item) use ($keyword) {
                return stripos($item['judul'], $keyword) !== false ||
                    stripos($item['harga'], $keyword) !== false ||
                    stripos($item['lokasi'], $keyword) !== false;
            });
            $produk_result = $filtered->values();
        } else {
            $produk_result = $produk->shuffle()->take(3);
        }

        return view('homepage', [
            'title' => "homepage",
            'produk_result' => $produk_result,
            'search' => $keyword,
            'produk_full' => $produk->shuffle()->take($takecount)
        ]);
    }
}
