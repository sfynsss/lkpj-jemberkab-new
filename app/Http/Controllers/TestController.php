<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubKegiatan;
use App\TestUpdateModel;
use App\Exports\ExportTotalExcel;
use App\Skpd;
use App\Urusan;
use App\Misi;
use App\Tujuan;
use App\SasaranBaru;
use App\Program;
use Excel;

class TestController extends Controller
{
    public function index()
    {
        $skpd = Skpd::all();
        return view('test4', compact('skpd'));
    }

    public function index2()
    {
        $skpd = Skpd::limit(1)->get();
        $urusan = Urusan::with('BidangUrusan', 'BidangUrusan.Program', 'BidangUrusan.Program.Kegiatan', 'BidangUrusan.Program.Kegiatan.SubKegiatan')->orderBy('id', 'ASC')->get();
        $sasaran = SasaranBaru::all();
        return view('test2', compact('skpd', 'urusan', 'sasaran'));
    }

    public function cobaSasaran()
    {
        // $data = Program::with('Sasaran')->where('id_sasaran', '!=', 0)->orderBy('id_sasaran', 'ASC')->get();
        $data = SasaranBaru::with('Program', 'Program.Skpd')->orderBy('id', 'ASC')->get();
        return view('test', compact('data'));
    }

    public function testingTotal()
    {
        return Excel::download(new ExportTotalExcel, 'Data_Total.xlsx');
    }
}
