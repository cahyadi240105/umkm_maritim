<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class HasilLautController extends Controller
{
    public function index()
    {
        $json = File::get(resource_path('data/hasil-laut.json'));
        $hasils = json_decode($json, true);
        
        return view('hasillaut', array_merge(compact('hasils')), [
            'title' => "Hasil Laut"
        ]);
    }

    
    public function redirectWa($id, Request $request)
    {
        $hasils = collect(json_decode(File::get(resource_path('data/hasil-laut.json')), true));
        $hasil = $hasils->firstWhere('id', $id);
        if (!$hasil) {
            abort(404, 'Produk tidak ditemukan.');
        }

        $adminData = json_decode(File::get(resource_path('data/kontak_admin.json')), true);
        $adminUMKM = collect($adminData['admin_umkm'] ?? []);
        $admin = $adminUMKM->firstWhere('id', $id);

        if (!$admin || !isset($admin['wa'])) {
            abort(500, 'Nomor WhatsApp admin UMKM tidak ditemukan.');
        }

        $jumlah = $request->input('jumlah', 1);
        $totalHarga = $hasil['harga'] * $jumlah;

        $pesan = "HALO ADMIN, SAYA INGIN MEMESAN:\n\n"
            . "*PRODUK*: {$hasil['judul']}\n"
            . "*HARGA*: Rp" . number_format($hasil['harga'], 0, ',', '.') . "\n"
            . "*JUMLAH*: {$jumlah}\n"
            . "*TOTAL HARGA*: Rp" . number_format($totalHarga, 0, ',', '.') . "\n"
            . "*LOKASI*: {$hasil['lokasi']}\n\n"
            . "Saya berminat memesan produk ini.\n"
            . "Apakah masih tersedia?\n\n"
            . "Terima kasih.";

        $link = 'https://wa.me/' . $admin['wa'] . '?text=' . rawurlencode($pesan);
        return redirect()->away($link);
    }
}
