<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use PDF;
use Auth;
use App\Skpd;
Use App\Urusan;
Use App\BidangUrusan;
Use App\Program;
Use App\Kegiatan;
Use App\SubKegiatan;
Use App\DetSubkegiatan;
use App\Exports\LaporanTotal;
use Maatwebsite\Excel\Facades\Excel;


class LaporanController extends Controller
{
    
    //Laporan PerUrusan
    public function laporanUrusan(){
        $data = Urusan::all();
        
        return view('pages.admin.laporan.lap_urusan', compact('data'));
    }
    
    public function cetakUrusan($i){
        $urusan = Urusan::where('id', $i)->first();
        
        return view('pages.admin.laporan.cetak_urusan', compact('urusan'));
    }
    
    public function cetakLaporanUrusan($i, $tw)
    {
        $urusan = Urusan::where('id', $i)->get();
        // print_r($urusan[0]->BidangUrusan[0]->Program[0]->Skpd);
        // return view('pages.export.laporan_urusan', compact('urusan', 'tw'));   
        $pdf = PDF::loadView('pages.export.laporan_urusan', compact('urusan', 'tw')); //load view page
        return $pdf->stream('Laporan Per-Urusan.pdf'); // download pdf file
    }
    //End Of Laporan PerUrusan
    
    //Laporan Organisasi
    public function organisasiOPD(){
        if (Auth::user()->hak_akses == 'OPD') {
            $skpd = Skpd::where('id', Auth::user()->id_skpd)->get();
        } else {
            $skpd = Skpd::all();
        }
        return view('pages.admin.laporan.organisasi_opd', compact('skpd'));
    }
    
    public function laporanOrganisasi($id){
        $organisasi = Skpd::where('id', $id)->first();
        return view('pages.admin.laporan.lap_organisasi', compact('organisasi'));
    }
    
    public function cetakLaporanOrganisasi($i, $tw)
    {
        return view('pages.export.laporan_organisasi');   
    }
    //End Of Laporan Organisasi
    
    public function laporanOPD(){
        return view('pages.admin.laporan.lap_opd');
    }
    
    public function cetakOPD(){
        return view('pages.admin.laporan.cetak_opd');
    }
    
    public function laporanTotal(){
        return view('pages.admin.laporan.lap_total');
    }
    
    public function prioritasNasional(){
        return view('pages.admin.laporan.prioritas_nasional');
    }
    
    public function laporanLokasi(){
        return view('pages.admin.laporan.lap_lokasi');
    }
    
    public function cetakLokasi(){
        return view('pages.admin.laporan.cetak_lokasi');
    }
    
    public function laporanKinerja(){
        return view('pages.admin.laporan.lap_kinerja');
    }
    
    public function laporanKinerjaUrusan(){
        return view('pages.admin.laporan.lap_kinerja_urusan');
    }
    
    public function exportLaporanOPD()
    {
        // $skpd = Skpd::where('id', $i)->first();
        // $urusan = Urusan::all();
        // print_r($urusan[0]->BidangUrusan);
        // return view('pages.export.laporan-opd');   
    }
    
    public function dataUpload($id)
    {
        $skpd = Skpd::where('id', $id)->first();
        
        return view('pages.admin.laporan.upload', compact('skpd'));
    }
    
    public function cetakLaporanTotal(Request $request, $tw)
    {
        $skpd = Skpd::where('id', '>=', $request->awal)->where('id', '<=', $request->akhir)->get();
        
        $tgl_susun 		= $request->tgl_susun;
        $tgl_setuju 	= $request->tgl_setuju;
        
        $pdf = PDF::loadView('pages.export.laporan_total', compact('skpd', 'tw', 'tgl_setuju', 'tgl_susun')); //load view page
        return $pdf->download('Laporan Total.pdf'); // download pdf file
        // $tmp += 10;
        // $folder_name = 'pdf/' . now()->format('Y') . '/';
        // $path = public_path() . '/' . $folder_name;
        // \File::makeDirectory($path, $mode = 0777, true, true);

        // $pdf->save($folder_name . '/laporan_total.pdf');
        // print_r($program);
    }

    public function cetakLaporanTotalExcel(Request $request, $tw)
    {
        return Excel::download(new LaporanTotal($request->awal, $request->akhir, $request->tgl_susun, $request->tgl_setuju, $tw), 'Laporan Total-'.date('d_F_Y').'.xlsx');
    }
    
}
