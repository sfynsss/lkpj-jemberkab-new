<?php

namespace App\Http\Controllers\LKPJ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Skpd;
use App\Program;
use App\Kegiatan;
use App\SubKegiatan;
use App\SubkegiatanInduk;
use App\SubkegiatanBulan;
use App\SubkegiatanTahun;
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
            $data = Skpd::where('id', Auth::user()->skpd_id)->get();
        } else if (Auth::user()->hak_akses == 'BIDANG') {
            $data = Skpd::where('bidang_id', Auth::user()->id)->get();
        }

        return view('pages.bab_2.opd_pks', compact('data'));
    }

    public function programPKS($id)
    {
        $tmp_id;
        if(Auth::user()->hak_akses == 'ADMIN' || Auth::user()->hak_akses == 'BIDANG') {
            $tmp_id = $id;
        } else if (Auth::user()->hak_akses == 'OPD') {
            $tmp_id = Auth::user()->skpd_id;
        }
        $data = Program::where('skpd_id', $tmp_id)->get();
        $nama_skpd = Skpd::where('id', $tmp_id)->first();

        return view('pages.bab_2.program', compact('data', 'nama_skpd'));
    }

    public function updateProgram(Request $request)
    {
        $data = Program::where('id', $request->program_id)->update([
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
        $data = Kegiatan::where('program_id', $id)->get();
        $nama_program = Program::where('id', $id)->first();

        return view('pages.bab_2.kegiatan', compact('data', 'nama_program'));
    }

    public function updateKegiatan(Request $request)
    {
        $data = Kegiatan::where('id', $request->kegiatan_id)->update([
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
        $data = SubkegiatanInduk::where('kegiatan_id', $id)->get();

        if(count($data) > 0) {
            return view('pages.bab_2.subkegiatan', compact('data'));
        } else {
            return back()->with('error', 'Data Tidak Ditemukan');
        }
    }

    public function detail($id)
    {
        $data = SubKegiatanInduk::where('id', $id)->get();

        return view('pages.bab_2.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $tmp_unggulan = 0;
        if($request->unggulan == 1) {
            $tmp_unggulan = $request->unggulan;
        }

        $data = SubKegiatan::find($request->id);
        $update = $data->update([
            'lokasi'        => $request->lokasi,
            'unggulan'      => $tmp_unggulan,
            'keterangan'    => $request->keterangan
        ]);

        return redirect()->route('subkegiatan-pks', $data->kegiatan_id)->with('success', 'Dat Sub-Kegiatan berhasil diubah');

    }
}
