<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\UrusanImport;
use App\Urusan;
use Excel;
use DB;

class UrusanController extends Controller
{
	public function listUrusan(){
		$data = Urusan::all();

		return view('pages.admin.master.urusan.list_urusan', compact('data'));
		// dd($segment);
	}

	public function importUrusan(Request $request)
	{
		if($request->hasFile('file_urusan')){
			$path = $request->file('file_urusan')->getRealPath();
			$data = Excel::import(new UrusanImport, $path);
			if ($data) {
				return back()->with('success','Data Berhasil di Upload');
			} else {
				return back()->with('error','Upload Data Gagal');	
			}
		} else {
			return back()->with('error','File Excel error, tolong cek kembali file Anda!');
		}
	}

	public function simpanUrusan(Request $request)
	{
		$insert = Urusan::insert([
			'kode_urusan'			=> $request->kode_urusan,
			'nama_urusan'			=> $request->nama_urusan
		]);

		if($insert){
			return back()->with('success','Data Berhasil di Tambahkan');
		} else {
			return back()->with('error','Data Gagal di Tambahkan');
		}
	}

	public function ubahUrusan(Request $request)
	{
		$insert = Urusan::where('id', '=', $request->id_urusan)->update([
			'kode_urusan'			=> $request->kode_urusan,
			'nama_urusan'			=> $request->nama_urusan
		]);

		if($insert){
			return back()->with('success','Data Berhasil di Ubah');
		} else {
			return back()->with('error','Data Gagal di Ubah');
		}
	}

	public function hapusUrusan($id)
	{
		$insert = Urusan::where('id', '=', $id)->delete();

		if($insert){
			return back()->with('success','Data Berhasil di Hapus');
		} else {
			return back()->with('error','Data Gagal di Hapus');
		}
	}
}
