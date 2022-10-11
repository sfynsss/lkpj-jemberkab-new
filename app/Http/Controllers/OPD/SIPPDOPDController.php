<?php

namespace App\Http\Controllers\OPD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Program;
use App\SubKegiatan;
use App\DetSubkegiatan;
use App\Kegiatan;
use App\Urusan;
use App\BidangUrusan;
use App\Skpd;
use Auth;
use Redirect;

class SIPPDOPDController extends Controller
{
    public function program(){
        $nama = Skpd::where('id', Auth::user()->id_skpd)->value('nama_skpd');
        $data = Program::join('users', 'program.id', 'users.id_skpd')->where('program.id_skpd', '=', Auth::user()->id_skpd)->get();
        return view('pages.opd.sippd.program', compact('data', 'nama'));
    }

    public function kegiatan($i){
        $nama = Kegiatan::join('program', 'kegiatan.id_program', 'program.id')->where('kegiatan.id_program', $i)->value('program.nama_program');
        $data = Kegiatan::where('id_program', $i)->get();
        return view('pages.opd.sippd.kegiatan', compact('data', 'nama'));
    }

    public function subkegiatan($i){
        $nama = SubKegiatan::join('kegiatan', 'sub_kegiatan.id_kegiatan', 'kegiatan.id')->where('sub_kegiatan.id_kegiatan', $i)->value('kegiatan.nama_kegiatan');
        $data = SubKegiatan::join('det_subkegiatan', 'sub_kegiatan.id_det_sub_keg', 'det_subkegiatan.id')->where('sub_kegiatan.id_kegiatan', $i)->get();
        return view('pages.opd.sippd.subkegiatan', compact('data', 'nama'));
    }

    public function edit($id) {
        $ket_kegiatan = SubKegiatan::join('kegiatan', 'sub_kegiatan.id_kegiatan', 'kegiatan.id')->where('sub_kegiatan.id', $id)->first();
        $ket_program = Program::where('id', $ket_kegiatan->id_program)->first();
        $ket_skpd = Skpd::where('id', $ket_program->id_skpd)->first();
        $sub_kegiatan = SubKegiatan::where('id', $id)->first();
        //$det_subkegiatan = DetSubkegiatan::where('id_sub_keg', $id)->where('tahun', date('Y'))->first();
        $det_subkegiatan = DetSubkegiatan::join('sub_kegiatan', 'det_subkegiatan.id', 'sub_kegiatan.id_det_sub_keg')
        ->where('sub_kegiatan.id_det_sub_keg', $id)
        ->where('tahun', date('Y'))
        ->first();
        return view('pages.opd.sippd.ubah_subkegiatan', compact('ket_kegiatan', 'ket_program', 'ket_skpd', 'sub_kegiatan', 'det_subkegiatan'));
    }
}
