<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AksesorisController extends Controller
{
    public function index()
    {
        $json = File::get(resource_path('data/aksesoris.json'));
        $aksesoriss = json_decode($json, true);

        return view('aksesoris', array_merge(compact('aksesoriss')), [
            'title' => "Aksesoris"
        ]);
    }
    public function redirectWa($id, Request $request)
    {
        $aksesoriss = collect(json_decode(File::get(resource_path('data/aksesoris.json')), true));
        $aksesoris = $aksesoriss->firstWhere('id', $id);

        if (!$aksesoris) {
            abort(404, 'Produk tidak ditemukan.');
        }

        $adminData = json_decode(File::get(resource_path('data/kontak_admin.json')), true);
        $adminUMKM = collect($adminData['admin_umkm'] ?? []);
        $admin = $adminUMKM->firstWhere('id', $id);

        // $admin = $adminUMKM->first(function($a) use ($aksesoris){
        //     return stripos($aksesoris['lokasi'], $a['lokasi']) !== false;
        // });
        
        if (!$admin || !isset($admin['wa'])) {
            abort(500, 'Nomor WhatsApp admin UMKM tidak ditemukan.');
        }

        $jumlah = $request->input('jumlah', 1);
        $totalHarga = $aksesoris['harga'] * $jumlah;

        $pesan = "HALO ADMIN, SAYA INGIN MEMESAN:\n\n"
            . "*PRODUK*: {$aksesoris['judul']}\n"
            . "*HARGA*: Rp" . number_format($aksesoris['harga'], 0, ',', '.') . "\n"
            . "*JUMLAH*: {$jumlah}\n"
            . "*TOTAL HARGA*: Rp" . number_format($totalHarga, 0, ',', '.') . "\n"
            . "*LOKASI*: {$aksesoris['lokasi']}\n\n"
            . "Saya berminat memesan produk ini.\n"
            . "Apakah masih tersedia?\n\n"
            . "Terima kasih.";

        $link = 'https://wa.me/' . $admin['wa'] . '?text=' . rawurlencode($pesan);
        return redirect()->away($link);
    }
}
