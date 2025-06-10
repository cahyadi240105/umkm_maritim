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

        return view('aksesoris', array_merge(compact('aksesoriss')),[
            'title' => "Aksesoris"
        ]);
    }
    public function redirectWa($id)
    {
        // Ambil data produk berdasarkan ID
        $aksesoris = collect(json_decode(File::get(resource_path('data/aksesoris.json')), true))
            ->firstWhere('id', $id);

        // Validasi jika data tidak ditemukan
        if (!$aksesoris) {
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
            . "*PRODUK*: {$aksesoris['judul']}\n"
            . "*HARGA*: Rp" . number_format($aksesoris['harga'], 0, ',', '.') . "\n"
            . "*LOKASI*: {$aksesoris['lokasi']}\n\n"
            . "Saya berminat memesan produk ini.\n"
            . "Apakah masih tersedia?\n\n"
            . "Terima kasih.";

        // Redirect ke WhatsApp
        $link = 'https://wa.me/' . $adminWa . '?text=' . rawurlencode($pesan);
        return redirect()->away($link);
    }
   
}
