<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Skpd;
use App\Urusan;
use App\BidangUrusan;
use App\Program;
use Alert;

class ProgramController extends Controller
{
    public function index($i){
    	$skpd = Skpd::where('id', $i)->first();
    	$bidang = BidangUrusan::all();
		$data = Program::where('id_skpd', $i)->get();

		return view('pages.admin.master.program.list_program', compact('data', 'skpd', 'bidang'));
		// dd($segment);
	}

	public function simpanProgram(Request $request)
	{
		if($request->id_bidang_urusan == null || $request->kode_program == null || $request->nama_program == null){
			Alert::error('Gagal', 'Terdapat kolom yang belum diisi');
			return redirect()->route('program', $request->id_skpd);
		} else {
			$insert = Program::insert([
				'id_bidang_urusan'		=> $request->id_bidang_urusan,
				'id_skpd'				=> $request->id_skpd,
				'kode_program'			=> $request->kode_program,
				'nama_program'			=> $request->nama_program
			]);
			Alert::success('Berhasil', 'Data Proggram berhasil ditambahkan');
			return redirect()->route('program', $request->id_skpd);
		}
	}

	public function ubahProgram(Request $request)
	{
		$insert = Program::where('id', '=', $request->id_program)->update([
			'id_bidang_urusan'		=> $request->id_bidang_urusan,
			'id_skpd'				=> $request->id_skpd,
			'kode_program'			=> $request->kode_program,
			'nama_program'			=> $request->nama_program
		]);

		if($insert){
			return back()->with('success','Data Berhasil di Ubah');
		} else {
			return back()->with('error','Data Gagal di Ubah');
		}
	}

	public function hapusProgram($id)
	{
		$insert = Program::where('id', '=', $id)->delete();

		if($insert){
			return back()->with('success','Data Berhasil di Hapus');
		} else {
			return back()->with('error','Data Gagal di Hapus');
		}
	}
}
