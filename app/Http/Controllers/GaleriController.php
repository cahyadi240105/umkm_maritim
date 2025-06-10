<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class GaleriController extends Controller
{
    public function index()
    {
        $json = File::get(resource_path('data/galeri.json'));
        $galeri = json_decode($json, true);
        return view('galeri', array_merge(compact('galeri')) , [
            'title' => "Galeri"
        ]);

    }
}
