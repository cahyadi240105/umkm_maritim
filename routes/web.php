<?php

use Illuminate\Support\Facades\Route;

Route::get('/homepage', function () {
    return view('homepage', [
        "title" => "homepage"
    ]);
});

Route::get('/kuliner', function () {
    return view('kuliner', [
        "title" => "kuliner"
    ]);
});

Route::get('/aksesoris', function () {
    return view('aksesoris', [
        "title" => "Aksesoris"
    ]);
});

Route::get('/hasillaut', function () {
    return view('hasillaut', [
        "title" => "Hasil Laut"
    ]);
});

Route::get('/galeri', function () {
    return view('galeri', [
        "title" => "Galeri"
    ]);
});

Route::get('/tentangkami', function () {
    return view('tentangkami', [
        "title" => "Tentang Kami"
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Kontak Kami"
    ]);
});

