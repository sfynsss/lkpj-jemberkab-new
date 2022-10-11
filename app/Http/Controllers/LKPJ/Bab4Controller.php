<?php

namespace App\Http\Controllers\LKPJ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\PenutupOPD;
use App\Skpd;

class Bab4Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function penutupOpd(Request $request)
    {
        if(Auth::user()->hak_akses == 'ADMIN') {
            $data = Skpd::all();
        } else if (Auth::user()->hak_akses == 'OPD') {
            $data = Skpd::where('id', Auth::user()->id_skpd)->get();
        } else if (Auth::user()->hak_akses == 'BIDANG') {
            $data = Skpd::where('id_bidang', Auth::user()->id)->get();
        }
        
        return view('lkpj-fix.pages.bab_4.penutup_opd', compact('data'));
    }

    public function penutup($id)
    {
        $data = PenutupOPD::with('Skpd')->where('id_skpd', $id)->first();
        
        return view('lkpj-fix.pages.bab_4.penutup', compact('data'));
    }

    public function updatePenutupOPD(Request $request)
    {
        $update = PenutupOPD::where('id', $request->id_penutup)->update([
            'penutup'   => $request->penutup
        ]);

        return redirect()->route('penutup-opd')->with('success', 'Berita Penutup LKPJ OPD berhasil diperbaharui');
    }

    public function penutupAdmin()
    {
        $data = PenutupOPD::with('Skpd')->where('id_skpd', 999)->first();
        return view('lkpj-fix.pages.bab_4.penutup_admin', compact('data'));
    }

    public function updatePenutupAdmin(Request $request)
    {
        $update = PenutupOPD::where('id', $request->id_penutup)->update([
            'penutup'   => $request->penutup
        ]);

        return redirect()->route('penutup-admin')->with('success', 'Berita Penutup LKPJ Admin berhasil diperbaharui');
    }
}
