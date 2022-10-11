<?php

namespace App\Http\Controllers\LKPJ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Urusan;
use App\BidangUrusan;
use App\Skpd;
use App\IndikatorUtama;
use App\IndikatorUtamaDetail;
use App\Program;
use App\Kegiatan;
use App\SubKegiatan;
use Auth;
use DB;

class Bab3Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function urusan()
    {
        if(Auth::user()->hak_akses == 'ADMIN' || Auth::user()->hak_akses == 'BIDANG') {
            $data = Urusan::all();
        } else if (Auth::user()->hak_akses == 'OPD') {
            $tmp_prog = Program::where('id_skpd', Auth::user()->id_skpd)->groupBy('id_bidang_urusan')->pluck('id_bidang_urusan');
            $tmp_bidang_urusan = BidangUrusan::whereIn('id', $tmp_prog)->groupBy('id_urusan')->pluck('id_urusan');
            $data = Urusan::whereIn('id', $tmp_bidang_urusan)->get();
        }
        
        return view('lkpj-fix.pages.bab_3.opd_mastersub', compact('data'));
    }
    
    public function subUrusan($id)
    {
        $data = BidangUrusan::where('id_urusan', $id)->get();
        
        return view('lkpj-fix.pages.bab_3.opd_suburusan', compact('data'));
    }
    
    public function opdIndikatorUtama()
    {
        if(Auth::user()->hak_akses == 'ADMIN') {
            $data = Skpd::all();
        } else if (Auth::user()->hak_akses == 'OPD') {
            $data = Skpd::where('id', Auth::user()->id_skpd)->get();
        } else if (Auth::user()->hak_akses == 'BIDANG') {
            $data = Skpd::where('id_bidang', Auth::user()->id)->get();
        }
        
        return view('lkpj-fix.pages.bab_3.opd_indikatorutama', compact('data'));
    }
    
    public function opdCapaianUtama()
    {
        if(Auth::user()->hak_akses == 'ADMIN') {
            $data = Skpd::all();
        } else if (Auth::user()->hak_akses == 'OPD') {
            $data = Skpd::where('id', Auth::user()->id_skpd)->get();
        } else if (Auth::user()->hak_akses == 'BIDANG') {
            $data = Skpd::where('id_bidang', Auth::user()->id)->get();
        }

        return view('lkpj-fix.pages.bab_3.opd_capaianutama', compact('data'));
    }
    
    public function suburusanUtama()
    {
        return view('lkpj-fix.pages.bab_3.sub_urusan_utama');
    }
    
    public function suburusanMaster()
    {
        return view('lkpj-fix.pages.bab_3.sub_urusan_master');
    }
    
    public function indexIndikatorUtama($id)
    {
        $data = IndikatorUtamaDetail::where('id_skpd', $id)->get();
        $nama_skpd = Skpd::where('id', $id)->first();
        $tmp_prog = Program::where('id_skpd', $id)->groupBy('id_bidang_urusan')->pluck('id_bidang_urusan');
        $tmp_bidang_urusan = BidangUrusan::whereIn('id', $tmp_prog)->groupBy('id_urusan')->pluck('id_urusan');
        $urusan = Urusan::whereIn('id', $tmp_bidang_urusan)->get();
        
        return view('lkpj-fix.pages.bab_3.index_indikatorutama', compact('data', 'urusan', 'nama_skpd'));
    }

    public function getBidangUrusan($id_urusan)
    {
        $data = BidangUrusan::where('id_urusan', $id_urusan)->get();
        
        return response()->json([
            'data' => $data
        ]);
    }

    public function tambahIndikatorUtama(Request $request)
    {
        DB::beginTransaction();
        try {
            $insert = IndikatorUtamaDetail::insert([
                'indikator_utama'       => $request->nama_indikator,
                'id_skpd'               => $request->id_skpd,
                'id_urusan'             => $request->urusan,
                'id_bidang_urusan'      => $request->bidang_urusan
            ]);
            
            DB::commit();
            return back()->with('success','Data Berhasil di Tambahkan');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error','Data Gagal di Tambahkan');
        }
    }

    public function hapusIndikatorUtama($id)
    {
        DB::beginTransaction();
        try {
            $delete = IndikatorUtamaDetail::where('id', $id)->delete();
            
            DB::commit();
            return back()->with('success','Data Berhasil di Dihapus');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error','Data Gagal di Tambahkan');
        }
    }

    public function tambahIndikatorUtamaDetail(Request $request)
    {
        DB::beginTransaction();
        try {
            $insert = IndikatorUtamaDetail::insert([
                'indikator_utama'       => $request->indikator_utama,
                'satuan'                => $request->satuan,
                'id_skpd'               => $request->id_skpd,
                'id_urusan'             => $request->urusan,
                'id_bidang_urusan'      => $request->bidang_urusan,
                'capaian_1'             => $request->capaian_1,
                'capaian_2'             => $request->capaian_2,
                'capaian_3'             => $request->capaian_3,
                'capaian_4'             => $request->capaian_4,
                'capaian_5'             => $request->capaian_5,
                'capaian_6'             => $request->capaian_6,
                'keterangan'            => $request->keterangan
            ]);
            DB::commit();
            return redirect('bab3/capaianutama/index/'.$request->id_skpd)->with('success','Data Berhasil di Tambahkan');

        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error','Data Gagal di Tambahkan');
        }
    }
    
    public function indexCapaianUtama($id)
    {
        if(Auth::user()->hak_akses == "ADMIN" || Auth::user()->hak_akses == 'BIDANG') {
            $data = IndikatorUtamaDetail::where('id_skpd', $id)->get();
            $nama_skpd = Skpd::where('id', $id)->first();
        } else if (Auth::user()->hak_akses == 'OPD') {
            $data = IndikatorUtamaDetail::where('id_skpd', Auth::user()->id_skpd)->get();
            $nama_skpd = Skpd::where('id', Auth::user()->id_skpd)->first();
        }

        return view('lkpj-fix.pages.bab_3.index_capaianutama', compact('data', 'nama_skpd'));
    }

    public function getDataIndikatorUtama($id_urusan, $id_skpd)
    {
        if (Auth::user()->hak_akses == 'ADMIN') {
            $data = IndikatorUtama::where('id_bidang_urusan', $id_urusan)->where('id_skpd', $id_skpd)->get();
        } else if (Auth::user()->hak_akses == 'OPD') {
            $data = IndikatorUtama::where('id_bidang_urusan', $id_urusan)->where('id_skpd', Auth::user()->id_skpd)->get();
        }
        
        return response()->json([
            'data' => $data
        ]);
    }
    
    public function createCapaianUtama($id)
    {
        $nama_skpd = Skpd::where('id', $id)->first();
        $tmp_prog = Program::where('id_skpd', $id)->groupBy('id_bidang_urusan')->pluck('id_bidang_urusan');
        $tmp_bidang_urusan = BidangUrusan::whereIn('id', $tmp_prog)->groupBy('id_urusan')->pluck('id_urusan');
        $urusan = Urusan::whereIn('id', $tmp_bidang_urusan)->get();
        
        return view('lkpj-fix.pages.bab_3.create_capaianutama', compact('urusan', 'nama_skpd'));
    }
    
    public function editCapaianUtama($id)
    {
        $data = IndikatorUtamaDetail::where('id', $id)->first();

        return view('lkpj-fix.pages.bab_3.edit_capaianutama', compact('data'));
    }
    
    public function updateCapaianUtama(Request $request)
    {
        DB::beginTransaction();
        try {
            $insert = IndikatorUtamaDetail::where('id', $request->id)->update([
                'satuan'            => $request->satuan,
                'capaian_1'         => $request->capaian_1,
                'capaian_2'         => $request->capaian_2,
                'capaian_3'         => $request->capaian_3,
                'capaian_4'         => $request->capaian_4,
                'capaian_5'         => $request->capaian_5,
                'keterangan'        => $request->keterangan
            ]);
            
            DB::commit();
            return redirect('bab3/capaianutama/index/'.$request->id_skpd)->with('success','Data Berhasil di Ubah');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error','Data Gagal di Ubah');
        }
    }
}
