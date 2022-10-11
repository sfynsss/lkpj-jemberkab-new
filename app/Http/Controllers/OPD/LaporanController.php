<?php

namespace App\Http\Controllers\OPD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use PDF;
use App\FileUpload;
use App\Skpd;
use App\Urusan;
use App\BidangUrusan;
use App\Program;
use App\Predikat;
Use Alert;

class LaporanController extends Controller
{
	public function index()
	{
		return view('pages.opd.laporan.upload');
	}
	
	public function store(Request $request)
	{
		$name = $request->file('file_upload')->getClientOriginalName();
		
		$upload = $request->file('file_upload')->storeAs(
			'public/file_upload/'.Auth::user()->Skpd->nama_skpd, $name
		);
		
		if ($upload) {
			$insert = FileUpload::insert([
				'id_skpd'	=> Auth::user()->id_skpd,
				'nama_file'	=> $name
			]);
			
			if ($insert) {
				return back()->with('success', 'Upload File Berhasil !!!');
			} else {
				return back()->with('error', 'Upload File Gagal !!!');
			}
		} else {
			return back()->with('error', 'Upload File Gagal !!!');
		}
	}    
	
	public function laporanKonsistensi(){
		$organisasi = Skpd::where('id', Auth::user()->id_skpd)->first();
		return view('pages.opd.laporan.lap_konsistensi', compact('organisasi'));
	}
	
	public function cetakLaporanKonsistensi(Request $request, $i, $tw)
	{
		if(Auth::user()->hak_akses != "OPD") {
			$urusan = Urusan::all();
			for ($i=0; $i < count($urusan); $i++) { 
				for ($j=0; $j < count($urusan[$i]->BidangUrusan); $j++){
					for ($k=0; $k < count($urusan[$i]->BidangUrusan[$j]->Program); $k++) {
						// print_r($urusan[$i]->BidangUrusan[$j]->Program[$k]->id_skpd."<br>");
						if ($urusan[$i]->BidangUrusan[$j]->Program[$k]->id_skpd == Auth::user()->id_skpd) {
							$tmp = $urusan[$i];
							// print_r($urusan[$i]."<br>");
						}
					}
				}
				
			}
			
			$data_urusan 	= Urusan::where('id', $tmp->id)->get();
			$tgl_susun 		= $request->tgl_susun;
			$tgl_setuju 	= $request->tgl_setuju;
			
			$pdf = PDF::loadView('pages.export.laporan_konsistensi', compact('data_urusan', 'tw', 'tgl_setuju', 'tgl_susun')); //load view page
			return $pdf->download('Laporan Konsistensi '.Auth::user()->Skpd->nama_skpd.'.pdf'); // download pdf file
		} else {
			$tahun = $request->cookie('tahun_aktif');;
			$cek = Predikat::where('id_skpd', Auth::user()->id_skpd)
			->where('tahun_predikat', $tahun)
			->where('triwulan_predikat', $tw)
			->where('tindak_lanjut_triwulan', '!=', 'null')
			->where('tindak_lanjut_rkpd', '!=', 'null')
			->get();
			
			if(count($cek) > 0) {
				// $urusan = Urusan::all();
				// for ($i=0; $i < count($urusan); $i++) { 
				// 	for ($j=0; $j < count($urusan[$i]->BidangUrusan); $j++){
				// 		for ($k=0; $k < count($urusan[$i]->BidangUrusan[$j]->Program); $k++) {
				// 			// print_r($urusan[$i]->BidangUrusan[$j]->Program[$k]->id_skpd."<br>");
				// 			if ($urusan[$i]->BidangUrusan[$j]->Program[$k]->id_skpd == Auth::user()->id_skpd) {
				// 				$tmp = $urusan[$i];
				// 				// print_r($urusan[$i]."<br>");
				// 			}
				// 		}
				// 	}
				// }
				
				// $data_urusan 	= Urusan::where('id', $tmp->id)->get();
				$tgl_susun 		= $request->tgl_susun;
				$tgl_setuju 	= $request->tgl_setuju;

				$tmp_prog = Program::where('id_skpd', Auth::user()->id_skpd)->groupBy('id_bidang_urusan')->pluck('id_bidang_urusan');
				// $bidang_urusan = BidangUrusan::whereIn('id', $tmp_prog)->get();
				$tmp_bidang_urusan = BidangUrusan::whereIn('id', $tmp_prog)->groupBy('id_urusan')->pluck('id_urusan');
				$data_urusan = Urusan::whereIn('id', $tmp_bidang_urusan)->get();

				$pdf = PDF::loadView('pages.export.laporan_konsistensi', compact('data_urusan', 'tw', 'tgl_setuju', 'tgl_susun')); //load view page
				// return $pdf->download('Laporan Konsistensi '.Auth::user()->Skpd->nama_skpd.'.pdf'); // download pdf file
				return $pdf->stream('Laporan Konsistensi '.Auth::user()->Skpd->nama_skpd.'.pdf'); // download pdf file
			} else {
				Alert::error('Warning', 'Data Belum di Verifikasi !!!');
				return back()->with('error', 'Data Belum di Verifikasi !!!');;
			}
		}	
	}
}
