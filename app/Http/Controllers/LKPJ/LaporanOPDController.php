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
use App\SubKegiatanInduk;
use App\SubKegiatanBulan;
use App\SubKegiatanTahun;
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
            $data = Skpd::where('id', Auth::user()->skpd_id)->get();
            if(Auth::user()->sts_lkpj == 1) {
                $sts = 1;    
            } else {
                $sts = 0;
            }
        } else if(Auth::user()->hak_akses == 'BIDANG') {
            $data = Skpd::where('id_bidang', Auth::user()->id)->get();
        }
        $judul = $tipe;
        
        return view('pages.laporan_opd.opd', compact('data', 'judul', 'sts'));
    }
    
    public function kataPengantar($id)
    {
        $tmp_id;
        if(Auth::user()->hak_akses == 'ADMIN' || Auth::user()->hak_akses == 'BIDANG') {
            $tmp_id = $id;
        } else if (Auth::user()->hak_akses == 'OPD') {
            $tmp_id = Auth::user()->skpd_id;
        } 

        $data = User::with('Skpd')->where('skpd_id', $tmp_id)->first();
        $pdf = PDF::setPaper(array(0,0,609.4488,935.433), 'portrait')->loadview('pages.laporan_opd.kata_pengantar', compact('data'));
        return $pdf->stream();
    }
    
    public function bab1($id)
    {
        $tmp_id;
        if(Auth::user()->hak_akses == 'ADMIN' || Auth::user()->hak_akses == 'BIDANG') {
            $tmp_id = $id;
        } else if (Auth::user()->hak_akses == 'OPD') {
            $tmp_id = Auth::user()->skpd_id;
        }

        $data = Skpd::where('id', $tmp_id)->first();
        $data_urusan = IndikatorDetail::select('urusan_id')->where('skpd_id', $tmp_id)->groupBy('urusan_id')->get();
        $indikator = IndikatorDetail::where('skpd_id', $tmp_id)->get();

        $sub_kegiatan = SubKegiatanInduk::where('skpd_id', $tmp_id)->where('unggulan', 1)->get();
        $kegiatan_id = SubKegiatanInduk::where('skpd_id', $tmp_id)->where('unggulan', 1)->groupBy('kegiatan_id')->pluck('kegiatan_id');
        $kegiatan = Kegiatan::whereIn('id', $kegiatan_id)->get();
        $program_id = Kegiatan::whereIn('id', $kegiatan_id)->groupBy('program_id')->pluck('program_id');
        $program = Program::whereIn('id', $program_id)->get();

        $pdf = PDF::setPaper(array(0,0,609.4488,935.433), 'portrait')->loadview('pages.laporan_opd.bab1', compact('data', 'data_urusan', 'indikator', 'program', 'kegiatan', 'sub_kegiatan'));
        return $pdf->stream();
    }
    
    public function bab2($id)
    {
        $tmp_id;
        if(Auth::user()->hak_akses == 'ADMIN' || Auth::user()->hak_akses == 'BIDANG') {
            $tmp_id = $id;
        } else if (Auth::user()->hak_akses == 'OPD') {
            $tmp_id = Auth::user()->skpd_id;
        }

        $data = Skpd::where('id', $tmp_id)->first();
        $tmp_prog = Program::where('skpd_id', $tmp_id)->groupBy('bidang_urusan_id')->pluck('bidang_urusan_id');
        // $bidang_urusan = BidangUrusan::whereIn('id', $tmp_prog)->get();
        $tmp_bidang_urusan = BidangUrusan::whereIn('id', $tmp_prog)->groupBy('urusan_id')->pluck('urusan_id');
        $data_urusan = Urusan::whereIn('id', $tmp_bidang_urusan)->get();
        // print_r($data);
        $pdf = PDF::setPaper(array(0,0,609.4488,935.433), 'landscape')->loadview('pages.laporan_opd.bab2', compact('data', 'data_urusan'));
        return $pdf->stream();
    }

    public function bab2_total()
    {
        $data = Skpd::where('id', '>=', 0)->where('id', '<=', 73)->get();
        // $tmp_prog = Program::where('skpd_id', $tmp_id)->groupBy('bidang_urusan_id')->pluck('bidang_urusan_id');
        // // $bidang_urusan = BidangUrusan::whereIn('id', $tmp_prog)->get();
        // $tmp_bidang_urusan = BidangUrusan::whereIn('id', $tmp_prog)->groupBy('urusan_id')->pluck('urusan_id');
        // $data_urusan = Urusan::whereIn('id', $tmp_bidang_urusan)->get();
        // print_r($data);
        $pdf = PDF::setPaper(array(0,0,609.4488,935.433), 'landscape')->loadview('pages.laporan_opd.bab2_total_baru', compact('data'));
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
            $tmp_id = Auth::user()->skpd_id;
        }

        $data = Skpd::where('id', $tmp_id)->first();
        // $urusan = Urusan::whereIn('id', $tmp_bidang_urusan)->get();
        $urusan = IndikatorUtamaDetail::select('urusan_id')->where('skpd_id', $tmp_id)->groupBy('urusan_id')->get();
        $bidang = IndikatorUtamaDetail::select('bidang_urusan_id')->where('skpd_id', $tmp_id)->groupBy('bidang_urusan_id')->get();
        $indikator = IndikatorUtamaDetail::where('skpd_id', $tmp_id)->get();

        $pdf = PDF::setPaper(array(0,0,609.4488,935.433), 'potrait')->loadview('pages.laporan_opd.bab3', compact('urusan', 'data', 'indikator', 'bidang'));
        return $pdf->stream();
    }
    
    public function bab4($id)
    {
        $tmp_id;
        if(Auth::user()->hak_akses == 'ADMIN' || Auth::user()->hak_akses == 'BIDANG') {
            $tmp_id = $id;
        } else if (Auth::user()->hak_akses == 'OPD') {
            $tmp_id = Auth::user()->skpd_id;
        }

        $user = User::with('Skpd')->where('skpd_id', $tmp_id)->first();
        $data = PenutupOPD::where('skpd_id', $tmp_id)->first();

        $pdf = PDF::setPaper(array(0,0,609.4488,935.433), 'portrait')->loadview('pages.laporan_opd.bab4', compact('data', 'user'));
        return $pdf->stream();
    }
    
    public function printCover($id)
    {
        $tmp_id;
        if(Auth::user()->hak_akses == 'ADMIN' || Auth::user()->hak_akses == 'BIDANG') {
            $tmp_id = $id;
        } else if (Auth::user()->hak_akses == 'OPD') {
            $tmp_id = Auth::user()->skpd_id;
        }

        $data = Skpd::where('id', $tmp_id)->first();

        $pdf = PDF::setPaper(array(0,0,609.4488,935.433), 'portrait')
        ->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
        ->loadview('pages.laporan_opd.cover', compact('data'));
        return $pdf->stream();
    }
    
}
