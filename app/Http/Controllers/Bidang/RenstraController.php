<?php

namespace App\Http\Controllers\Bidang;

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

class RenstraController extends Controller
{
    public function listSKPD(){
        $data = SKPD::where('id_bidang', Auth::user()->id)->get();
        return view('pages.bidang.renstra.list_skpd', compact('data'));
    }

    public function program($id_skpd){
        $nama = Program::join('skpd', 'program.id_skpd', 'skpd.id')->where('program.id_skpd', $id_skpd)->value('skpd.nama_skpd');
        $data = Program::where('id_skpd', '=', $id_skpd)->get();
        return view('pages.bidang.renstra.program', compact('data', 'nama'));
    }

    public function kegiatan($i){
        $nama = Kegiatan::join('program', 'kegiatan.id_program', 'program.id')->where('kegiatan.id_program', $i)->value('program.nama_program');
        $data = Kegiatan::where('id_program', $i)->get();
        return view('pages.bidang.renstra.kegiatan', compact('data', 'nama'));
    }

    public function subkegiatan($i){
        $nama = SubKegiatan::join('kegiatan', 'sub_kegiatan.id_kegiatan', 'kegiatan.id')->where('sub_kegiatan.id_kegiatan', $i)->value('kegiatan.nama_kegiatan');
        $data = SubKegiatan::join('det_subkegiatan', 'sub_kegiatan.id_det_sub_keg', 'det_subkegiatan.id')->where('sub_kegiatan.id_kegiatan', $i)->get();
        return view('pages.bidang.renstra.subkegiatan', compact('data', 'nama'));
    }

}
