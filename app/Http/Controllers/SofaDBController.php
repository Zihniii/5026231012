<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SofaDBController extends Controller
{
    public function indexsofa()
    {
    	// mengambil data dari table sofa
        $sofa = DB::table('sofa')->paginate(10);
        //echo $sofa
    	// mengirim data pegawai ke view index
    	return view('indexsofa',['sofa' => $sofa]);

    }

	// method untuk menampilkan view form tambah sofa
	public function tambahsofa()
	{

		// memanggil view tambah
		return view('tambahsofa');

	}

	// method untuk insert data ke table sofa
	public function storesofa(Request $request)
	{
		// insert data ke table pegawai
		DB::table('sofa')->insert([
			'merksofa' => $request->merk,
			'hargasofa' => $request->harga,
			'tersedia' => $request->ketersediaan,
			'berat' => $request->berat
		]);
		// alihkan halaman ke halaman sofa
		return redirect('/sofa');

	}

    // public function proses(Request $request)
    // {
    //     $this->validate($request,[
    //        'nama' => 'required|min:5|max:20',
    //        'pekerjaan' => 'required',
    //        'usia' => 'required|numeric'
    //     ]);

    //     return view('proses',['data' => $request]);
    // }

	// method untuk edit data sofa
	public function editsofa($id)
	{
		// mengambil data sofa berdasarkan id yang dipilih
		$sofa = DB::table('sofa')
        ->where('ID',$id)
        ->get();

		// passing data sofa yang didapat ke view edit.blade.php
		return view('editsofa',['sofa' => $sofa]);

	}

	// update data sofa
	public function updatesofa(Request $request)
	{
		// update data sofa
		DB::table('sofa')->where('ID',$request->id)->update([
			'merksofa' => $request->merk,
			'hargasofa' => $request->harga,
			'tersedia' => $request->ketersediaan,
			'berat' => $request->berat
		]);
		// alihkan halaman ke halaman sofa
		return redirect('/sofa');
	}

	// method untuk hapus data sofa
	public function hapussofa($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('sofa')->where('ID',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/sofa');
	}

    public function carisofa(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table sofa sesuai pencarian data
		$sofa = DB::table('sofa')
		->where('merksofa','like',"%".$cari."%")
		->paginate();

    	// mengirim data sofa ke view index
		return view('indexsofa',['sofa' => $sofa]);

	}
}
