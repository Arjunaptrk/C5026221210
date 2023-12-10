<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class sepedahController extends Controller
{
	public function index()
	{
    	// mengambil data dari table
		// $pegawai = DB::table('pegawai')->get();
        $sepedah = DB::table('sepedah')->get();

    	// mengirim data pegawai ke view index
		return view('indexsepedah',['sepedah' => $sepedah]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahsepedah');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
        if ($request->jumlah > 0) $status = 1;
        else $status = 0;

		// insert data ke table pegawai
		DB::table('sepedah')->insert([
			'kodesepedah' => $request->kode,
			'merksepedah' => $request->merk,
			'stocksepedah' => $request->stock,
			'tersedia' => $status
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/sepedah');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$sepedah = DB::table('sepedah')->where('kodesepedah',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editsepedah',['sepedah' => $sepedah]);

	}

	// update data pegawai
	public function update(Request $request)
	{
        if ($request->jumlah > 0) $status = 1;
        else $status = 0;

		// update data pegawai
		DB::table('sepedah')->where('kodesepedah',$request->id)->update([
			'merksepedah' => $request->merk,
			'stocksepedah' => $request->stock,
			'tersedia' => $status,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/sepedah');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('sepedah')->where('kodesepedah',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/sepedah');
	}

    // method cari pegawai
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$sepedah = DB::table('sepedah')
		->where('merksepedah','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexsepedah',['sepedah' => $sepedah]);

	}

    public function view($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$sepedah = DB::table('sepedah')->where('kodesepedah',$id)->get();
		// passing data pegawai yang didapat ke view view.blade.php
        return view('viewsepedah',['sepedah' => $sepedah]);

	}
}
