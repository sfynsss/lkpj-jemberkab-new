<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Skpd;
use App\Program;
use App\Kegiatan;
use App\SubKegiatan;
use App\SubkegiatanInduk;
use App\SubkegiatanBulan;
use App\SubkegiatanTahun;

class ProgramUnggulanController extends Controller
{
    public function index()
    {
        $data = SubkegiatanInduk::where('skpd_id', Auth::user()->skpd_id)->get();

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
