<?php

namespace App\Http\Controllers\Bidang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Program;
use App\Urusan;
use App\BidangUrusan;
use App\Skpd;
use Auth;
use Redirect;

class RPJMDController extends Controller
{
    public function listSKPD(){
        $data = SKPD::where('id_bidang', Auth::user()->id)->get();
        return view('pages.bidang.rpjmd.list_skpd', compact('data'));
    }

    public function rpjm($id_skpd){
        $data = Program::where('id_skpd', '=', $id_skpd)->get();
        return view('pages.bidang.rpjmd.program', compact('data'));
    }
}
