<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Latihan3Controller extends Controller
{
    //
    public function index()
    {
        // mengambil data dari table keranjang
        //$keranjang = DB::table('keranjang')->get(); //array all record
        $keranjangbelanja = DB::table('keranjangbelanja')->paginate(10);

    	// mengirim data keranjang ke view index
        return view('indexlatihan3',['keranjangbelanja' => $keranjangbelanja]);

    }

    // method untuk menampilkan view form tambah keranjang
    public function tambah()
    {

        // memanggil view tambah
        return view('tambahlatihan3');
    }

    // method untuk insert data ke table keranjang
    public function store(Request $request)
    {
        // insert data ke table keranjang
        DB::table('keranjangbelanja')->insert([
            'kodebarang' => $request->kode,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga
        ]);
        // alihkan halaman ke halaman keranjang
        return redirect('/keranjangbelanja');
    }

    // update data keranjang
    public function update(Request $request)
    {
        // update data keranjang
        DB::table('keranjangbelanja')->where('ID',$request->id)->update([
            'kodebarang' => $request->kode,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga
        ]);
        // alihkan halaman ke halaman keranjang
        return redirect('/keranjangbelanja');
    }

    // method untuk hapus data keranjang
    public function hapus($id)
    {
        // menghapus data keranjang berdasarkan id yang dipilih
        DB::table('keranjangbelanja')->where('ID',$id)->delete();

        // alihkan halaman ke halaman keranjang
        return redirect('/keranjangbelanja');
    }

}