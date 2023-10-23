<?php

namespace App\Http\Controllers\LKPJ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Skpd;
use App\Indikator;
use App\IndikatorDetail;
use App\Program;
use App\Kegiatan;
use App\SubKegiatan;
use App\Capaian;
use App\BidangUrusan;
use App\Urusan;
use DB;
use Auth;

class Bab1Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Indikator
    
    public function opdIndikator()
    {
        if(Auth::user()->hak_akses == 'ADMIN') {
            $data = Skpd::all();
        } else if (Auth::user()->hak_akses == 'OPD') {
            $data = Skpd::where('id', Auth::user()->skpd_id)->get();
        } else if (Auth::user()->hak_akses == 'BIDANG') {
            $data = Skpd::where('id_bidang', Auth::user()->id)->get();
        }
        
        return view('pages.bab_1.opd_indikator', compact('data'));
    }
    
    public function indexIndikator($skpd_id)
    {
        $tmp_skpd_id;

        if (Auth::user()->hak_akses == 'ADMIN' || Auth::user()->hak_akses == 'BIDANG') {
            $tmp_skpd_id = $skpd_id;
        } else if(Auth::user()->hak_akses == 'OPD') {
            $tmp_skpd_id = Auth::user()->skpd_id;
        }

        $data = IndikatorDetail::where('skpd_id', $tmp_skpd_id)->get();
        $nama_skpd = Skpd::where('id', $tmp_skpd_id)->first();
        $tmp_prog = Program::where('skpd_id', $tmp_skpd_id)->groupBy('bidang_urusan_id')->pluck('bidang_urusan_id');
        $tmp_bidang_urusan = BidangUrusan::whereIn('id', $tmp_prog)->groupBy('urusan_id')->pluck('urusan_id');
        $urusan = Urusan::whereIn('id', $tmp_bidang_urusan)->get();
        
        return view('pages.bab_1.index_indikator', compact('data', 'nama_skpd', 'urusan'));
    }
    
    public function getKegiatan($id)
    {
        $data = Kegiatan::where('program_id', $id)->get();
        
        return response()->json([
            'data' => $data
        ]);
    }
    
    public function getSubKegiatan($id)
    {
        $data = SubKegiatan::where('kegiatan_id', $id)->get();
        
        return response()->json([
            'data' => $data
        ]);
    }
    
    public function tambahIndikator(Request $request)
    {
        dd($request->urusan);
        DB::beginTransaction();
        try {
            $insert = IndikatorDetail::insert([
                'indikator'         => $request->nama_indikator,
                'skpd_id'           => $request->skpd_id,
                'urusan_id'         => $request->urusan
            ]);

            DB::commit();
            return back()->with('success','Data Berhasil di Tambahkan');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error','Data Gagal di Tambahkan');
        }
    }
    
    public function hapusIndikator($id)
    {
        DB::beginTransaction();
        try {
            $delete = IndikatorDetail::where('id', $id)->delete();
            
            DB::commit();
            return back()->with('success','Data Berhasil di Dihapus');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error','Data Gagal di Tambahkan');
        }
    }
    
    //Capaian
    
    public function opdCapaian()
    {
        if(Auth::user()->hak_akses == 'ADMIN') {
            $data = Skpd::all();
        } else if (Auth::user()->hak_akses == 'OPD') {
            $data = Skpd::where('id', Auth::user()->skpd_id)->get();
        } else if (Auth::user()->hak_akses == 'BIDANG') {
            $data = Skpd::where('id_bidang', Auth::user()->id)->get();
        }
        
        return view('pages.bab_1.opd_capaian', compact('data'));
    }
    
    public function indexCapaian($id)
    {
        $tmp_id;
        if (Auth::user()->hak_akses == 'ADMIN' || Auth::user()->hak_akses == 'BIDANG') {
            $tmp_id = $id;
        } else if(Auth::user()->hak_akses == 'OPD') {
            $tmp_id = Auth::user()->skpd_id;
        }
        $data = IndikatorDetail::where('skpd_id', $tmp_id)->get();
        $nama_skpd = Skpd::where('id', $tmp_id)->first();
        
        return view('pages.bab_1.index_capaian', compact('data', 'nama_skpd'));
    }
    
    public function getDataIndikator($urusan_id, $skpd_id)
    {
        if (Auth::user()->hak_akses == 'ADMIN') {
            $data = Indikator::where('urusan_id', $urusan_id)->where('skpd_id', $skpd_id)->get();
        } else if (Auth::user()->hak_akses == 'OPD') {
            $data = Indikator::where('urusan_id', $urusan_id)->where('skpd_id', Auth::user()->skpd_id)->get();
        }
        
        return response()->json([
            'data' => $data
        ]);
    }
    
    public function createCapaian($id)
    {
        $tmp_id;
        if(Auth::user()->hak_akses == 'ADMIN') {
            $tmp_id = $id;
        } else if (Auth::user()->hak_akses == 'OPD') {
            $tmp_id = Auth::user()->skpd_id;
        }
        $tmp_prog = Program::where('skpd_id', $tmp_id)->groupBy('bidang_urusan_id')->pluck('bidang_urusan_id');
        $tmp_bidang_urusan = BidangUrusan::whereIn('id', $tmp_prog)->groupBy('urusan_id')->pluck('urusan_id');
        $urusan = Urusan::whereIn('id', $tmp_bidang_urusan)->get();
        $skpd_id = $tmp_id;
        
        return view('pages.bab_1.create_capaian', compact('urusan', 'skpd_id'));
    }
    
    public function tambahIndikatorDetail(Request $request)
    {
        DB::beginTransaction();
        try {
            $insert = IndikatorDetail::insert([
                'id_indikator'      => $request->indikator,
                'skpd_id'           => $request->skpd_id,
                'uraian'            => $request->uraian,
                'satuan'            => $request->satuan,
                'capaian_1'         => $request->capaian_1,
                'capaian_2'         => $request->capaian_2,
                'capaian_3'         => $request->capaian_3,
                'capaian_4'         => $request->capaian_4,
                'capaian_5'         => $request->capaian_5,
                'keterangan'        => $request->keterangan
            ]);
            
            DB::commit();
            return redirect('bab1/capaian/'.$request->skpd_id)->with('success','Data Berhasil di Tambahkan');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error','Data Gagal di Tambahkan');
        }
    }
    
    public function editCapaian($id)
    {
        $data = IndikatorDetail::where('id', $id)->first();
        
        return view('pages.bab_1.edit_capaian', compact('data'));
    }
    
    public function editIndikatorDetail(Request $request)
    {
        DB::beginTransaction();
        try {
            $insert = IndikatorDetail::where('id', $request->id)->update([
                'satuan'            => $request->satuan,
                'capaian_1'         => $request->capaian_1,
                'capaian_2'         => $request->capaian_2,
                'capaian_3'         => $request->capaian_3,
                'capaian_4'         => $request->capaian_4,
                'capaian_5'         => $request->capaian_5,
                'keterangan'        => $request->keterangan
            ]);
            
            DB::commit();
            return redirect('bab1/capaian/'.$request->skpd_id)->with('success','Data Berhasil di Ubah');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error','Data Gagal di Ubah');
        }
    }
    
    public function hapusCapaian($id)
    {
        DB::beginTransaction();
        try {
            $delete = IndikatorDetail::where('id', $id)->delete();
            
            DB::commit();
            return back()->with('success','Data Berhasil di Dihapus');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error','Data Gagal di Tambahkan');
        }
    }
}
