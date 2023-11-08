<?php

namespace App\Http\Controllers\LKPJ;

use Auth;
use App\Skpd;
use App\User;
use App\Program;
use App\Kegiatan;
use App\SubKegiatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->hak_akses == 'ADMIN') {
            $data = Skpd::all();
            return view('pages.home.home', compact('data'));

        } else if(Auth::user()->hak_akses == 'OPD') {
            $data = Program::where('skpd_id', Auth::user()->skpd_id)->get();
            return view('pages.home', compact('data')); 

        } else if (Auth::user()->hak_akses == 'BIDANG') {
            // $data = Skpd::rightJoin('users', 'skpd.id', 'users.skpd_id')->where('skpd.bidang_id', Auth::user()->id)->get();
            $data = User::join('skpd', 'users.skpd_id', 'skpd.id')->where('skpd.bidang_id', Auth::user()->id)->get();
            return view('pages.home.home', compact('data'));
        }
    }

    public function verif($id)
    {
        $data = User::where('skpd_id', $id)->update([
            'sts_lkpj' => 1
        ]);

        if ($data) {
            return back()->with('success','Skpd berhasil di Verifikasi');
        } else {
            return back()->with('error','Skpd gagal di Verifikasi');
        }
    }

    public function program($skpd_id)
    {
        $data = Program::where('skpd_id', $skpd_id)->get();

        return view('pages.home.program', compact('data'));
    }

    public function kegiatan($program_id)
    {
        $data = Kegiatan::where('program_id', $program_id)->get();

        return view('pages.home.kegiatan', compact('data'));
    }

    public function sub_kegiatan($kegiatan_id)
    {
        $data = SubKegiatan::where('kegiatan_id', $kegiatan_id)->get();

        return view('pages.home.sub_kegiatan', compact('data'));
    }
}
