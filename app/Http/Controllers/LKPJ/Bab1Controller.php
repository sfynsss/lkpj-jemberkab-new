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
            $data = Skpd::where('id', Auth::user()->id_skpd)->get();
        } else if (Auth::user()->hak_akses == 'BIDANG') {
            $data = Skpd::where('id_bidang', Auth::user()->id)->get();
        }
        
        return view('lkpj-fix.pages.bab_1.opd_indikator', compact('data'));
    }
    
    public function indexIndikator($id_skpd)
    {
        $tmp_id_skpd;

        if (Auth::user()->hak_akses == 'ADMIN' || Auth::user()->hak_akses == 'BIDANG') {
            $tmp_id_skpd = $id_skpd;
        } else if(Auth::user()->hak_akses == 'OPD') {
            $tmp_id_skpd = Auth::user()->id_skpd;
        }

        $data = IndikatorDetail::where('id_skpd', $tmp_id_skpd)->get();
        $nama_skpd = Skpd::where('id', $tmp_id_skpd)->first();
        $tmp_prog = Program::where('id_skpd', $tmp_id_skpd)->groupBy('id_bidang_urusan')->pluck('id_bidang_urusan');
        $tmp_bidang_urusan = BidangUrusan::whereIn('id', $tmp_prog)->groupBy('id_urusan')->pluck('id_urusan');
        $urusan = Urusan::whereIn('id', $tmp_bidang_urusan)->get();
        
        return view('lkpj-fix.pages.bab_1.index_indikator', compact('data', 'nama_skpd', 'urusan'));
    }
    
    public function getKegiatan($id)
    {
        $data = Kegiatan::where('id_program', $id)->get();
        
        return response()->json([
            'data' => $data
        ]);
    }
    
    public function getSubKegiatan($id)
    {
        $data = SubKegiatan::where('id_kegiatan', $id)->get();
        
        return response()->json([
            'data' => $data
        ]);
    }
    
    public function tambahIndikator(Request $request)
    {
        DB::beginTransaction();
        try {
            $insert = IndikatorDetail::insert([
                'indikator'         => $request->nama_indikator,
                'id_skpd'           => $request->id_skpd,
                'id_urusan'         => $request->urusan
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
            $data = Skpd::where('id', Auth::user()->id_skpd)->get();
        } else if (Auth::user()->hak_akses == 'BIDANG') {
            $data = Skpd::where('id_bidang', Auth::user()->id)->get();
        }
        
        return view('lkpj-fix.pages.bab_1.opd_capaian', compact('data'));
    }
    
    public function indexCapaian($id)
    {
        $tmp_id;
        if (Auth::user()->hak_akses == 'ADMIN' || Auth::user()->hak_akses == 'BIDANG') {
            $tmp_id = $id;
        } else if(Auth::user()->hak_akses == 'OPD') {
            $tmp_id = Auth::user()->id_skpd;
        }
        $data = IndikatorDetail::where('id_skpd', $tmp_id)->get();
        $nama_skpd = Skpd::where('id', $tmp_id)->first();
        
        return view('lkpj-fix.pages.bab_1.index_capaian', compact('data', 'nama_skpd'));
    }
    
    public function getDataIndikator($id_urusan, $id_skpd)
    {
        if (Auth::user()->hak_akses == 'ADMIN') {
            $data = Indikator::where('id_urusan', $id_urusan)->where('id_skpd', $id_skpd)->get();
        } else if (Auth::user()->hak_akses == 'OPD') {
            $data = Indikator::where('id_urusan', $id_urusan)->where('id_skpd', Auth::user()->id_skpd)->get();
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
            $tmp_id = Auth::user()->id_skpd;
        }
        $tmp_prog = Program::where('id_skpd', $tmp_id)->groupBy('id_bidang_urusan')->pluck('id_bidang_urusan');
        $tmp_bidang_urusan = BidangUrusan::whereIn('id', $tmp_prog)->groupBy('id_urusan')->pluck('id_urusan');
        $urusan = Urusan::whereIn('id', $tmp_bidang_urusan)->get();
        $id_skpd = $tmp_id;
        
        return view('lkpj-fix.pages.bab_1.create_capaian', compact('urusan', 'id_skpd'));
    }
    
    public function tambahIndikatorDetail(Request $request)
    {
        DB::beginTransaction();
        try {
            $insert = IndikatorDetail::insert([
                'id_indikator'      => $request->indikator,
                'id_skpd'           => $request->id_skpd,
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
            return redirect('bab1/capaian/'.$request->id_skpd)->with('success','Data Berhasil di Tambahkan');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error','Data Gagal di Tambahkan');
        }
    }
    
    public function editCapaian($id)
    {
        $data = IndikatorDetail::where('id', $id)->first();
        
        return view('lkpj-fix.pages.bab_1.edit_capaian', compact('data'));
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
            return redirect('bab1/capaian/'.$request->id_skpd)->with('success','Data Berhasil di Ubah');
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
