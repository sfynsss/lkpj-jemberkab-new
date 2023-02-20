<?php

namespace App\Http\Controllers\LKPJ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Skpd;
use App\Urusan;
use App\BidangUrusan;
use App\Program;
use App\Kegiatan;
use App\SubKegiatan;
use App\User;
use App\IndikatorDetail;
use App\IndikatorUtamaDetail;
use App\PenutupOPD;
use App\StsUpdate;
use PDF;
use App\Exports\LkpjLaporanBab2;
use Maatwebsite\Excel\Facades\Excel;

class LaporanOPDController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function opd($tipe)
    {
        $sts = "";
        if(Auth::user()->hak_akses == 'ADMIN') {
            $data = Skpd::all();
        } else if (Auth::user()->hak_akses == 'OPD') {
            $data = Skpd::where('id', Auth::user()->id_skpd)->get();
            if(Auth::user()->sts_lkpj == 1) {
                $sts = 1;    
            } else {
                $sts = 0;
            }
        } else if(Auth::user()->hak_akses == 'BIDANG') {
            $data = Skpd::where('id_bidang', Auth::user()->id)->get();
        }
        $judul = $tipe;
        
        return view('lkpj-fix.pages.laporan_opd.opd', compact('data', 'judul', 'sts'));
    }
    
    public function kataPengantar($id)
    {
        $tmp_id;
        if(Auth::user()->hak_akses == 'ADMIN' || Auth::user()->hak_akses == 'BIDANG') {
            $tmp_id = $id;
        } else if (Auth::user()->hak_akses == 'OPD') {
            $tmp_id = Auth::user()->id_skpd;
        } 

        $data = User::with('Skpd')->where('id_skpd', $tmp_id)->first();
        $pdf = PDF::setPaper(array(0,0,609.4488,935.433), 'portrait')->loadview('lkpj-fix.pages.laporan_opd.kata_pengantar', compact('data'));
        return $pdf->stream();
    }
    
    public function bab1($id)
    {
        $tmp_id;
        if(Auth::user()->hak_akses == 'ADMIN' || Auth::user()->hak_akses == 'BIDANG') {
            $tmp_id = $id;
        } else if (Auth::user()->hak_akses == 'OPD') {
            $tmp_id = Auth::user()->id_skpd;
        }

        $data = Skpd::where('id', $tmp_id)->first();
        $data_urusan = IndikatorDetail::select('id_urusan')->where('id_skpd', $tmp_id)->groupBy('id_urusan')->get();
        $indikator = IndikatorDetail::where('id_skpd', $tmp_id)->get();

        $sub_kegiatan = SubKegiatan::where('id_skpd', $tmp_id)->where('unggulan', 1)->get();
        $id_kegiatan = SubKegiatan::where('id_skpd', $tmp_id)->where('unggulan', 1)->groupBy('id_kegiatan')->pluck('id_kegiatan');
        $kegiatan = Kegiatan::whereIn('id', $id_kegiatan)->get();
        $id_program = Kegiatan::whereIn('id', $id_kegiatan)->groupBy('id_program')->pluck('id_program');
        $program = Program::whereIn('id', $id_program)->get();

        $pdf = PDF::setPaper(array(0,0,609.4488,935.433), 'portrait')->loadview('lkpj-fix.pages.laporan_opd.bab1', compact('data', 'data_urusan', 'indikator', 'program', 'kegiatan', 'sub_kegiatan'));
        return $pdf->stream();
    }
    
    public function bab2($id)
    {
        $tmp_id;
        if(Auth::user()->hak_akses == 'ADMIN' || Auth::user()->hak_akses == 'BIDANG') {
            $tmp_id = $id;
        } else if (Auth::user()->hak_akses == 'OPD') {
            $tmp_id = Auth::user()->id_skpd;
        }

        $data = Skpd::where('id', $tmp_id)->first();
        $tmp_prog = Program::where('id_skpd', $tmp_id)->groupBy('id_bidang_urusan')->pluck('id_bidang_urusan');
        // $bidang_urusan = BidangUrusan::whereIn('id', $tmp_prog)->get();
        $tmp_bidang_urusan = BidangUrusan::whereIn('id', $tmp_prog)->groupBy('id_urusan')->pluck('id_urusan');
        $data_urusan = Urusan::whereIn('id', $tmp_bidang_urusan)->get();
        // print_r($data);
        $pdf = PDF::setPaper(array(0,0,609.4488,935.433), 'landscape')->loadview('lkpj-fix.pages.laporan_opd.bab2', compact('data', 'data_urusan'));
        return $pdf->stream();
    }

    public function bab2_total()
    {
        $data = Skpd::where('id', '>=', 61)->where('id', '<=', 73)->get();
        // $tmp_prog = Program::where('id_skpd', $tmp_id)->groupBy('id_bidang_urusan')->pluck('id_bidang_urusan');
        // // $bidang_urusan = BidangUrusan::whereIn('id', $tmp_prog)->get();
        // $tmp_bidang_urusan = BidangUrusan::whereIn('id', $tmp_prog)->groupBy('id_urusan')->pluck('id_urusan');
        // $data_urusan = Urusan::whereIn('id', $tmp_bidang_urusan)->get();
        // print_r($data);
        $pdf = PDF::setPaper(array(0,0,609.4488,935.433), 'landscape')->loadview('lkpj-fix.pages.laporan_opd.bab2_total_baru', compact('data'));
        return $pdf->stream();
    }

    public function bab2_excel()
    {
        return Excel::download(new LkpjLaporanBab2, 'Laporan Total-'.date('d_F_Y').'.xlsx');
    }
    
    public function bab3($id)
    {
        $tmp_id;
        if(Auth::user()->hak_akses == 'ADMIN' || Auth::user()->hak_akses == 'BIDANG') {
            $tmp_id = $id;
        } else if (Auth::user()->hak_akses == 'OPD') {
            $tmp_id = Auth::user()->id_skpd;
        }

        $data = Skpd::where('id', $tmp_id)->first();
        // $urusan = Urusan::whereIn('id', $tmp_bidang_urusan)->get();
        $urusan = IndikatorUtamaDetail::select('id_urusan')->where('id_skpd', $tmp_id)->groupBy('id_urusan')->get();
        $bidang = IndikatorUtamaDetail::select('id_bidang_urusan')->where('id_skpd', $tmp_id)->groupBy('id_bidang_urusan')->get();
        $indikator = IndikatorUtamaDetail::where('id_skpd', $tmp_id)->get();

        $pdf = PDF::setPaper(array(0,0,609.4488,935.433), 'potrait')->loadview('lkpj-fix.pages.laporan_opd.bab3', compact('urusan', 'data', 'indikator', 'bidang'));
        return $pdf->stream();
    }
    
    public function bab4($id)
    {
        $tmp_id;
        if(Auth::user()->hak_akses == 'ADMIN' || Auth::user()->hak_akses == 'BIDANG') {
            $tmp_id = $id;
        } else if (Auth::user()->hak_akses == 'OPD') {
            $tmp_id = Auth::user()->id_skpd;
        }

        $user = User::with('Skpd')->where('id_skpd', $tmp_id)->first();
        $data = PenutupOPD::where('id_skpd', $tmp_id)->first();

        $pdf = PDF::setPaper(array(0,0,609.4488,935.433), 'portrait')->loadview('lkpj-fix.pages.laporan_opd.bab4', compact('data', 'user'));
        return $pdf->stream();
    }
    
    public function printCover($id)
    {
        $tmp_id;
        if(Auth::user()->hak_akses == 'ADMIN' || Auth::user()->hak_akses == 'BIDANG') {
            $tmp_id = $id;
        } else if (Auth::user()->hak_akses == 'OPD') {
            $tmp_id = Auth::user()->id_skpd;
        }

        $data = Skpd::where('id', $tmp_id)->first();

        $pdf = PDF::setPaper(array(0,0,609.4488,935.433), 'portrait')
        ->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
        ->loadview('lkpj-fix.pages.laporan_opd.cover', compact('data'));
        return $pdf->stream();
    }
    
}
