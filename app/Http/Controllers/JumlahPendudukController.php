<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JumlahPenduduk;
use App\Kecamatan;

class JumlahPendudukController extends Controller
{
    public function index()
    {
        $data = Kecamatan::with('JumlahPenduduk')->orderBy('kode_wilayah', 'ASC')->get();
        $tahun = ['2017', '2018', '2019', '2020', '2021', '2022', '2023', '2024', '2025', '2026'];
        return view('pages.jumlah_penduduk.index', compact('data', 'tahun'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jumlah' => 'numeric|min:0',
            'prosentase' => 'numeric|min:0',
            'luas' => 'numeric|min:0',
            'kepadatan' => 'numeric|min:0',
        ]);
 
        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            $errorMessages = implode('<br>', $errors);
            toast($errorMessages, 'error');
            return redirect()->route('jumlah-penduduk');
        }

        $data = JumlahPenduduk::findOrFail($request->id_data);
        $data->update([
            'jumlah'     => $request->jumlah,
            'prosentase' => $request->prosentase,
            'luas'       => $request->luas,
            'kepadatan'  => $request->kepadatan,
            'updated_at' => Carbon::now(),
        ]);
        toast('Data berhasil diperbaharui', 'success');
        return redirect()->route('jumlah-penduduk');
    }
}
