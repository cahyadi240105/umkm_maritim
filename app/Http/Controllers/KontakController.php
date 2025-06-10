<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\KontaKamiMail;
use App\Mail\KontakKamiMail;

class KontakController extends Controller
{
    public function index()
    {
        return view('kontak', [
            'title' => "Kontak"
        ]);
    }

    public function kirim(Request $request){
        $request -> validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email',
            'subjek' => 'required|string|max:150',
            'pesan' => 'required|string|max:2000'
        ]);
        Mail::to('cahyadi.informatics@gmail.com')->send(new KontakKamiMail($request->all()));
        return back() -> with('success','Pesan Berhasil dikirim!');
    }
}
