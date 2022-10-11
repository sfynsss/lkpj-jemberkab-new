<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Skpd;
use App\BidangUrusan;
use App\Program;
use App\Kegiatan;

class KegiatanController extends Controller
{
    public function index($i){
    	$skpd = Skpd::where('id', $i)->first();
		$data = Program::where('id_skpd', $i)->get();

		return view('pages.admin.master.kegiatan.list_program', compact('data', 'skpd'));
		// dd($segment);
	}

	public function listKegiatan($i){
    	$program = Program::where('program.id', $i)->first();
		$data = Kegiatan::where('id_program', $i)->get();

		return view('pages.admin.master.kegiatan.list_kegiatan', compact('data', 'program'));
		// dd($segment);
	}

	public function simpanKegiatan(Request $request)
	{
		$insert = Kegiatan::insert([
			'id_skpd'				=> $request->id_skpd,
			'id_program'			=> $request->id_program,
			'kode_kegiatan'			=> $request->kode_kegiatan,
			'nama_kegiatan'			=> $request->nama_kegiatan
		]);

		if($insert){
			return back()->with('success','Data Berhasil di Tambahkan');
		} else {
			return back()->with('error','Data Gagal di Tambahkan');
		}
	}

	public function ubahKegiatan(Request $request)
	{
		$insert = Kegiatan::where('id', '=', $request->id_kegiatan)->update([
			'kode_kegiatan'			=> $request->kode_kegiatan,
			'nama_kegiatan'			=> $request->nama_kegiatan
		]);

		if($insert){
			return back()->with('success','Data Berhasil di Ubah');
		} else {
			return back()->with('error','Data Gagal di Ubah');
		}
	}

	public function hapusKegiatan($id)
	{
		$insert = Kegiatan::where('id', '=', $id)->delete();

		if($insert){
			return back()->with('success','Data Berhasil di Hapus');
		} else {
			return back()->with('error','Data Gagal di Hapus');
		}
	}
}
