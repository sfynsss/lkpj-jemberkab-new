<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BidangUrusan;
use App\Urusan;

class BidangController extends Controller
{
    public function index(){
		$data = BidangUrusan::all();
		$urusan = Urusan::all();

		return view('pages.admin.master.bidang.list_bidang', compact('data', 'urusan'));
		// dd($segment);
	}

	public function simpanBidang(Request $request)
	{
		$insert = BidangUrusan::insert([
			'id_urusan'				=> $request->id_urusan,
			'kode_bidang_urusan'	=> $request->kode_bidang_urusan,
			'nama_bidang_urusan'	=> $request->nama_bidang_urusan
		]);

		if($insert){
			return back()->with('success','Data Berhasil di Tambahkan');
		} else {
			return back()->with('error','Data Gagal di Tambahkan');
		}
	}

	public function ubahBidang(Request $request)
	{
		$insert = BidangUrusan::where('id', '=', $request->id_bidang_urusan)->update([
			'id_urusan'				=> $request->id_urusan,
			'kode_bidang_urusan'	=> $request->kode_bidang_urusan,
			'nama_bidang_urusan'	=> $request->nama_bidang_urusan
		]);

		if($insert){
			return back()->with('success','Data Berhasil di Ubah');
		} else {
			return back()->with('error','Data Gagal di Ubah');
		}
	}

	public function hapusBidang($id)
	{
		$insert = BidangUrusan::where('id', '=', $id)->delete();

		if($insert){
			return back()->with('success','Data Berhasil di Hapus');
		} else {
			return back()->with('error','Data Gagal di Hapus');
		}
	}
}
