<?php

namespace App\Http\Controllers\LKPJ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Skpd;
use App\Program;
use App\Kegiatan;
use App\SubKegiatan;
use Auth;

class Bab2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function opdPKS()
    {
        if(Auth::user()->hak_akses == 'ADMIN') {
            $data = Skpd::all();
        } else if (Auth::user()->hak_akses == 'OPD') {
            $data = Skpd::where('id', Auth::user()->id_skpd)->get();
        } else if (Auth::user()->hak_akses == 'BIDANG') {
            $data = Skpd::where('id_bidang', Auth::user()->id)->get();
        }

        return view('lkpj-fix.pages.bab_2.opd_pks', compact('data'));
    }

    public function programPKS($id)
    {
        $tmp_id;
        if(Auth::user()->hak_akses == 'ADMIN' || Auth::user()->hak_akses == 'BIDANG') {
            $tmp_id = $id;
        } else if (Auth::user()->hak_akses == 'OPD') {
            $tmp_id = Auth::user()->id_skpd;
        }
        $data = Program::where('id_skpd', $tmp_id)->get();
        $nama_skpd = Skpd::where('id', $tmp_id)->first();

        return view('lkpj-fix.pages.bab_2.program', compact('data', 'nama_skpd'));
    }

    public function updateProgram(Request $request)
    {
        $data = Program::where('id', $request->id_program)->update([
            'indikator_program'    => $request->nama_indikator
        ]);

        if($data) {
            return back()->with('success','Data Berhasil di Diubah');
        } else {
            return back()->with('error','Data Gagal di Diubah');
        }
    }

    public function kegiatanPKS($id)
    {
        $data = Kegiatan::where('id_program', $id)->get();
        $nama_program = Program::where('id', $id)->first();

        return view('lkpj-fix.pages.bab_2.kegiatan', compact('data', 'nama_program'));
    }

    public function updateKegiatan(Request $request)
    {
        $data = Kegiatan::where('id', $request->id_kegiatan)->update([
            'indikator_kegiatan'    => $request->nama_indikator
        ]);

        if($data) {
            return back()->with('success','Data Berhasil di Diubah');
        } else {
            return back()->with('error','Data Gagal di Diubah');
        }
    }

    public function subkegiatanPKS($id)
    {
        $data = SubKegiatan::where('id_kegiatan', $id)->get();

        if(count($data) > 0) {
            return view('lkpj-fix.pages.bab_2.subkegiatan', compact('data'));
        } else {
            return back()->with('error', 'Data Tidak Ditemukan');
        }
    }

    public function detail($id)
    {
        $data = SubKegiatan::where('id', $id)->get();

        return view('lkpj-fix.pages.bab_2.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $tmp_unggulan = 0;
        if($request->unggulan == 1) {
            $tmp_unggulan = $request->unggulan;
        }

        $data = SubKegiatan::where('id', $request->id)->update([
            'lokasi'        => $request->lokasi,
            'unggulan'      => $tmp_unggulan,
            'keterangan'    => $request->keterangan
        ]);

        if($data) {
            return back()->with('success','Data Berhasil di Diubah');
        } else {
            return back()->with('error','Data Gagal di Diubah');
        }
    }
}
