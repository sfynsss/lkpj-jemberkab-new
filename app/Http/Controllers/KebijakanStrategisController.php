<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\KebijakanStrategisExport;
use App\KebijakanStrategis;
use App\Skpd;
use App\SubkegiatanInduk;
use Alert;
use Auth;

class KebijakanStrategisController extends Controller
{
    public function index()
    {
        $data = KebijakanStrategis::where('skpd_id', Auth::user()->skpd_id)->orderBy('id', 'DESC')->get();
        $subkegiatan = SubkegiatanInduk::where('skpd_id', Auth::user()->skpd_id)->orderBy('kode_subkegiatan', 'ASC')->get();
        return view('pages.kebijakan_strategis.index', compact('data', 'subkegiatan'));
    }

    public function store(Request $request)
    {
        $insert = KebijakanStrategis::insert([
            'skpd_id'        => Auth::user()->skpd_id,
            'subkegiatan_id' => $request->id_subkegiatan,
            'nama_kebijakan' => $request->nama_kebijakan,
            'dasar_hukum'    => $request->dasar_hukum,
            'penyelesaian'   => $request->penyelesaian,
        ]);
        Alert::success('Berhasil', 'Data kebijakan berhasil ditambahkan');
        return redirect()->route('kebijakan-strategis');
    }

    public function update(Request $request)
    {
        $data = KebijakanStrategis::findOrFail($request->id_kebijakan);
        $data->update([
            'nama_kebijakan' => $request->nama_kebijakan,
            'dasar_hukum'    => $request->dasar_hukum,
            'penyelesaian'   => $request->penyelesaian,
        ]);
        Alert::warning('Berhasil', 'Data kebijakan berhasil diubah');
        return redirect()->route('kebijakan-strategis');
    }

    public function delete($id)
    {
        $data = KebijakanStrategis::findOrFail($id);
        if ($data->skpd_id != Auth::user()->skpd_id) {
            Alert::error('Gagal', 'Gagal');
            return redirect()->route('kebijakan-strategis');
        } else {
            $data->delete();
            Alert::warning('Berhasil', 'Data kebijakan berhasil dihapus');
            return redirect()->route('kebijakan-strategis');
        }
    }

    public function export()
    {
        $tahun = date('Y');
        $opd = Skpd::findOrFail(Auth::user()->skpd_id);
        $data = KebijakanStrategis::where('skpd_id', Auth::user()->skpd_id)->orderBy('id', 'DESC')->get();
        return Excel::download(new KebijakanStrategisExport($data, $tahun, $opd), time().'-LKPJ-Kebijakan-Strategis-'.$opd->singkatan_skpd.'.xlsx');
    }
}
