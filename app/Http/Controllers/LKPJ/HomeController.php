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
            return view('lkpj-fix.pages.home.home', compact('data'));

        } else if(Auth::user()->hak_akses == 'OPD') {
            $data = Program::where('id_skpd', Auth::user()->id_skpd)->get();
            return view('lkpj-fix.pages.home.program', compact('data')); 

        } else if (Auth::user()->hak_akses == 'BIDANG') {
            // $data = Skpd::rightJoin('users', 'skpd.id', 'users.id_skpd')->where('skpd.id_bidang', Auth::user()->id)->get();
            $data = User::join('skpd', 'users.id_skpd', 'skpd.id')->where('skpd.id_bidang', Auth::user()->id)->get();
            return view('lkpj-fix.pages.home.home', compact('data'));
        }
    }

    public function verif($id)
    {
        $data = User::where('id_skpd', $id)->update([
            'sts_lkpj' => 1
        ]);

        if ($data) {
            return back()->with('success','Skpd berhasil di Verifikasi');
        } else {
            return back()->with('error','Skpd gagal di Verifikasi');
        }
    }

    public function program($id_skpd)
    {
        $data = Program::where('id_skpd', $id_skpd)->get();

        return view('lkpj-fix.pages.home.program', compact('data'));
    }

    public function kegiatan($id_program)
    {
        $data = Kegiatan::where('id_program', $id_program)->get();

        return view('lkpj-fix.pages.home.kegiatan', compact('data'));
    }

    public function sub_kegiatan($id_kegiatan)
    {
        $data = SubKegiatan::where('id_kegiatan', $id_kegiatan)->get();

        return view('lkpj-fix.pages.home.sub_kegiatan', compact('data'));
    }
}
