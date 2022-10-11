<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\SkpdImport;
use Auth;
use App\Skpd;
use Excel;
use DB;

class SKPDController extends Controller
{
	public function listSKPD($segment){
		if ($segment == "all") {
			$segment = "all";
			$data = Skpd::all();
		} else if($segment != "all"){
			$segment = $segment;
			if (Auth::user()->hak_akses == 'ADMIN' || Auth::user()->hak_akses == 'BIDANG') {
				$data = Skpd::all();
			} else {
				$data = Skpd::where('id', Auth::user()->id_skpd)->get();
			}
		} 

		return view('pages.admin.master.skpd.list_skpd', compact('data', 'segment'));
		// dd($segment);
	}

	public function importSKPD(Request $request)
	{
		if($request->hasFile('file_skpd')){
			$path = $request->file('file_skpd')->getRealPath();
			$data = Excel::import(new SkpdImport, $path);
			if ($data) {
				return back()->with('success','Data Berhasil di Upload');
			} else {
				return back()->with('error','Upload Data Gagal');	
			}
		} else {
			return back()->with('error','File Excel error, tolong cek kembali file Anda!');
		}
	}

	public function simpanSKPD(Request $request)
	{
		$insert = Skpd::insert([
			'kode_skpd'			=> $request->kode_skpd,
			'nama_skpd'			=> $request->nama_skpd
		]);

		if($insert){
			return back()->with('success','Data Berhasil di Tambahkan');
		} else {
			return back()->with('error','Data Gagal di Tambahkan');
		}
	}

	public function ubahSKPD(Request $request)
	{
		$insert = Skpd::where('id', '=', $request->id_skpd)->update([
			'kode_skpd'			=> $request->kode_skpd,
			'nama_skpd'			=> $request->nama_skpd
		]);

		if($insert){
			return back()->with('success','Data Berhasil di Ubah');
		} else {
			return back()->with('error','Data Gagal di Ubah');
		}
	}

	public function hapusSKPD($id)
	{
		$insert = Skpd::where('id', '=', $id)->delete();

		if($insert){
			return back()->with('success','Data Berhasil di Hapus');
		} else {
			return back()->with('error','Data Gagal di Hapus');
		}
	}
}
