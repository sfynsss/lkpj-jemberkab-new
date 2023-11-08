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
}
