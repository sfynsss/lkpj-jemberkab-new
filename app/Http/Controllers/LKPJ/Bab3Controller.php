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
            $tmp_prog = Program::where('skpd_id', Auth::user()->skpd_id)->groupBy('bidang_urusan_id')->pluck('bidang_urusan_id');
            $tmp_bidang_urusan = BidangUrusan::whereIn('id', $tmp_prog)->groupBy('urusan_id')->pluck('urusan_id');
            $data = Urusan::whereIn('id', $tmp_bidang_urusan)->get();
        }
        
        return view('pages.bab_3.opd_mastersub', compact('data'));
    }
    
    public function subUrusan($id)
    {
        $data = BidangUrusan::where('urusan_id', $id)->get();
        
        return view('pages.bab_3.opd_suburusan', compact('data'));
    }
    
    public function opdIndikatorUtama()
    {
        if(Auth::user()->hak_akses == 'ADMIN') {
            $data = Skpd::all();
        } else if (Auth::user()->hak_akses == 'OPD') {
            $data = Skpd::where('id', Auth::user()->skpd_id)->get();
        } else if (Auth::user()->hak_akses == 'BIDANG') {
            $data = Skpd::where('bidang_id', Auth::user()->id)->get();
        }
        
        return view('pages.bab_3.opd_indikatorutama', compact('data'));
    }
    
    public function opdCapaianUtama()
    {
        if(Auth::user()->hak_akses == 'ADMIN') {
            $data = Skpd::all();
        } else if (Auth::user()->hak_akses == 'OPD') {
            $data = Skpd::where('id', Auth::user()->skpd_id)->get();
        } else if (Auth::user()->hak_akses == 'BIDANG') {
            $data = Skpd::where('bidang_id', Auth::user()->id)->get();
        }

        return view('pages.bab_3.opd_capaianutama', compact('data'));
    }
    
    public function suburusanUtama()
    {
        return view('pages.bab_3.sub_urusan_utama');
    }
    
    public function suburusanMaster()
    {
        return view('pages.bab_3.sub_urusan_master');
    }
    
    public function indexIndikatorUtama($id)
    {
        $data = IndikatorUtamaDetail::where('skpd_id', $id)->get();
        $nama_skpd = Skpd::where('id', $id)->first();
        $tmp_prog = Program::where('skpd_id', $id)->groupBy('bidang_urusan_id')->pluck('bidang_urusan_id');
        $tmp_bidang_urusan = BidangUrusan::whereIn('id', $tmp_prog)->groupBy('urusan_id')->pluck('urusan_id');
        $urusan = Urusan::whereIn('id', $tmp_bidang_urusan)->get();
        
        return view('pages.bab_3.index_indikatorutama', compact('data', 'urusan', 'nama_skpd'));
    }

    public function getBidangUrusan($urusan_id)
    {
        $data = BidangUrusan::where('urusan_id', $urusan_id)->get();
        
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
                'skpd_id'               => $request->skpd_id,
                'urusan_id'             => $request->urusan,
                'bidang_urusan_id'      => $request->bidang_urusan
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
                'skpd_id'               => $request->skpd_id,
                'urusan_id'             => $request->urusan,
                'bidang_urusan_id'      => $request->bidang_urusan,
                'capaian_1'             => $request->capaian_1,
                'capaian_2'             => $request->capaian_2,
                'capaian_3'             => $request->capaian_3,
                'capaian_4'             => $request->capaian_4,
                'capaian_5'             => $request->capaian_5,
                'capaian_6'             => $request->capaian_6,
                'keterangan'            => $request->keterangan
            ]);
            DB::commit();
            return redirect('bab3/capaianutama/index/'.$request->skpd_id)->with('success','Data Berhasil di Tambahkan');

        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error','Data Gagal di Tambahkan');
        }
    }
    
    public function indexCapaianUtama($id)
    {
        if(Auth::user()->hak_akses == "ADMIN" || Auth::user()->hak_akses == 'BIDANG') {
            $data = IndikatorUtamaDetail::where('skpd_id', $id)->get();
            $nama_skpd = Skpd::where('id', $id)->first();
        } else if (Auth::user()->hak_akses == 'OPD') {
            $data = IndikatorUtamaDetail::where('skpd_id', Auth::user()->skpd_id)->get();
            $nama_skpd = Skpd::where('id', Auth::user()->skpd_id)->first();
        }

        return view('pages.bab_3.index_capaianutama', compact('data', 'nama_skpd'));
    }

    public function getDataIndikatorUtama($urusan_id, $skpd_id)
    {
        if (Auth::user()->hak_akses == 'ADMIN') {
            $data = IndikatorUtama::where('bidang_urusan_id', $urusan_id)->where('skpd_id', $skpd_id)->get();
        } else if (Auth::user()->hak_akses == 'OPD') {
            $data = IndikatorUtama::where('bidang_urusan_id', $urusan_id)->where('skpd_id', Auth::user()->skpd_id)->get();
        }
        
        return response()->json([
            'data' => $data
        ]);
    }
    
    public function createCapaianUtama($id)
    {
        $nama_skpd = Skpd::where('id', $id)->first();
        $tmp_prog = Program::where('skpd_id', $id)->groupBy('bidang_urusan_id')->pluck('bidang_urusan_id');
        $tmp_bidang_urusan = BidangUrusan::whereIn('id', $tmp_prog)->groupBy('urusan_id')->pluck('urusan_id');
        $urusan = Urusan::whereIn('id', $tmp_bidang_urusan)->get();
        
        return view('pages.bab_3.create_capaianutama', compact('urusan', 'nama_skpd'));
    }
    
    public function editCapaianUtama($id)
    {
        $data = IndikatorUtamaDetail::where('id', $id)->first();

        return view('pages.bab_3.edit_capaianutama', compact('data'));
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
            return redirect('bab3/capaianutama/index/'.$request->skpd_id)->with('success','Data Berhasil di Ubah');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error','Data Gagal di Ubah');
        }
    }
}
