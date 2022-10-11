<?php

namespace App\Http\Controllers\OPD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Program;
use App\Urusan;
use App\BidangUrusan;
use App\Skpd;

use Auth;
use Redirect;

class RPJMDOPDController extends Controller
{
    public function program(){
        $nama = Skpd::where('id', Auth::user()->id_skpd)->value('nama_skpd');
        $data = Program::where('id_skpd', '=', Auth::user()->id_skpd)->get();
        return view('pages.opd.rpjmd.program', compact('data', 'nama'));
    }
}
