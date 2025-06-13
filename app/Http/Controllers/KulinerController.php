<?php

namespace App\Http\Controllers;

use App\Mail\KontakKamiMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
class KulinerController extends Controller
{
    public function index()
    {
        $json = File::get(resource_path('data/kuliner.json'));
        $kuliners = json_decode($json, true);


        return view('kuliner', array_merge(compact('kuliners')),[
            'title' => "Kuliner"
        ]);
        
    }
    public function redirectWa($id, Request $request)
    {
        $kuliners = collect(json_decode(File::get(resource_path('data/kuliner.json')), true));
        $kuliner = $kuliners->firstWhere('id', $id);

        if (!$kuliner) {
            abort(404, 'Produk tidak ditemukan.');
        }

        $adminData = json_decode(File::get(resource_path('data/kontak_admin.json')), true);
        $adminUMKM = collect($adminData['admin_umkm'] ?? []);
        $admin = $adminUMKM->firstWhere('id', $id);

        if (!$admin || !isset($admin['wa'])) {
            abort(500, 'Nomor WhatsApp admin UMKM tidak ditemukan.');
        }

        $jumlah = $request->input('jumlah', 1);
        $totalHarga = $kuliner['harga'] * $jumlah;

        $pesan = "HALO ADMIN, SAYA INGIN MEMESAN:\n\n"
            . "*PRODUK*: {$kuliner['judul']}\n"
            . "*HARGA*: Rp" . number_format($kuliner['harga'], 0, ',', '.') . "\n"
            . "*JUMLAH*: {$jumlah}\n"
            . "*TOTAL HARGA*: Rp" . number_format($totalHarga, 0, ',', '.') . "\n"
            . "*LOKASI*: {$kuliner['lokasi']}\n\n"
            . "Saya berminat memesan produk ini.\n"
            . "Apakah masih tersedia?\n\n"
            . "Terima kasih.";

        $link = 'https://wa.me/' . $admin['wa'] . '?text=' . rawurlencode($pesan);
        return redirect()->away($link);
    }



    // public function kirim(Request $request){
    //     $request->validate([
    //         'id' => 'required|integer',
    //     ]);
    //     $produkJson = File::get(resource_path('data/kuliner.json'));
    //     $produklist = collect(json_decode($produkJson,true));
    //     $produk = $produklist->firstWhere('id',$request->id);
    //     if(!$produk){
    //         return back()->with('error','Produk tidak ditemukan.');
    //     }
    //     $json_admin = File::get(resource_path('data/kontak_admin.json'));
    //     $admin = json_decode($json_admin,true)['admin']['wa'];

    //     $pesan = "📢 *Pesanan Produk Kuliner*\n"
    //         . "*Judul:* {$produk['judul']}\n"
    //         . "*Harga:* Rp " . number_format($produk['harga'], 0, ',', '.') . "\n"
    //         . "*Lokasi:* {$produk['lokasi']}\n"
    //         . "Mohon ditindaklanjuti 🙌";
    //     Http::post('http://localhost:3000/send-wa',[
    //         'number' => $admin['wa'],
    //         'message' => $pesan
    //     ]);

    //     return back()->with('success', 'Pesan dikirim ke admin via WA');
    // }
}
