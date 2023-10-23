@extends('layouts.app')
@section('content')

@include('includes.alert')
<div class="row">
   <div class="col-12">
      <div class="box">
         <div class="box-body bg-img" style="background-image: url(../images/bg-5.png);" data-overlay-light="9">
            <div class="d-lg-flex align-items-center justify-content-between">
               <div class="d-md-flex align-items-center mb-30 mb-lg-0 w-p100">
                  <img src="{{ asset('LKPJ/images/svg-icon/color-svg/custom-14.svg') }}" class="img-fluid max-w-150" alt="" />
                  <div class="ms-30">
                     <h3 class="mb-10"><b>Bab. II Detail Sub-Kegiatan</b></h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-12">
      <div class="box">
         <div class="box-header with-border">
            <h4 class="box-title"><b>Data Rincian Sub-Kegiatan</b></h4>
         </div>
         <form method="POST" action="{{ route('update-sub-kegiatan') }}">
            @csrf
            <input type="number" name="id" value="{{ $data[0]->id }}" hidden>
            <div class="box-body">
               <h4 class="box-title text-info mb-0 mt-20"><i class="ti-save me-15"></i> Program/Kegiatan/Sub-Kegiatan</h4>
               <hr class="my-15">
               <div class="form-group">
                  <label class="form-label">Program</label>
                  <input type="text" class="form-control" name="program" value="{{ $data[0]->Kegiatan->Program->nama_program }}" readonly>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label class="form-label">Kegiatan</label>
                        <input type="text" class="form-control" name="kegiatan" value="{{ $data[0]->Kegiatan->nama_kegiatan }}" readonly>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label class="form-label">Sub-Kegiatan</label>
                        <input type="text" class="form-control" name="sub-kegiatan" value="{{ $data[0]->nama_sub_keg }}" readonly>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-6">
                     <h4 class="box-title text-info mb-0 mt-20"><i class="ti-save me-15"></i> Target Kinerja dan Anggaran</h4>
                     <hr class="my-15">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="form-label">Target Kinerja</label>
                              @php
                              $target = 0;
                              $satuan = 0;
                              $pagu = 0;

                              $capaian = 0;
                              $serapan = 0;
                              $masalah = "";
                              $solusi = "";
                              if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
                                 $target = $data[0]->target_sub_keg_1;
                                 $satuan = $data[0]->satuan_target_sub_keg_1;
                                 $pagu = $data[0]->pagu_indikatif_sub_keg_1;

                                 $capaian = $data[0]->realisasi_sub_keg_1_1+$data[0]->realisasi_sub_keg_1_2+$data[0]->realisasi_sub_keg_1_3+$data[0]->realisasi_sub_keg_1_4;
                                 $serapan = $data[0]->serapan_sub_keg_1_1+$data[0]->serapan_sub_keg_1_2+$data[0]->serapan_sub_keg_1_3+$data[0]->serapan_sub_keg_1_4;
                                 if (isset($data[0]->masalah_sub_keg_1_4)){
                                    $masalah = $data[0]->masalah_sub_keg_1_4;
                                 } else if (isset($data[0]->masalah_sub_keg_1_3)){
                                    $masalah = $data[0]->masalah_sub_keg_1_3;
                                 } else if (isset($data[0]->masalah_sub_keg_1_2)){
                                    $masalah = $data[0]->masalah_sub_keg_1_2;
                                 } else if (isset($data[0]->masalah_sub_keg_1_1)){
                                    $masalah = $data[0]->masalah_sub_keg_1_1;
                                 }

                                 if (isset($data[0]->solusi_sub_keg_1_4)){
                                    $solusi = $data[0]->solusi_sub_keg_1_4;
                                 } else if (isset($data[0]->solusi_sub_keg_1_3)){
                                    $solusi = $data[0]->solusi_sub_keg_1_3;
                                 } else if (isset($data[0]->solusi_sub_keg_1_3)){
                                    $solusi = $data[0]->solusi_sub_keg_1_3;
                                 } else if (isset($data[0]->solusi_sub_keg_1_1)){
                                    $solusi = $data[0]->solusi_sub_keg_1_1;
                                 }
                              } else if (substr(Cookie::get('tahun_aktif'), 3) == 2) {
                                 $target = $data[0]->target_sub_keg_2;
                                 $satuan = $data[0]->satuan_target_sub_keg_2;
                                 $pagu = $data[0]->pagu_indikatif_sub_keg_2;

                                 $capaian = $data[0]->realisasi_sub_keg_2_1+$data[0]->realisasi_sub_keg_2_2+$data[0]->realisasi_sub_keg_2_3+$data[0]->realisasi_sub_keg_2_4;
                                 $serapan = $data[0]->serapan_sub_keg_2_1+$data[0]->serapan_sub_keg_2_2+$data[0]->serapan_sub_keg_2_3+$data[0]->serapan_sub_keg_2_4;

                                 if (isset($data[0]->masalah_sub_keg_2_4)){
                                    $masalah = $data[0]->masalah_sub_keg_2_4;
                                 } else if (isset($data[0]->masalah_sub_keg_2_3)){
                                    $masalah = $data[0]->masalah_sub_keg_2_3;
                                 } else if (isset($data[0]->masalah_sub_keg_2_2)){
                                    $masalah = $data[0]->masalah_sub_keg_2_2;
                                 } else if (isset($data[0]->masalah_sub_keg_2_1)){
                                    $masalah = $data[0]->masalah_sub_keg_2_1;
                                 }

                                 if (isset($data[0]->solusi_sub_keg_2_4)){
                                    $solusi = $data[0]->solusi_sub_keg_2_4;
                                 } else if (isset($data[0]->solusi_sub_keg_2_3)){
                                    $solusi = $data[0]->solusi_sub_keg_2_3;
                                 } else if (isset($data[0]->solusi_sub_keg_2_3)){
                                    $solusi = $data[0]->solusi_sub_keg_2_3;
                                 } else if (isset($data[0]->solusi_sub_keg_2_1)){
                                    $solusi = $data[0]->solusi_sub_keg_2_1;
                                 }
                              } else if (substr(Cookie::get('tahun_aktif'), 3) == 3) {
                                 $target = $data[0]->target_sub_keg_3;
                                 $satuan = $data[0]->satuan_target_sub_keg_3;
                                 $pagu = $data[0]->pagu_indikatif_sub_keg_3;

                                 $capaian = $data[0]->realisasi_sub_keg_3_1+$data[0]->realisasi_sub_keg_3_2+$data[0]->realisasi_sub_keg_3_3+$data[0]->realisasi_sub_keg_3_4;
                                 $serapan = $data[0]->serapan_sub_keg_3_1+$data[0]->serapan_sub_keg_3_2+$data[0]->serapan_sub_keg_3_3+$data[0]->serapan_sub_keg_3_4;

                                 if (isset($data[0]->masalah_sub_keg_3_4)){
                                    $masalah = $data[0]->masalah_sub_keg_3_4;
                                 } else if (isset($data[0]->masalah_sub_keg_3_3)){
                                    $masalah = $data[0]->masalah_sub_keg_3_3;
                                 } else if (isset($data[0]->masalah_sub_keg_3_2)){
                                    $masalah = $data[0]->masalah_sub_keg_3_2;
                                 } else if (isset($data[0]->masalah_sub_keg_3_1)){
                                    $masalah = $data[0]->masalah_sub_keg_3_1;
                                 }

                                 if (isset($data[0]->solusi_sub_keg_3_4)){
                                    $solusi = $data[0]->solusi_sub_keg_3_4;
                                 } else if (isset($data[0]->solusi_sub_keg_3_3)){
                                    $solusi = $data[0]->solusi_sub_keg_3_3;
                                 } else if (isset($data[0]->solusi_sub_keg_3_2)){
                                    $solusi = $data[0]->solusi_sub_keg_3_2;
                                 } else if (isset($data[0]->solusi_sub_keg_3_1)){
                                    $solusi = $data[0]->solusi_sub_keg_3_1;
                                 }
                              } else if (substr(Cookie::get('tahun_aktif'), 3) == 4) {
                                 $target = $data[0]->target_sub_keg_4;
                                 $satuan = $data[0]->satuan_target_sub_keg_4;
                                 $pagu = $data[0]->pagu_indikatif_sub_keg_4;

                                 $capaian = $data[0]->realisasi_sub_keg_4_1+$data[0]->realisasi_sub_keg_4_2+$data[0]->realisasi_sub_keg_4_3+$data[0]->realisasi_sub_keg_4_4;
                                 $serapan = $data[0]->serapan_sub_keg_4_1+$data[0]->serapan_sub_keg_4_2+$data[0]->serapan_sub_keg_4_3+$data[0]->serapan_sub_keg_4_4;

                                 if (isset($data[0]->masalah_sub_keg_4_4)){
                                    $masalah = $data[0]->masalah_sub_keg_4_4;
                                 } else if (isset($data[0]->masalah_sub_keg_4_3)){
                                    $masalah = $data[0]->masalah_sub_keg_4_3;
                                 } else if (isset($data[0]->masalah_sub_keg_4_2)){
                                    $masalah = $data[0]->masalah_sub_keg_4_2;
                                 } else if (isset($data[0]->masalah_sub_keg_4_1)){
                                    $masalah = $data[0]->masalah_sub_keg_4_1;
                                 }

                                 if (isset($data[0]->solusi_sub_keg_4_4)){
                                    $solusi = $data[0]->solusi_sub_keg_4_4;
                                 } else if (isset($data[0]->solusi_sub_keg_4_3)){
                                    $solusi = $data[0]->solusi_sub_keg_4_3;
                                 } else if (isset($data[0]->solusi_sub_keg_4_2)){
                                    $solusi = $data[0]->solusi_sub_keg_4_2;
                                 } else if (isset($data[0]->solusi_sub_keg_4_1)){
                                    $solusi = $data[0]->solusi_sub_keg_4_1;
                                 }
                              } else if (substr(Cookie::get('tahun_aktif'), 3) == 5) {
                                 $target = $data[0]->target_sub_keg_5;
                                 $satuan = $data[0]->satuan_target_sub_keg_5;
                                 $pagu = $data[0]->pagu_indikatif_sub_keg_5;

                                 $capaian = $data[0]->realisasi_sub_keg_5_1+$data[0]->realisasi_sub_keg_5_2+$data[0]->realisasi_sub_keg_5_3+$data[0]->realisasi_sub_keg_5_4;
                                 $serapan = $data[0]->serapan_sub_keg_5_1+$data[0]->serapan_sub_keg_5_2+$data[0]->serapan_sub_keg_5_3+$data[0]->serapan_sub_keg_5_4;

                                 if (isset($data[0]->masalah_sub_keg_5_4)){
                                    $masalah = $data[0]->masalah_sub_keg_5_4;
                                 } else if (isset($data[0]->masalah_sub_keg_5_3)){
                                    $masalah = $data[0]->masalah_sub_keg_5_3;
                                 } else if (isset($data[0]->masalah_sub_keg_5_2)){
                                    $masalah = $data[0]->masalah_sub_keg_5_2;
                                 } else if (isset($data[0]->masalah_sub_keg_5_1)){
                                    $masalah = $data[0]->masalah_sub_keg_5_1;
                                 }

                                 if (isset($data[0]->solusi_sub_keg_5_4)){
                                    $solusi = $data[0]->solusi_sub_keg_5_4;
                                 } else if (isset($data[0]->solusi_sub_keg_5_3)){
                                    $solusi = $data[0]->solusi_sub_keg_5_3;
                                 } else if (isset($data[0]->solusi_sub_keg_5_2)){
                                    $solusi = $data[0]->solusi_sub_keg_5_2;
                                 } else if (isset($data[0]->solusi_sub_keg_5_1)){
                                    $solusi = $data[0]->solusi_sub_keg_5_1;
                                 }
                              } else if (substr(Cookie::get('tahun_aktif'), 3) == 6) {
                                 $target = $data[0]->target_sub_keg_6;
                                 $satuan = $data[0]->satuan_target_sub_keg_6;
                                 $pagu = $data[0]->pagu_indikatif_sub_keg_6;

                                 $capaian = $data[0]->realisasi_sub_keg_6_1+$data[0]->realisasi_sub_keg_6_2+$data[0]->realisasi_sub_keg_6_3+$data[0]->realisasi_sub_keg_6_4;
                                 $serapan = $data[0]->serapan_sub_keg_6_1+$data[0]->serapan_sub_keg_6_2+$data[0]->serapan_sub_keg_6_3+$data[0]->serapan_sub_keg_6_4;

                                 if (isset($data[0]->masalah_sub_keg_6_4)){
                                    $masalah = $data[0]->masalah_sub_keg_6_4;
                                 } else if (isset($data[0]->masalah_sub_keg_6_3)){
                                    $masalah = $data[0]->masalah_sub_keg_6_3;
                                 } else if (isset($data[0]->masalah_sub_keg_6_2)){
                                    $masalah = $data[0]->masalah_sub_keg_6_2;
                                 } else if (isset($data[0]->masalah_sub_keg_6_1)){
                                    $masalah = $data[0]->masalah_sub_keg_6_1;
                                 }

                                 if (isset($data[0]->solusi_sub_keg_6_4)){
                                    $solusi = $data[0]->solusi_sub_keg_6_4;
                                 } else if (isset($data[0]->solusi_sub_keg_6_3)){
                                    $solusi = $data[0]->solusi_sub_keg_6_3;
                                 } else if (isset($data[0]->solusi_sub_keg_6_2)){
                                    $solusi = $data[0]->solusi_sub_keg_6_2;
                                 } else if (isset($data[0]->solusi_sub_keg_6_1)){
                                    $solusi = $data[0]->solusi_sub_keg_6_1;
                                 }
                              }
                              @endphp
                              <input type="text" class="form-control" value="{{ $target }}"  name="target" placeholder="Isikan target" readonly>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <div class="form-group">
                              <label class="form-label">Satuan</label>
                              <input type="text" class="form-control" value="{{ $satuan }}" name="satuan" placeholder="Tulis satuan kinerja" readonly>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="form-label">Target Anggaran</label>
                              <input type="text" class="form-control" value="{{ $pagu }}" name="target_anggaran" placeholder="Tulis target anggaran" readonly>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-6">
                     <h4 class="box-title text-info mb-0 mt-20"><i class="ti-save me-15"></i> Capaian Kinerja dan Anggaran</h4>
                     <hr class="my-15">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="form-label">Capaian Kinerja</label>
                              <input type="text" class="form-control" value="{{ $capaian }}"  name="capaian" placeholder="Isikan capaian" readonly>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <div class="form-group">
                              <label class="form-label">Satuan</label>
                              <input type="text" class="form-control" value="{{ $satuan }}"  name="target_capaian" placeholder="Tulis target capaian" readonly>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="form-label">Capaian Anggaran</label>
                              <input type="text" class="form-control" value="{{ $serapan }}"  name="capaian" placeholder="Isikan capaian" readonly>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <h4 class="box-title text-info mb-0 mt-20"><i class="ti-save me-15"></i> Program/Kegiatan/Sub-Kegiatan</h4>
               <hr class="my-15">
               <div class="row">
                  <div class="col-6">
                     <div class="form-group">
                        <label class="form-label">Masalah</label>
                        <textarea class="form-control" name="masalah" placeholder="Tulis masalah" readonly>{{ $masalah }}
                        </textarea>
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                        <label class="form-label">Solusi</label>
                        <textarea class="form-control" name="solusi" placeholder="Tulis solusi" readonly>{{ $solusi }}
                        </textarea>
                     </div>
                  </div>
               </div>
               <hr class="my-15">
               <div class="box">
                  <div class="box-header with-border">
                     <h4 class="box-title">Apakah data ini termasuk dalam <i>Program Unggulan dan Inovasi</i> ?</h4>
                     <h5><small>*Biarkan kosong apabila tidak termasuk</small></h5>
                  </div>
                  <div class="box-body">
                     <div class="row">
                        <div class="col-2">
                           <div class="form-group">
                              <label class="form-label">Status</label>
                              <select class="form-select" name="unggulan">
                                 <option value="0">Tidak</option>
                                 <option value="1" @if ($data[0]->unggulan == 1) selected @endif>Ya</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-3">
                           <div class="form-group">
                              <label class="form-label">Lokasi</label>
                              <input type="text" class="form-control" name="lokasi" value="@if (isset($data[0]->lokasi)){{ $data[0]->lokasi }}@endif">
                           </div>
                        </div>
                        <div class="col-7">
                           <div class="form-group">
                              <label class="form-label">Keterangan</label>
                              <input type="text" class="form-control" name="keterangan" value="@if (isset($data[0]->keterangan)){{ $data[0]->keterangan }}@endif">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
               <a href="{{ url()->previous() }}" class="btn btn-warning me-1">
                  <i class="ti-trash"></i> Kembali
               </a>
               @if (Auth::user()->hak_akses != 'BIDANG')
               <button type="submit" class="btn btn-primary">
                  <i class="ti-save-alt"></i> Simpan
               </button>
               @endif
            </div>
         </form>
      </div>
      <!-- /.box -->			
   </div>
</div>

@endsection