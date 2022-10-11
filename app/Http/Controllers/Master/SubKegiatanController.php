<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Program;
use App\Kegiatan;
use App\SubKegiatan;

class SubKegiatanController extends Controller
{
    public function index($id){
    	$kegiatan = Kegiatan::where('id', $id)->first();
		$data = SubKegiatan::where('id_kegiatan', $id)->get();

		return view('pages.admin.master.subkegiatan.list_subkegiatan', compact('data', 'kegiatan'));
		// dd($segment);
	}

	public function simpanSubKegiatan(Request $request)
	{

		$kegiatan = Kegiatan::where('id', $request->id_kegiatan)->value('id_program');
		$id = Program::where('id', $kegiatan)->value('id_skpd');

		$insert = SubKegiatan::insert([
			'id_skpd'				=> $id,
			'id_kegiatan'			=> $request->id_kegiatan,
			'kode_sub_keg'			=> $request->kode_subkegiatan,
			'nama_sub_keg'			=> $request->nama_subkegiatan,
			'target_sub_keg_1'		=> 0,
			'target_sub_keg_2'		=> 0,
			'target_sub_keg_3'		=> 0,
			'target_sub_keg_4'		=> 0,
			'target_sub_keg_5'		=> 0,
			'target_sub_keg_6'		=> 0,
			'pagu_indikatif_sub_keg_1' => 0,
			'pagu_indikatif_sub_keg_2' => 0,
			'pagu_indikatif_sub_keg_3' => 0,
			'pagu_indikatif_sub_keg_4' => 0,
			'pagu_indikatif_sub_keg_5' => 0,
			'pagu_indikatif_sub_keg_6' => 0,
			'prakiraan_maju_sub_keg_1' => 0,
			'prakiraan_maju_sub_keg_2' => 0,
			'prakiraan_maju_sub_keg_3' => 0,
			'prakiraan_maju_sub_keg_4' => 0,
			'prakiraan_maju_sub_keg_5' => 0,
			'prakiraan_maju_sub_keg_6' => 0,
		]);

		if($insert){
			return back()->with('success','Data Berhasil di Tambahkan');
		} else {
			return back()->with('error','Data Gagal di Tambahkan');
		}
	}

	public function ubahSubKegiatan(Request $request)
	{
		$insert = SubKegiatan::where('id', '=', $request->id_subkegiatan)->update([
			'kode_sub_keg'			=> $request->kode_subkegiatan,
			'nama_sub_keg'			=> $request->nama_subkegiatan
		]);

		if($insert){
			return back()->with('success','Data Berhasil di Ubah');
		} else {
			return back()->with('error','Data Gagal di Ubah');
		}
	}

	public function hapusSubKegiatan($id)
	{
		$insert = SubKegiatan::where('id', '=', $id)->delete();

		if($insert){
			return back()->with('success','Data Berhasil di Hapus');
		} else {
			return back()->with('error','Data Gagal di Hapus');
		}
	}
}
