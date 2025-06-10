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
    public function redirectWa($id)
    {
        // Ambil data produk berdasarkan ID
        $hasil = collect(json_decode(File::get(resource_path('data/hasil-laut.json')), true))
            ->firstWhere('id', $id);

        // Validasi jika data tidak ditemukan
        if (!$hasil) {
            abort(404, 'Produk tidak ditemukan.');
        }

        // Ambil data admin WA
        $adminData = json_decode(File::get(resource_path('data/kontak_admin.json')), true);
        $adminWa = $adminData['admin']['wa'] ?? null;

        // Validasi WA admin
        if (!$adminWa) {
            abort(500, 'Nomor WhatsApp admin tidak ditemukan.');
        }

        // Format pesan WA
        $pesan = "HALO ADMIN, SAYA INGIN MEMESAN:\n\n"
            . "*PRODUK*: {$hasil['judul']}\n"
            . "*HARGA*: Rp" . number_format($hasil['harga'], 0, ',', '.') . "\n"
            . "*LOKASI*: {$hasil['lokasi']}\n\n"
            . "Saya berminat memesan produk ini.\n"
            . "Apakah masih tersedia?\n\n"
            . "Terima kasih.";

        // Redirect ke WhatsApp
        $link = 'https://wa.me/' . $adminWa . '?text=' . rawurlencode($pesan);
        return redirect()->away($link);
    }
}
