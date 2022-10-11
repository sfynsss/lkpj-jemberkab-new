@extends('layouts.app')

@section('content')

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Form Ubah Sub-Kegiatan</h4>
</div>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
            <form action="{{ route('sippd-subkegiatan-bidang-update', $sub_kegiatan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 text-center">
                            <h3 class="text-dark font-weight-bold mb-2">Ubah Data Sub-Kegiatan</h3>
                            <h5 class="font-weight-normal mb-2">Perbaharui data sub-kegiatan pada form berikut dengan benar :</h5>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-dark font-weight-bold">A. Ringkasan Kegiatan </h4>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama SKPD</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ $ket_skpd->nama_skpd }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Program</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ $ket_program->nama_program }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Kegiatan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ $ket_kegiatan->nama_kegiatan }}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="card-body">
                            <h4 class="text-dark font-weight-bold mb-3">B. Data Sub-Kegiatan</h4>
                            <div class="row">
                                <input type="text" class="form-control" name="id" value="{{ $sub_kegiatan->id }}" hidden>
                                <input type="text" class="form-control" name="id_kegiatan" value="{{ $ket_kegiatan->id }}" hidden>
                                <div class="form-group row col-lg-6 col-md-6">
                                    <label class="col-sm-4 col-form-label">Kode Sub-Kegiatan</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="kode_sub_keg" value="{{ $sub_kegiatan->kode_sub_keg }}" disabled="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group row col-12">
                                    <label class="col-sm-2 col-form-label">Nama Sub-Kegiatan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama_sub_keg" value="{{ $sub_kegiatan->nama_sub_keg }}" disabled="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group row col-lg-6 col-md-6">
                                    <label class="col-sm-4 col-form-label">Target</label>
                                    @if(Auth::user()->hak_akses == 'ADMIN')
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="target_sub_keg_1" value="{{ $sub_kegiatan->target_sub_keg_1 }}" placeholder="Isikan target dan satuannya (contoh : 12 Bulan)">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="satuan_target_sub_keg_1" value="{{ $sub_kegiatan->satuan_target_sub_keg_1 }}" placeholder="Isikan target dan satuannya (contoh : 12 Bulan)">
                                    </div>
                                    @else
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="target_sub_keg_1" value="{{ $sub_kegiatan->target_sub_keg_1 }}" placeholder="Isikan target dan satuannya (contoh : 12 Bulan)" disabled>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="satuan_target_sub_keg_1" value="{{ $sub_kegiatan->satuan_target_sub_keg_1 }}" placeholder="Isikan target dan satuannya (contoh : 12 Bulan)" disabled>
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group row col-lg-6 col-md-6">
                                    <label class="col-sm-3 col-form-label">APBD</label>
                                    <div class="col-sm-9">
                                        @if(Auth::user()->hak_akses == 'ADMIN')
                                        <input type="number" class="form-control" name="papbd_sub_keg" value="{{ $sub_kegiatan->papbd_sub_keg }}" placeholder="Isikan jumlah APBD">
                                        @else
                                        <input type="number" class="form-control" name="papbd_sub_keg" value="{{ $sub_kegiatan->papbd_sub_keg }}" placeholder="Isikan jumlah APBD" disabled>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group row col-12">
                                    <label class="col-lg-2 col-form-label">Indikator Sub-Kegiatan</label>
                                    <div class="col-lg-10">
                                        <textarea type="number" class="form-control" name="indikator_sub_keg" rows="5" placeholder="Tulis indikator / keluaran dari sub-kegiatan">{{ $sub_kegiatan->indikator_sub_keg }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group row col-12">
                                    <div class="col-lg-2 col-form-label">
                                        <label>Pelaksanaan pada :</label>
                                    </div>
                                    <div class="col-lg-10">
                                        <select class="form-control input-fixed" name="triwulan">
                                            <option value=1>Triwulan I</option>
                                            <option value=2>Triwulan II</option>
                                            <option value=3>Triwulan III</option>
                                            <option value=4>Triwulan IV</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="card-body">
                            <h4 class="text-dark font-weight-bold mb-3">C. Pagu & Indikator</h4>
                            <div class="row">
                                <div class="form-group row col-lg-6 col-md-6">
                                    <label class="col-sm-4 col-form-label">Pagu Anggaran</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" name="pagu_indikatif_sub_keg1" value="{{ $sub_kegiatan->pagu_indikatif_sub_keg_1 }}" placeholder="Isikan jumlah Pagu Anggaran">
                                    </div>
                                </div>
                                <div class="form-group row col-lg-6 col-md-6">
                                    <label class="col-sm-3 col-form-label">Prakiraan Maju</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="prakiraan_maju_sub_keg1" value="{{ $sub_kegiatan->prakiraan_maju_sub_keg_1 }}" placeholder="Isikan jumlah prakiraan maju">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-dark font-weight-bold mb-3">D. Kinerja Triwulan</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kinerja I</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="realisasi_sub_keg_1_1" value="{{ isset($det_subkegiatan->realisasi_sub_keg_1_1) ? $det_subkegiatan->realisasi_sub_keg_1_1 : '' }}" placeholder="Isikan kinerja triwulan ke 1">
                                            @error('realisasi_sub_keg_1_1')<span><code>{{ $message }}</code></span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kinerja II</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="realisasi_sub_keg_1_2" value="{{ isset($det_subkegiatan->realisasi_sub_keg_1_2) ? $det_subkegiatan->realisasi_sub_keg_1_2 : '' }}" placeholder="Isikan kinerja triwulan ke 2">
                                            @error('realisasi_sub_keg_1_2')<span><code>{{ $message }}</code></span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kinerja III</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="realisasi_sub_keg_1_3" value="{{ isset($det_subkegiatan->realisasi_sub_keg_1_3) ? $det_subkegiatan->realisasi_sub_keg_1_3 : '' }}" placeholder="Isikan kinerja triwulan ke 3">
                                            @error('realisasi_sub_keg_1_3')<span><code>{{ $message }}</code></span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kinerja IV</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="realisasi_sub_keg_1_4" value="{{ isset($det_subkegiatan->realisasi_sub_keg_1_4) ? $det_subkegiatan->realisasi_sub_keg_1_4 : '' }}" placeholder="Isikan kinerja triwulan ke 4">
                                            @error('realisasi_sub_keg_1_4')<span><code>{{ $message }}</code></span>@enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-dark font-weight-bold mb-3">E. Anggaran Triwulan</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Anggaran I</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="serapan_sub_keg_1_1" value="{{ isset($det_subkegiatan->serapan_sub_keg_1_1) ? $det_subkegiatan->serapan_sub_keg_1_1 : '' }}" placeholder="Isikan serapan triwulan ke 1">
                                            @error('serapan_sub_keg_1_1')<span><code>{{ $message }}</code></span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Anggaran II</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="serapan_sub_keg_1_2" value="{{ isset($det_subkegiatan->serapan_sub_keg_1_2) ? $det_subkegiatan->serapan_sub_keg_1_2 : '' }}" placeholder="Isikan serapan triwulan ke 2">
                                            @error('serapan_sub_keg_1_2')<span><code>{{ $message }}</code></span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Anggaran III</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="serapan_sub_keg_1_3" value="{{ isset($det_subkegiatan->serapan_sub_keg_1_3) ? $det_subkegiatan->serapan_sub_keg_1_3 : '' }}" placeholder="Isikan serapan triwulan ke 3">
                                            @error('serapan_sub_keg_1_3')<span><code>{{ $message }}</code></span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Anggaran IV</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="serapan_sub_keg_1_4" value="{{ isset($det_subkegiatan->serapan_sub_keg_1_4) ? $det_subkegiatan->serapan_sub_keg_1_4 : '' }}" placeholder="Isikan serapan triwulan ke 4">
                                            @error('serapan_sub_keg_1_4')<span><code>{{ $message }}</code></span>@enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="card-body">
                            <h4 class="text-dark font-weight-bold mb-3">F. Penjelasan Masalan dan Solusi</h4>
                            <div class="row">
                                <div class="form-group row col-6">
                                    <label class="col-sm-4 col-form-label">Masalah Triwulan I</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="masalah_sub_keg_1_1" value="{{ isset($det_subkegiatan->masalah_sub_keg_1_1) ? $det_subkegiatan->masalah_sub_keg_1_1 : '' }}" placeholder="Tulis masalah pada triwulan ke 1">
                                        @error('masalah_sub_keg_1_1')<span><code>{{ $message }}</code></span>@enderror
                                    </div>
                                </div>
                                <div class="form-group row col-6">
                                    <label class="col-sm-4 col-form-label">Solusi Triwulan I</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="solusi_sub_keg_1_1" value="{{ isset($det_subkegiatan->solusi_sub_keg_1_1) ? $det_subkegiatan->solusi_sub_keg_1_1 : '' }}" placeholder="Tulis solusi pada triwulan ke 1">
                                        @error('solusi_sub_keg_1_1')<span><code>{{ $message }}</code></span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group row col-6">
                                    <label class="col-sm-4 col-form-label">Masalah Triwulan II</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="masalah_sub_keg_1_2" value="{{ isset($det_subkegiatan->masalah_sub_keg_1_2) ? $det_subkegiatan->masalah_sub_keg_1_2 : '' }}" placeholder="Tulis masalah pada triwulan ke 2">
                                        @error('masalah_sub_keg_1_2')<span><code>{{ $message }}</code></span>@enderror
                                    </div>
                                </div>
                                <div class="form-group row col-6">
                                    <label class="col-sm-4 col-form-label">Solusi Triwulan II</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="solusi_sub_keg_1_2" value="{{ isset($det_subkegiatan->solusi_sub_keg_1_2) ? $det_subkegiatan->solusi_sub_keg_1_2 : '' }}" placeholder="Tulis solusi pada triwulan ke 2">
                                        @error('solusi_sub_keg_1_2')<span><code>{{ $message }}</code></span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group row col-6">
                                    <label class="col-sm-4 col-form-label">Masalah Triwulan III</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="masalah_sub_keg_1_3" value="{{ isset($det_subkegiatan->masalah_sub_keg_1_3) ? $det_subkegiatan->masalah_sub_keg_1_3 : '' }}" placeholder="Tulis masalah pada triwulan ke 3">
                                        @error('masalah_sub_keg_1_3')<span><code>{{ $message }}</code></span>@enderror
                                    </div>
                                </div>
                                <div class="form-group row col-6">
                                    <label class="col-sm-4 col-form-label">Solusi Triwulan III</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="solusi_sub_keg_1_3" value="{{ isset($det_subkegiatan->solusi_sub_keg_1_3) ? $det_subkegiatan->solusi_sub_keg_1_3 : '' }}" placeholder="Tulis solusi pada triwulan ke 3">
                                        @error('solusi_sub_keg_1_3')<span><code>{{ $message }}</code></span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group row col-6">
                                    <label class="col-sm-4 col-form-label">Masalah Triwulan IV</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="masalah_sub_keg_1_4" value="{{ isset($det_subkegiatan->masalah_sub_keg_1_4) ? $det_subkegiatan->masalah_sub_keg_1_4 : '' }}" placeholder="Tulis masalah pada triwulan ke 4">
                                        @error('masalah_sub_keg_1_4')<span><code>{{ $message }}</code></span>@enderror
                                    </div>
                                </div>
                                <div class="form-group row col-6">
                                    <label class="col-sm-4 col-form-label">Solusi Triwulan IV</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="solusi_sub_keg_1_4" value="{{ isset($det_subkegiatan->solusi_sub_keg_1_4) ? $det_subkegiatan->solusi_sub_keg_1_4 : '' }}" placeholder="Tulis solusi pada triwulan ke 4">
                                        @error('solusi_sub_keg_1_4')<span><code>{{ $message }}</code></span>@enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="card mt-2">
                        <div class="card-body">
                            <h4 class="text-dark font-weight-bold mb-3">G. Prioritas Pembangunan Nasional</h4>
                            <div class="row">
                                <div class="form-group row col-12">
                                    <label class="col-sm-2 col-form-label">Prioritas Pembangunan Nasional</label>
                                    <div class="col-sm-10">
                                        <textarea type="number" class="form-control" name="prioritas_nasional" rows="2" placeholder="Isikan prioritas_nasional (bila ada)">{{ $sub_kegiatan->prioritas_nasional }}</textarea>
                                        @error('prioritas_nasional')<span><code>{{ $message }}</code></span>@enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="mt-2 py-4 float-right">
                        <button type="submit" class="btn btn-primary mr-2" disabled>Simpan</button>
                        <a href="{{ url()->previous() }}" class="btn btn-light">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>

@endsection