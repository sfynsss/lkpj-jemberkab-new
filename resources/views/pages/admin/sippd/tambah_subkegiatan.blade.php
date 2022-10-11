@extends('layouts.app')

@section('content')

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Form Tambah Sub-Kegiatan</h4>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
            <form action="{{ route('simpan-subkegiatan') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 text-center">
                            <h3 class="text-dark font-weight-bold mb-2">Tambah Data Sub-Kegiatan</h3>
                            <h5 class="font-weight-normal mb-2">Isikan sub-kegiatan pada form berikut dengan benar :</h5>
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
                                <input type="text" class="form-control" name="id_kegiatan" value="{{ $ket_kegiatan->id }}" hidden>
                                <div class="form-group row col-lg-6 col-md-6">
                                    <label class="col-sm-4 col-form-label">Kode Sub-Kegiatan</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="kode_kegiatan" value="{{ $ket_kegiatan->kode_kegiatan }}." disabled>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" name="kode_angka" placeholder="Isi dengan digit terakhir">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group row col-12">
                                    <label class="col-sm-2 col-form-label">Nama Sub-Kegiatan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama_sub_keg" placeholder="Tulis nama sub-kegiatan">
                                        @error('nama_sub_keg')<span><code>{{ $message }}</code></span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group row col-lg-6 col-md-6">
                                    <label class="col-sm-4 col-form-label">Target</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="target_sub_keg_1" placeholder="Isikan target">
                                        @error('target_sub_keg_1')<span><code>{{ $message }}</code></span>@enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="satuan_target_sub_keg_1" placeholder="Isikan satuannya target">
                                        @error('satuan_target_sub_keg_1')<span><code>{{ $message }}</code></span>@enderror
                                    </div>
                                </div>
                                <div class="form-group row col-lg-6 col-md-6">
                                    <label class="col-sm-3 col-form-label">APBD</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="pabd_sub_keg" placeholder="Isikan jumlah APBD">
                                        @error('pabd_sub_keg')<span><code>{{ $message }}</code></span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group row col-12">
                                    <label class="col-sm-2 col-form-label">Indikator Sub-Kegiatan</label>
                                    <div class="col-sm-10">
                                        <textarea type="number" class="form-control" name="indikator_sub_keg" rows="5" placeholder="Tulis indikator / keluaran dari sub-kegiatan"></textarea>
                                        @error('indikator_sub_keg')<span><code>{{ $message }}</code></span>@enderror
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
                                        <input type="number" class="form-control" name="pagu_indikatif_sub_keg" placeholder="Isikan jumlah Pagu Anggaran">
                                        @error('pagu_indikatif_sub_keg')<span><code>{{ $message }}</code></span>@enderror
                                    </div>
                                </div>
                                <div class="form-group row col-lg-6 col-md-6">
                                    <label class="col-sm-3 col-form-label">Prakiraan Maju</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="prakiraan_maju_sub_keg" placeholder="Isikan jumlah prakiraan maju">
                                        @error('prakiraan_maju_sub_keg')<span><code>{{ $message }}</code></span>@enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-dark font-weight-bold mb-3">D. Realiasi Triwulan</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Realisasi I</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="realisasi_sub_keg_1_1" placeholder="Isikan realiasi triwulan ke 1">
                                            @error('realisasi_sub_keg_1_1')<span><code>{{ $message }}</code></span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Realisasi II</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="realisasi_sub_keg_1_2" placeholder="Isikan realiasi triwulan ke 2">
                                            @error('realisasi_sub_keg_1_2')<span><code>{{ $message }}</code></span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Realisasi III</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="realisasi_sub_keg_1_3" placeholder="Isikan realiasi triwulan ke 3">
                                            @error('realisasi_sub_keg_1_3')<span><code>{{ $message }}</code></span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Realisasi IV</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="realisasi_sub_keg_1_4" placeholder="Isikan realiasi triwulan ke 4">
                                            @error('realisasi_sub_keg_1_4')<span><code>{{ $message }}</code></span>@enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-dark font-weight-bold mb-3">E. Serapan Triwulan</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Serapan I</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="serapan_sub_keg_1_1" placeholder="Isikan serapan triwulan ke 1">
                                            @error('serapan_sub_keg_1_1')<span><code>{{ $message }}</code></span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Serapan II</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="serapan_sub_keg_1_2" placeholder="Isikan serapan triwulan ke 2">
                                            @error('serapan_sub_keg_1_2')<span><code>{{ $message }}</code></span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Serapan III</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="serapan_sub_keg_1_3" placeholder="Isikan serapan triwulan ke 3">
                                            @error('serapan_sub_keg_1_3')<span><code>{{ $message }}</code></span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Serapan IV</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="serapan_sub_keg_1_4" placeholder="Isikan serapan triwulan ke 4">
                                            @error('serapan_sub_keg_1_4')<span><code>{{ $message }}</code></span>@enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="card-body">
                            <h4 class="text-dark font-weight-bold mb-3">F. Penjelasan Capaian Kinerja Kegiatan</h4>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kinerja Triwulan I</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kinerja_sub_keg_1_1" placeholder="Tulis capaian kinerja kegiatan pada triwulan ke 1">
                                    @error('kinerja_sub_keg_1_1')<span><code>{{ $message }}</code></span>@enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kinerja Triwulan II</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kinerja_sub_keg_1_2" placeholder="Tulis capaian kinerja kegiatan pada triwulan ke 2">
                                    @error('kinerja_sub_keg_1_2')<span><code>{{ $message }}</code></span>@enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kinerja Triwulan III</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kinerja_sub_keg_1_3" placeholder="Tulis capaian kinerja kegiatan pada triwulan ke 3">
                                    @error('kinerja_sub_keg_1_3')<span><code>{{ $message }}</code></span>@enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kinerja Triwulan IV</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kinerja_sub_keg_1_4" placeholder="Tulis capaian kinerja kegiatan pada triwulan ke 4">
                                    @error('kinerja_sub_keg_1_4')<span><code>{{ $message }}</code></span>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="card-body">
                            <h4 class="text-dark font-weight-bold mb-3">G. Prioritas Pembangunan Nasional</h4>
                            <div class="row">
                                <div class="form-group row col-12">
                                    <label class="col-sm-2 col-form-label">Prioritas Pembangunan Nasional</label>
                                    <div class="col-sm-10">
                                        <textarea type="number" class="form-control" name="prioritas_nasional" rows="3" placeholder="Isikan prioritas_nasional (bila ada)"></textarea>
                                        @error('prioritas_nasional')<span><code>{{ $message }}</code></span>@enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 py-4 float-right">
                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                        <a href="{{ route('sippd-subkegiatan', $ket_kegiatan->id) }}" class="btn btn-light">Batal</a>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection