<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GaleriController extends Controller
{
    public function index(Request $request){
        return $this->galeri($request);

    }
    public function galeri(Request $request)
    {
        $aksesoris = collect(json_decode(File::get(resource_path('data/aksesoris.json')), true));
        $hasilLaut = collect(json_decode(File::get(resource_path('data/hasil-laut.json')), true));
        $kuliner = collect(json_decode(File::get(resource_path('data/kuliner.json')), true));

        $allProducts = collect([]);

        $allProducts = $allProducts->merge(
            collect($aksesoris)->map(function ($item) {
                $item['kategori'] = 'aksesoris';
                return $item;
            })
        );

        $allProducts = $allProducts->merge(
            collect($hasilLaut)->map(function ($item) {
                $item['kategori'] = 'hasil_laut';
                return $item;
            })
        );

        $allProducts = $allProducts->merge(
            collect($kuliner)->map(function ($item) {
                $item['kategori'] = 'kuliner';
                return $item;
            })
        );

        $selectedCategory = $request->input('category');
        if ($selectedCategory) {
            $allProducts = $allProducts->filter(function ($item) use ($selectedCategory) {
                return $item['kategori'] === $selectedCategory;
            });
        }

        $searchTerm = $request->input('search');
        if ($searchTerm) {
            $allProducts = $allProducts->filter(function ($item) use ($searchTerm) {
                return str_contains(strtolower($item['judul']), strtolower($searchTerm)) ||
                    str_contains(strtolower($item['deskripsi']), strtolower($searchTerm));
            });
        }

        $sortBy = $request->input('sort', 'terbaru');
        if ($sortBy === 'terlama') {
            $allProducts = $allProducts->sortBy('created_at');
        } else {
            $allProducts = $allProducts->sortByDesc('created_at');
        }

        $categories = ['aksesoris', 'hasil_laut', 'kuliner'];

        return view('galeri', [
            'galeri' => $allProducts->values()->all(),
            'categories' => $categories,
            'search' => $searchTerm,
            'selectedCategory' => $selectedCategory,
            'sort' => $sortBy,
            'title' => 'Galeri'
        ]);
    }
}
