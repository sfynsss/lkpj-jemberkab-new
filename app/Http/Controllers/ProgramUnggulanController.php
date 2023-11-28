<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CapaianPelaksanaanExport;
use App\SubkegiatanInduk;
use App\SubkegiatanTahun;
use App\SubkegiatanBulan;
use App\BidangUrusan;
use App\Kegiatan;
use App\Program;
use App\Skpd;
use App\Urusan;
use Carbon\Carbon;
use Alert;
use Auth;

class ProgramUnggulanController extends Controller
{
    public function index()
    {
        $data = SubkegiatanInduk::where('skpd_id', Auth::user()->skpd_id)->get();

        if(count($data) > 0) {
            return view('pages.program_unggulan.index', compact('data'));
        } else {
            return back()->with('error', 'Data Tidak Ditemukan');
        }
    }

    public function show($id)
    {
        $tahun = date('Y');
        $data = SubKegiatanInduk::with('Kegiatan.Program')->findOrFail($id);
        $data_tahun = SubKegiatanTahun::where('subkegiatan_id', $data->id)->where('tahun', $tahun)->first();
        $data_bulan = SubKegiatanBulan::where('subkegiatan_id', $data->id)->where('tahun', $tahun)->get();
        return view('pages.program_unggulan.show', compact('data', 'data_tahun', 'data_bulan', 'tahun'));
    }

    public function update(Request $request)
    {
        $data = SubKegiatanInduk::findOrFail($request->id_subkegiatan);
        $data->update([
            'unggulan'      => $request->unggulan,
            'lokasi'        => $request->lokasi,
            'keterangan'    => $request->keterangan,
            'updated_at'    => Carbon::now(),
        ]);
        Alert::success('Berhasil', 'Data berhasil diperbaharui');
        return redirect()->route('program-unggulan');
    }

    public function export()
    {
        $tahun = date('Y');
        $opd = Skpd::findOrFail(Auth::user()->skpd_id);
        $data = SubkegiatanInduk::where('skpd_id', Auth::user()->skpd_id)->get();
        return Excel::download(new CapaianPelaksanaanExport($data, $tahun, $opd), time().'-LKPJ-Capaian-Pelaksanaan-'.$opd->singkatan_skpd.'.xlsx');
    }
}
