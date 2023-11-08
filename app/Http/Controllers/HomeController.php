<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Auth;
use App\Skpd;
use App\Program;
use App\Kegiatan;
use App\SubKegiatan;
use App\User;
use Cookie;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->hak_akses == 'ADMIN') {
            $data = Skpd::all();
            return view('pages.home.home', compact('data'));

        } else if(Auth::user()->hak_akses == 'OPD') {
            $data = Program::where('skpd_id', Auth::user()->skpd_id)->get();
            return view('pages.home', compact('data')); 

        } else if (Auth::user()->hak_akses == 'BIDANG') {
            $data = User::join('skpd', 'users.skpd_id', 'skpd.id')->where('skpd.bidang_id', Auth::user()->id)->get();
            return view('pages.home.home', compact('data'));
        }
    }

    // public function updateTahunAktif($tahun)
    // {
    //     Cookie::queue('tahun_aktif', $tahun, 60 * 60 * 2);

    //     return response()->json("Berhasil", 200);
    // }
}
