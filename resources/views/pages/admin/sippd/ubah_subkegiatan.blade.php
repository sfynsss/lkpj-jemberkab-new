@extends('layouts.app')

@section('content')

<div class="page-inner">
    <div class="row">
        <div class="col-12">
            <div class="row align-items-center">
                <div class="col">
                    <h4 class="page-title">Form Ubah Sub-Kegiatan</h4>
                </div>
                {{-- <div class="col-auto">
                    <div class="form-group form-group-default">
                        <label>Pilih Periode</label>
                        <select class="form-control" id="periode_inputan">
                            <option value="2022" selected>Tahun 2022</option>
                            <option value="2021">Tahun 2021</option>
                        </select>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('sippd-simpan', $sub_kegiatan->id) }}" method="POST" enctype="multipart/form-data">
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
                                        <input type="text" class="form-control" name="id_skpd" value="{{ Auth::user()->id_skpd }}" hidden>
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
                                            @php
                                                $tahun_aktif = substr(Cookie::get('tahun_aktif'), 3);
                                                if ($tahun_aktif == 1) {
                                                $papbd = $sub_kegiatan->papbd_sub_keg_1;
                                                $target = $sub_kegiatan->target_sub_keg_1;
                                                $satuan = $sub_kegiatan->satuan_target_sub_keg_1;
                                                $pagu = $sub_kegiatan->pagu_indikatif_sub_keg_1;
                                                $prakiraan_maju = $sub_kegiatan->prakiraan_maju_sub_keg_1;
                                                $realisasi1 = $sub_kegiatan->realisasi_sub_keg_1_1;
                                                $realisasi2 = $sub_kegiatan->realisasi_sub_keg_1_2;
                                                $realisasi3 = $sub_kegiatan->realisasi_sub_keg_1_3;
                                                $realisasi4 = $sub_kegiatan->realisasi_sub_keg_1_4;
                                                $serapan1 = $sub_kegiatan->serapan_sub_keg_1_1;
                                                $serapan2 = $sub_kegiatan->serapan_sub_keg_1_2;
                                                $serapan3 = $sub_kegiatan->serapan_sub_keg_1_3;
                                                $serapan4 = $sub_kegiatan->serapan_sub_keg_1_4;
                                                $masalah1 = $sub_kegiatan->masalah_sub_keg_1_1;
                                                $masalah2 = $sub_kegiatan->masalah_sub_keg_1_2;
                                                $masalah3 = $sub_kegiatan->masalah_sub_keg_1_3;
                                                $masalah4 = $sub_kegiatan->masalah_sub_keg_1_4;
                                                $solusi1 = $sub_kegiatan->solusi_sub_keg_1_1;
                                                $solusi2 = $sub_kegiatan->solusi_sub_keg_1_2;
                                                $solusi3 = $sub_kegiatan->solusi_sub_keg_1_3;
                                                $solusi4 = $sub_kegiatan->solusi_sub_keg_1_4;
                                                }
                                                elseif ($tahun_aktif == 2) {
                                                $papbd = $sub_kegiatan->papbd_sub_keg_2;
                                                $target = $sub_kegiatan->target_sub_keg_2;
                                                $satuan = $sub_kegiatan->satuan_target_sub_keg_2;
                                                $pagu = $sub_kegiatan->pagu_indikatif_sub_keg_2;
                                                $prakiraan_maju = $sub_kegiatan->prakiraan_maju_sub_keg_2;
                                                $realisasi1 = $sub_kegiatan->realisasi_sub_keg_2_1;
                                                $realisasi2 = $sub_kegiatan->realisasi_sub_keg_2_2;
                                                $realisasi3 = $sub_kegiatan->realisasi_sub_keg_2_3;
                                                $realisasi4 = $sub_kegiatan->realisasi_sub_keg_2_4;
                                                $serapan1 = $sub_kegiatan->serapan_sub_keg_2_1;
                                                $serapan2 = $sub_kegiatan->serapan_sub_keg_2_2;
                                                $serapan3 = $sub_kegiatan->serapan_sub_keg_2_3;
                                                $serapan4 = $sub_kegiatan->serapan_sub_keg_2_4;
                                                $masalah1 = $sub_kegiatan->masalah_sub_keg_2_1;
                                                $masalah2 = $sub_kegiatan->masalah_sub_keg_2_2;
                                                $masalah3 = $sub_kegiatan->masalah_sub_keg_2_3;
                                                $masalah4 = $sub_kegiatan->masalah_sub_keg_2_4;
                                                $solusi1 = $sub_kegiatan->solusi_sub_keg_2_1;
                                                $solusi2 = $sub_kegiatan->solusi_sub_keg_2_2;
                                                $solusi3 = $sub_kegiatan->solusi_sub_keg_2_3;
                                                $solusi4 = $sub_kegiatan->solusi_sub_keg_2_4;
                                                }
                                                elseif ($tahun_aktif == 3) {
                                                $papbd = $sub_kegiatan->papbd_sub_keg_3;
                                                $target = $sub_kegiatan->target_sub_keg_3;
                                                $satuan = $sub_kegiatan->satuan_target_sub_keg_3;
                                                $pagu = $sub_kegiatan->pagu_indikatif_sub_keg_3;
                                                $prakiraan_maju = $sub_kegiatan->prakiraan_maju_sub_keg_3;
                                                $realisasi1 = $sub_kegiatan->realisasi_sub_keg_3_1;
                                                $realisasi2 = $sub_kegiatan->realisasi_sub_keg_3_2;
                                                $realisasi3 = $sub_kegiatan->realisasi_sub_keg_3_3;
                                                $realisasi4 = $sub_kegiatan->realisasi_sub_keg_3_4;
                                                $serapan1 = $sub_kegiatan->serapan_sub_keg_3_1;
                                                $serapan2 = $sub_kegiatan->serapan_sub_keg_3_2;
                                                $serapan3 = $sub_kegiatan->serapan_sub_keg_3_3;
                                                $serapan4 = $sub_kegiatan->serapan_sub_keg_3_4;
                                                $masalah1 = $sub_kegiatan->masalah_sub_keg_3_1;
                                                $masalah2 = $sub_kegiatan->masalah_sub_keg_3_2;
                                                $masalah3 = $sub_kegiatan->masalah_sub_keg_3_3;
                                                $masalah4 = $sub_kegiatan->masalah_sub_keg_3_4;
                                                $solusi1 = $sub_kegiatan->solusi_sub_keg_3_1;
                                                $solusi2 = $sub_kegiatan->solusi_sub_keg_3_2;
                                                $solusi3 = $sub_kegiatan->solusi_sub_keg_3_3;
                                                $solusi4 = $sub_kegiatan->solusi_sub_keg_3_4;
                                                }
                                                elseif ($tahun_aktif == 4) {
                                                $papbd = $sub_kegiatan->papbd_sub_keg_4;
                                                $target = $sub_kegiatan->target_sub_keg_4;
                                                $satuan = $sub_kegiatan->satuan_target_sub_keg_4;
                                                $pagu = $sub_kegiatan->pagu_indikatif_sub_keg_4;
                                                $prakiraan_maju = $sub_kegiatan->prakiraan_maju_sub_keg_4;
                                                $realisasi1 = $sub_kegiatan->realisasi_sub_keg_4_1;
                                                $realisasi2 = $sub_kegiatan->realisasi_sub_keg_4_2;
                                                $realisasi3 = $sub_kegiatan->realisasi_sub_keg_4_3;
                                                $realisasi4 = $sub_kegiatan->realisasi_sub_keg_4_4;
                                                $serapan1 = $sub_kegiatan->serapan_sub_keg_4_1;
                                                $serapan2 = $sub_kegiatan->serapan_sub_keg_4_2;
                                                $serapan3 = $sub_kegiatan->serapan_sub_keg_4_3;
                                                $serapan4 = $sub_kegiatan->serapan_sub_keg_4_4;
                                                $masalah1 = $sub_kegiatan->masalah_sub_keg_4_1;
                                                $masalah2 = $sub_kegiatan->masalah_sub_keg_4_2;
                                                $masalah3 = $sub_kegiatan->masalah_sub_keg_4_3;
                                                $masalah4 = $sub_kegiatan->masalah_sub_keg_4_4;
                                                $solusi1 = $sub_kegiatan->solusi_sub_keg_4_1;
                                                $solusi2 = $sub_kegiatan->solusi_sub_keg_4_2;
                                                $solusi3 = $sub_kegiatan->solusi_sub_keg_4_3;
                                                $solusi4 = $sub_kegiatan->solusi_sub_keg_4_4;
                                                }
                                                elseif ($tahun_aktif == 5) {
                                                $papbd = $sub_kegiatan->papbd_sub_keg_5;
                                                $target = $sub_kegiatan->target_sub_keg_5;
                                                $satuan = $sub_kegiatan->satuan_target_sub_keg_5;
                                                $pagu = $sub_kegiatan->pagu_indikatif_sub_keg_5;
                                                $prakiraan_maju = $sub_kegiatan->prakiraan_maju_sub_keg_5;
                                                $realisasi1 = $sub_kegiatan->realisasi_sub_keg_5_1;
                                                $realisasi2 = $sub_kegiatan->realisasi_sub_keg_5_2;
                                                $realisasi3 = $sub_kegiatan->realisasi_sub_keg_5_3;
                                                $realisasi4 = $sub_kegiatan->realisasi_sub_keg_5_4;
                                                $serapan1 = $sub_kegiatan->serapan_sub_keg_5_1;
                                                $serapan2 = $sub_kegiatan->serapan_sub_keg_5_2;
                                                $serapan3 = $sub_kegiatan->serapan_sub_keg_5_3;
                                                $serapan4 = $sub_kegiatan->serapan_sub_keg_5_4;
                                                $masalah1 = $sub_kegiatan->masalah_sub_keg_5_1;
                                                $masalah2 = $sub_kegiatan->masalah_sub_keg_5_2;
                                                $masalah3 = $sub_kegiatan->masalah_sub_keg_5_3;
                                                $masalah4 = $sub_kegiatan->masalah_sub_keg_5_4;
                                                $solusi1 = $sub_kegiatan->solusi_sub_keg_5_1;
                                                $solusi2 = $sub_kegiatan->solusi_sub_keg_5_2;
                                                $solusi3 = $sub_kegiatan->solusi_sub_keg_5_3;
                                                $solusi4 = $sub_kegiatan->solusi_sub_keg_5_4;
                                                }
                                                elseif ($tahun_aktif == 6) {
                                                $papbd = $sub_kegiatan->papbd_sub_keg_6;
                                                $target = $sub_kegiatan->target_sub_keg_6;
                                                $satuan = $sub_kegiatan->satuan_target_sub_keg_6;
                                                $pagu = $sub_kegiatan->pagu_indikatif_sub_keg_6;
                                                $prakiraan_maju = $sub_kegiatan->prakiraan_maju_sub_keg_6;
                                                $realisasi1 = $sub_kegiatan->realisasi_sub_keg_6_1;
                                                $realisasi2 = $sub_kegiatan->realisasi_sub_keg_6_2;
                                                $realisasi3 = $sub_kegiatan->realisasi_sub_keg_6_3;
                                                $realisasi4 = $sub_kegiatan->realisasi_sub_keg_6_4;
                                                $serapan1 = $sub_kegiatan->serapan_sub_keg_6_1;
                                                $serapan2 = $sub_kegiatan->serapan_sub_keg_6_2;
                                                $serapan3 = $sub_kegiatan->serapan_sub_keg_6_3;
                                                $serapan4 = $sub_kegiatan->serapan_sub_keg_6_4;
                                                $masalah1 = $sub_kegiatan->masalah_sub_keg_6_1;
                                                $masalah2 = $sub_kegiatan->masalah_sub_keg_6_2;
                                                $masalah3 = $sub_kegiatan->masalah_sub_keg_6_3;
                                                $masalah4 = $sub_kegiatan->masalah_sub_keg_6_4;
                                                $solusi1 = $sub_kegiatan->solusi_sub_keg_6_1;
                                                $solusi2 = $sub_kegiatan->solusi_sub_keg_6_2;
                                                $solusi3 = $sub_kegiatan->solusi_sub_keg_6_3;
                                                $solusi4 = $sub_kegiatan->solusi_sub_keg_6_4;
                                                }
                                            @endphp
                                            <input type="text" name="tahun_aktif" hidden value="{{ $tahun_aktif }}">
                                            @if(Auth::user()->hak_akses == 'ADMIN')
                                            <div class="col-sm-4">
                                                <input type="number" class="form-control" id="x_target_sub_keg" name="target_sub_keg_2" value="{{ $target }}" placeholder="Isikan target dan satuannya (contoh : 12 Bulan)">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="x_satuan_target_sub_keg" name="satuan_target_sub_keg_2" value="{{ $satuan }}" placeholder="Isikan target dan satuannya (contoh : 12 Bulan)">
                                            </div>
                                            @else
                                            <div class="col-sm-4">
                                                <input type="number" class="form-control" id="x_target_sub_keg" name="target_sub_keg_2" value="{{ $target }}" placeholder="Isikan target dan satuannya (contoh : 12 Bulan)">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="x_satuan_target_sub_keg" name="satuan_target_sub_keg_2" value="{{ $satuan }}" placeholder="Isikan target dan satuannya (contoh : 12 Bulan)">
                                            </div>
                                            @endif 
                                        </div>
                                        <div class="form-group row col-lg-6 col-md-6">
                                            <label class="col-sm-3 col-form-label">APBD</label>
                                            <div class="col-sm-9">
                                                @if(Auth::user()->hak_akses == 'ADMIN')
                                                <input type="number" class="form-control" id="x_papbd_sub_keg" name="papbd_sub_keg" value="{{ $papbd }}" placeholder="Isikan jumlah APBD">
                                                @else
                                                <input type="number" class="form-control" id="x_papbd_sub_keg" name="papbd_sub_keg" value="{{ $papbd }}" placeholder="Isikan jumlah APBD">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group row col-12">
                                            <label class="col-sm-2 col-form-label">Indikator Sub-Kegiatan</label>
                                            <div class="col-sm-10">
                                                <textarea type="number" class="form-control" id="x_indikator_sub_keg" name="indikator_sub_keg" rows="5" placeholder="Tulis indikator / keluaran dari sub-kegiatan">{{ $sub_kegiatan->indikator_sub_keg }}</textarea>
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
                                            <label class="col-sm-4 col-form-label">Pagu Anggaran Relatif</label>
                                            <div class="col-sm-8">
                                                @if(Auth::user()->hak_akses == 'ADMIN')
                                                <input type="number" class="form-control" id="x_pagu_indikatif_sub_keg" name="pagu_indikatif_sub_keg_2" value="{{ $pagu }}" placeholder="Isikan jumlah Pagu Anggaran">
                                                @else
                                                <input type="number" class="form-control" id="x_pagu_indikatif_sub_keg" name="pagu_indikatif_sub_keg_2" value="{{ $pagu }}" readonly placeholder="Isikan jumlah Pagu Anggaran">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row col-lg-6 col-md-6">
                                            <label class="col-sm-3 col-form-label">Prakiraan Maju</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" id="x_prakiraan_maju_sub_keg" name="prakiraan_maju_sub_keg_2" value="{{ $prakiraan_maju }}" placeholder="Isikan jumlah prakiraan maju">
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
                                                    <input type="text" class="form-control" id="x_realisasi_sub_keg_1" name="realisasi_sub_keg_2_1" value="{{ $realisasi1 }}" placeholder="Isikan kinerja triwulan ke 1">
                                                    @error('realisasi_sub_keg_2_1')<span><code>{{ $message }}</code></span>@enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Kinerja II</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="x_realisasi_sub_keg_2" name="realisasi_sub_keg_2_2" value="{{ $realisasi2 }}" placeholder="Isikan kinerja triwulan ke 2">
                                                    @error('realisasi_sub_keg_2_2')<span><code>{{ $message }}</code></span>@enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Kinerja III</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="x_realisasi_sub_keg_3" name="realisasi_sub_keg_2_3" value="{{ $realisasi3 }}" placeholder="Isikan kinerja triwulan ke 3">
                                                    @error('realisasi_sub_keg_2_3')<span><code>{{ $message }}</code></span>@enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Kinerja IV</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="x_realisasi_sub_keg_4" name="realisasi_sub_keg_2_4" value="{{ $realisasi4 }}" placeholder="Isikan kinerja triwulan ke 4">
                                                    @error('realisasi_sub_keg_2_4')<span><code>{{ $message }}</code></span>@enderror
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
                                                    <input type="number" class="form-control" id="x_serapan_sub_keg_1" name="serapan_sub_keg_2_1" value="{{ $serapan1 }}" placeholder="Isikan serapan triwulan ke 1">
                                                    @error('serapan_sub_keg_2_1')<span><code>{{ $message }}</code></span>@enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Anggaran II</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" id="x_serapan_sub_keg_2" name="serapan_sub_keg_2_2" value="{{ $serapan2 }}" placeholder="Isikan serapan triwulan ke 2">
                                                    @error('serapan_sub_keg_2_2')<span><code>{{ $message }}</code></span>@enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Anggaran III</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" id="x_serapan_sub_keg_3" name="serapan_sub_keg_2_3" value="{{ $serapan3 }}" placeholder="Isikan serapan triwulan ke 3">
                                                    @error('serapan_sub_keg_2_3')<span><code>{{ $message }}</code></span>@enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Anggaran IV</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" id="x_serapan_sub_keg_4" name="serapan_sub_keg_2_4" value="{{ $serapan4 }}" placeholder="Isikan serapan triwulan ke 4">
                                                    @error('serapan_sub_keg_2_4')<span><code>{{ $message }}</code></span>@enderror
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
                                                <input type="text" class="form-control" id="x_masalah_sub_keg_1" name="masalah_sub_keg_2_1" value="{{ $masalah1 }}" placeholder="Tulis masalah pada triwulan ke 1">
                                                @error('masalah_sub_keg_2_1')<span><code>{{ $message }}</code></span>@enderror
                                            </div>
                                        </div>
                                        <div class="form-group row col-6">
                                            <label class="col-sm-4 col-form-label">Solusi Triwulan I</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="x_solusi_sub_keg_1" name="solusi_sub_keg_2_1" value="{{ $solusi1 }}" placeholder="Tulis solusi pada triwulan ke 1">
                                                @error('solusi_sub_keg_2_1')<span><code>{{ $message }}</code></span>@enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group row col-6">
                                            <label class="col-sm-4 col-form-label">Masalah Triwulan II</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="x_masalah_sub_keg_2" name="masalah_sub_keg_2_2" value="{{ $masalah2 }}" placeholder="Tulis masalah pada triwulan ke 2">
                                                @error('masalah_sub_keg_2_2')<span><code>{{ $message }}</code></span>@enderror
                                            </div>
                                        </div>
                                        <div class="form-group row col-6">
                                            <label class="col-sm-4 col-form-label">Solusi Triwulan II</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="x_solusi_sub_keg_2" name="solusi_sub_keg_2_2" value="{{ $solusi2 }}" placeholder="Tulis solusi pada triwulan ke 2">
                                                @error('solusi_sub_keg_2_2')<span><code>{{ $message }}</code></span>@enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group row col-6">
                                            <label class="col-sm-4 col-form-label">Masalah Triwulan III</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="x_masalah_sub_keg_3" name="masalah_sub_keg_2_3" value="{{ $masalah3 }}" placeholder="Tulis masalah pada triwulan ke 3">
                                                @error('masalah_sub_keg_2_3')<span><code>{{ $message }}</code></span>@enderror
                                            </div>
                                        </div>
                                        <div class="form-group row col-6">
                                            <label class="col-sm-4 col-form-label">Solusi Triwulan III</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="x_solusi_sub_keg_3" name="solusi_sub_keg_2_3" value="{{ $solusi3 }}" placeholder="Tulis solusi pada triwulan ke 3">
                                                @error('solusi_sub_keg_2_3')<span><code>{{ $message }}</code></span>@enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group row col-6">
                                            <label class="col-sm-4 col-form-label">Masalah Triwulan IV</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="x_masalah_sub_keg_4" name="masalah_sub_keg_2_4" value="{{ $masalah4 }}" placeholder="Tulis masalah pada triwulan ke 4">
                                                @error('masalah_sub_keg_2_4')<span><code>{{ $message }}</code></span>@enderror
                                            </div>
                                        </div>
                                        <div class="form-group row col-6">
                                            <label class="col-sm-4 col-form-label">Solusi Triwulan IV</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="x_solusi_sub_keg_4" name="solusi_sub_keg_2_4" value="{{ $solusi4 }}" placeholder="Tulis solusi pada triwulan ke 4">
                                                @error('solusi_sub_keg_2_4')<span><code>{{ $message }}</code></span>@enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 py-4 float-right">
                                <button type="submit" id="x_btn_simpan" class="btn btn-primary mr-2">Simpan</button>
                                <a href="{{ url()->previous() }}" class="btn btn-light">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    //     document.getElementById('periode_inputan').addEventListener('change', function() {
        
        
        // });
        // var tahun = '{{ Cookie::get('tahun_aktif') }}';
        
        // $(document).ready(function () {
            //     if (tahun == 2021) {
                //             document.getElementById('x_target_sub_keg').disabled = true;
                //             document.getElementById('x_satuan_target_sub_keg').disabled = true;
                //             document.getElementById('x_papbd_sub_keg').disabled = true;
                //             document.getElementById('x_indikator_sub_keg').disabled = true;            
                //             document.getElementById('x_pagu_indikatif_sub_keg').disabled = true;
                //             document.getElementById('x_pagu_indikatif_sub_keg').value = {!! json_encode($sub_kegiatan->pagu_indikatif_sub_keg_1) !!};
                //             document.getElementById('x_prakiraan_maju_sub_keg').disabled = true;
                //             document.getElementById('x_prakiraan_maju_sub_keg').value = {!! json_encode($sub_kegiatan->prakiraan_maju_sub_keg_1) !!};
                
                
                //             document.getElementById('x_masalah_sub_keg_1').disabled = true;
                //             document.getElementById('x_masalah_sub_keg_2').disabled = true;
                //             document.getElementById('x_masalah_sub_keg_3').disabled = true;
                //             document.getElementById('x_masalah_sub_keg_4').disabled = true;
                //             document.getElementById('x_masalah_sub_keg_1').value = {!! json_encode($sub_kegiatan->masalah_sub_keg_1_1) !!};
                //             document.getElementById('x_masalah_sub_keg_2').value = {!! json_encode($sub_kegiatan->masalah_sub_keg_1_2) !!};
                //             document.getElementById('x_masalah_sub_keg_3').value = {!! json_encode($sub_kegiatan->masalah_sub_keg_1_3) !!};
                //             document.getElementById('x_masalah_sub_keg_4').value = {!! json_encode($sub_kegiatan->masalah_sub_keg_1_4) !!};
                
                //             document.getElementById('x_solusi_sub_keg_1').disabled = true;
                //             document.getElementById('x_solusi_sub_keg_2').disabled = true;
                //             document.getElementById('x_solusi_sub_keg_3').disabled = true;
                //             document.getElementById('x_solusi_sub_keg_4').disabled = true;
                //             document.getElementById('x_solusi_sub_keg_1').value = {!! json_encode($sub_kegiatan->solusi_sub_keg_1_1) !!};
                //             document.getElementById('x_solusi_sub_keg_2').value = {!! json_encode($sub_kegiatan->solusi_sub_keg_1_2) !!};
                //             document.getElementById('x_solusi_sub_keg_3').value = {!! json_encode($sub_kegiatan->solusi_sub_keg_1_3) !!};
                //             document.getElementById('x_solusi_sub_keg_4').value = {!! json_encode($sub_kegiatan->solusi_sub_keg_1_4) !!};
                
                //             document.getElementById('x_realisasi_sub_keg_1').disabled = true;
                //             document.getElementById('x_realisasi_sub_keg_2').disabled = true;
                //             document.getElementById('x_realisasi_sub_keg_3').disabled = true;
                //             document.getElementById('x_realisasi_sub_keg_4').disabled = true;
                //             document.getElementById('x_realisasi_sub_keg_1').value = {!! json_encode($sub_kegiatan->realisasi_sub_keg_1_1) !!};
                //             document.getElementById('x_realisasi_sub_keg_2').value = {!! json_encode($sub_kegiatan->realisasi_sub_keg_1_2) !!};
                //             document.getElementById('x_realisasi_sub_keg_3').value = {!! json_encode($sub_kegiatan->realisasi_sub_keg_1_3) !!};
                //             document.getElementById('x_realisasi_sub_keg_4').value = {!! json_encode($sub_kegiatan->realisasi_sub_keg_1_4) !!};
                
                
                //             document.getElementById('x_serapan_sub_keg_1').disabled = true;
                //             document.getElementById('x_serapan_sub_keg_2').disabled = true;
                //             document.getElementById('x_serapan_sub_keg_3').disabled = true;
                //             document.getElementById('x_serapan_sub_keg_4').disabled = true;
                //             document.getElementById('x_serapan_sub_keg_1').value = {!! json_encode($sub_kegiatan->serapan_sub_keg_1_1) !!};
                //             document.getElementById('x_serapan_sub_keg_2').value = {!! json_encode($sub_kegiatan->serapan_sub_keg_1_2) !!};
                //             document.getElementById('x_serapan_sub_keg_3').value = {!! json_encode($sub_kegiatan->serapan_sub_keg_1_3) !!};
                //             document.getElementById('x_serapan_sub_keg_4').value = {!! json_encode($sub_kegiatan->serapan_sub_keg_1_4) !!};
                
                //             document.getElementById('x_btn_simpan').style.display = "none";
                
                //             alert('Melihat Data Periode '+tahun);
                //         } else {
                    //             document.getElementById('x_target_sub_keg').disabled = false;
                    //             document.getElementById('x_satuan_target_sub_keg').disabled = false;
                    //             document.getElementById('x_papbd_sub_keg').disabled = false;
                    //             document.getElementById('x_indikator_sub_keg').disabled = false;            
                    //             document.getElementById('x_pagu_indikatif_sub_keg').disabled = false;
                    //             document.getElementById('x_pagu_indikatif_sub_keg').value = {!! json_encode($sub_kegiatan->pagu_indikatif_sub_keg_2) !!};
                    //             document.getElementById('x_prakiraan_maju_sub_keg').disabled = false;
                    //             document.getElementById('x_prakiraan_maju_sub_keg').value = {!! json_encode($sub_kegiatan->prakiraan_maju_sub_keg_2) !!};
                    
                    //             document.getElementById('x_masalah_sub_keg_1').disabled = false;
                    //             document.getElementById('x_masalah_sub_keg_2').disabled = false;
                    //             document.getElementById('x_masalah_sub_keg_3').disabled = false;
                    //             document.getElementById('x_masalah_sub_keg_4').disabled = false;
                    //             document.getElementById('x_masalah_sub_keg_1').value = {!! json_encode($sub_kegiatan->masalah_sub_keg_2_1) !!};
                    //             document.getElementById('x_masalah_sub_keg_2').value = {!! json_encode($sub_kegiatan->masalah_sub_keg_2_2) !!};
                    //             document.getElementById('x_masalah_sub_keg_3').value = {!! json_encode($sub_kegiatan->masalah_sub_keg_2_3) !!};
                    //             document.getElementById('x_masalah_sub_keg_4').value = {!! json_encode($sub_kegiatan->masalah_sub_keg_2_4) !!};
                    
                    //             document.getElementById('x_solusi_sub_keg_1').disabled = false;
                    //             document.getElementById('x_solusi_sub_keg_2').disabled = false;
                    //             document.getElementById('x_solusi_sub_keg_3').disabled = false;
                    //             document.getElementById('x_solusi_sub_keg_4').disabled = false;
                    //             document.getElementById('x_solusi_sub_keg_1').value = {!! json_encode($sub_kegiatan->solusi_sub_keg_2_1) !!};
                    //             document.getElementById('x_solusi_sub_keg_2').value = {!! json_encode($sub_kegiatan->solusi_sub_keg_2_2) !!};
                    //             document.getElementById('x_solusi_sub_keg_3').value = {!! json_encode($sub_kegiatan->solusi_sub_keg_2_3) !!};
                    //             document.getElementById('x_solusi_sub_keg_4').value = {!! json_encode($sub_kegiatan->solusi_sub_keg_2_4) !!};
                    
                    //             document.getElementById('x_realisasi_sub_keg_1').disabled = false;
                    //             document.getElementById('x_realisasi_sub_keg_2').disabled = false;
                    //             document.getElementById('x_realisasi_sub_keg_3').disabled = false;
                    //             document.getElementById('x_realisasi_sub_keg_4').disabled = false;
                    //             document.getElementById('x_realisasi_sub_keg_1').value = {!! json_encode($sub_kegiatan->realisasi_sub_keg_2_1) !!};
                    //             document.getElementById('x_realisasi_sub_keg_2').value = {!! json_encode($sub_kegiatan->realisasi_sub_keg_2_2) !!};
                    //             document.getElementById('x_realisasi_sub_keg_3').value = {!! json_encode($sub_kegiatan->realisasi_sub_keg_2_3) !!};
                    //             document.getElementById('x_realisasi_sub_keg_4').value = {!! json_encode($sub_kegiatan->realisasi_sub_keg_2_4) !!};
                    
                    //             document.getElementById('x_serapan_sub_keg_1').disabled = false;
                    //             document.getElementById('x_serapan_sub_keg_2').disabled = false;
                    //             document.getElementById('x_serapan_sub_keg_3').disabled = false;
                    //             document.getElementById('x_serapan_sub_keg_4').disabled = false;
                    //             document.getElementById('x_serapan_sub_keg_1').value = {!! json_encode($sub_kegiatan->serapan_sub_keg_2_1) !!};
                    //             document.getElementById('x_serapan_sub_keg_2').value = {!! json_encode($sub_kegiatan->serapan_sub_keg_2_2) !!};
                    //             document.getElementById('x_serapan_sub_keg_3').value = {!! json_encode($sub_kegiatan->serapan_sub_keg_2_3) !!};
                    //             document.getElementById('x_serapan_sub_keg_4').value = {!! json_encode($sub_kegiatan->serapan_sub_keg_2_4) !!};
                    
                    //             document.getElementById('x_btn_simpan').style.display = "";
                    
                    //             alert('Melihat Data Periode 2022');
                    //         }
                    // });
                </script>
                
                
                {{-- <script>
                    var selection = document.getElementById("periode_inputan");
                    selection.addEventListener("change", function() {
                        var periode = selection.options[selection.selectedIndex].value;
                        
                        if (this.value == 2021) {
                            document.getElementById("x_masalah_sub_keg").disabled = true;
                        } else {
                            document.getElementById("x_masalah_sub_keg").disabled = false;
                        }
                        
                        // var ba = {!! json_encode($sub_kegiatan->target_sub_keg_2) !!};
                        // document.getElementById("e_target_sub_keg").value = ba;
                        
                        // document.getElementById("e_target_sub_keg").name = kos + 'siah';
                    });
                    
                    
                </script> --}}
                
                @endsection