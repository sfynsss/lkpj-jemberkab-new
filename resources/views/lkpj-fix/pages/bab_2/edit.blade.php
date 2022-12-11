@extends('lkpj-fix.layouts.app')
@section('content')
@if (substr(Cookie::get('tahun_aktif'), 3) == 2)
@include('lkpj-fix.includes_new.alert')
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
                              <input type="text" class="form-control" value="{{ $data[0]->target_sub_keg_1 }}"  name="target" placeholder="Isikan target" readonly>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <div class="form-group">
                              <label class="form-label">Satuan</label>
                              <input type="text" class="form-control" value="{{ $data[0]->satuan_target_sub_keg_1 }}" name="satuan" placeholder="Tulis satuan kinerja" readonly>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="form-label">Target Anggaran</label>
                              <input type="text" class="form-control" value="{{ $data[0]->pagu_indikatif_sub_keg_1 }}" name="target_anggaran" placeholder="Tulis target anggaran" readonly>
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
                              <input type="text" class="form-control" value="{{ ($data[0]->realisasi_sub_keg_1_1+$data[0]->realisasi_sub_keg_1_2+$data[0]->realisasi_sub_keg_1_3+$data[0]->realisasi_sub_keg_1_4) }}"  name="capaian" placeholder="Isikan capaian" readonly>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <div class="form-group">
                              <label class="form-label">Satuan</label>
                              <input type="text" class="form-control" value="{{ $data[0]->satuan_target_sub_keg_1 }}"  name="target_capaian" placeholder="Tulis target capaian" readonly>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="form-label">Capaian Anggaran</label>
                              <input type="text" class="form-control" value="{{ ($data[0]->serapan_sub_keg_1_1+$data[0]->serapan_sub_keg_1_2+$data[0]->serapan_sub_keg_1_3+$data[0]->serapan_sub_keg_1_4) }}"  name="capaian" placeholder="Isikan capaian" readonly>
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
                        <textarea class="form-control" name="masalah" placeholder="Tulis masalah" readonly>@if (isset($data[0]->masalah_sub_keg_1_4)){{ $data[0]->masalah_sub_keg_1_4 }}@elseif (isset($data[0]->masalah_sub_keg_1_3)){{ $data[0]->masalah_sub_keg_1_3 }}@elseif (isset($data[0]->masalah_sub_keg_1_2)){{ $data[0]->masalah_sub_keg_1_2 }}@elseif (isset($data[0]->masalah_sub_keg_1_1)){{ $data[0]->masalah_sub_keg_1_1 }}@endif
                        </textarea>
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                        <label class="form-label">Solusi</label>
                        <textarea class="form-control" name="solusi" placeholder="Tulis solusi" readonly>@if (isset($data[0]->solusi_sub_keg_1_4)){{ $data[0]->solusi_sub_keg_1_4 }}@elseif (isset($data[0]->solusi_sub_keg_1_3)){{ $data[0]->solusi_sub_keg_1_3 }}@elseif (isset($data[0]->solusi_sub_keg_1_3)){{ $data[0]->solusi_sub_keg_1_3 }}@elseif (isset($data[0]->solusi_sub_keg_1_1)){{ $data[0]->solusi_sub_keg_1_1 }}@endif
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
                        <div class="col-1">
                           <div class="form-group">
                              <label class="form-label">Status</label>
                              <div class="checkbox checkbox-success">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" name="unggulan" value="1" @if ($data[0]->unggulan == 1) checked @endif>
                                <label class="custom-control-label" for="customCheck1">Iya</label>
                              </div>
                           </div>
                        </div>
                        <div class="col-3">
                           <div class="form-group">
                              <label class="form-label">Lokasi</label>
                              <input type="text" class="form-control" name="lokasi" value="@if (isset($data[0]->lokasi)){{ $data[0]->lokasi }}@endif">
                           </div>
                        </div>
                        <div class="col-8">
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
@else
<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">Detail Sub-Kegiatan</h4>
            <form class="forms-sample" method="POST" action="{{ route('update-sub-kegiatan') }}">
               @csrf
               <input type="number" name="id" value="{{ $data[0]->id }}" hidden>
               <div class="form-group">
                  <label><b>Pogram</b></label>
                  <input type="text" class="form-control" name="program" value="{{ $data[0]->Kegiatan->Program->nama_program }}" readonly>
               </div>
               <div class="form-group">
                  <label><b>Kegiatan</b></label>
                  <input type="text" class="form-control" name="kegiatan" value="{{ $data[0]->Kegiatan->nama_kegiatan }}" readonly>
               </div>
               <div class="form-group">
                  <label><b>Sub-kegiatan</b></label>
                  <input type="text" class="form-control" name="sub-kegiatan" value="{{ $data[0]->nama_sub_keg }}" readonly>
               </div>
               <hr>
               <h4 class="card-title">A. Target Kinerja dan Anggaran</h4>
               <div class="row">
                  <div class="col-3">
                     <div class="form-group">
                        <label><b>Target Kinerja</b></label>
                        <input type="text" class="form-control" value="{{ $data[0]->target_sub_keg_1 }}"  name="target" placeholder="Isikan target" readonly>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="form-group">
                        <label><b>Satuan</b></label>
                        <input type="text" class="form-control" value="{{ $data[0]->satuan_target_sub_keg_1 }}"  name="satuan" placeholder="Tulis satuan kinerja" readonly>
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                        <label><b>Target Anggaran</b></label>
                        <input type="text" class="form-control" value="{{ $data[0]->pagu_indikatif_sub_keg_1 }}"  name="target_anggaran" placeholder="Tulis target anggaran" readonly>
                     </div>
                  </div>
               </div>
               <hr>
               <h4 class="card-title">B. Capaian Kinerja dan Anggaran</h4>
               <div class="row">
                  <div class="col">
                     <div class="form-group">
                        <label><b>Capaian Kinerja</b></label>
                        <input type="text" class="form-control" value="{{ ($data[0]->realisasi_sub_keg_1_1+$data[0]->realisasi_sub_keg_1_2+$data[0]->realisasi_sub_keg_1_3+$data[0]->realisasi_sub_keg_1_4) }}"  name="capaian" placeholder="Isikan capaian" readonly>
                     </div>
                  </div>
                  <div class="col">
                     <div class="form-group">
                        <label><b>Satuan</b></label>
                        <input type="text" class="form-control" value="{{ $data[0]->satuan_target_sub_keg_1 }}"  name="target_capaian" placeholder="Tulis target capaian" readonly>
                     </div>
                  </div>
                  <div class="col">
                     <div class="form-group">
                        <label><b>Capaian Anggaran</b></label>
                        <input type="text" class="form-control" value="{{ ($data[0]->serapan_sub_keg_1_1+$data[0]->serapan_sub_keg_1_2+$data[0]->serapan_sub_keg_1_3+$data[0]->serapan_sub_keg_1_4) }}"  name="capaian" placeholder="Isikan capaian" readonly>
                     </div>
                  </div>
               </div>
               <hr>
               <h4 class="card-title">C. Masalah dan Solusi</h4>
               <div class="form-group">
                  <label><b>Masalah</b></label>
                  <textarea class="form-control" name="masalah" placeholder="Tulis masalah" readonly>
                  @if (isset($data[0]->masalah_sub_keg_1_4))
                  {{ $data[0]->masalah_sub_keg_1_4 }}
                  @elseif (isset($data[0]->masalah_sub_keg_1_3))
                  {{ $data[0]->masalah_sub_keg_1_3 }}
                  @elseif (isset($data[0]->masalah_sub_keg_1_2))
                  {{ $data[0]->masalah_sub_keg_1_2 }}
                  @elseif (isset($data[0]->masalah_sub_keg_1_1))
                  {{ $data[0]->masalah_sub_keg_1_1 }}
                  @endif
                  </textarea>
               </div>
               <div class="form-group">
                  <label><b>Solusi</b></label>
                  <textarea class="form-control" name="solusi" placeholder="Tulis solusi" readonly>
                  @if (isset($data[0]->solusi_sub_keg_1_4))
                  {{ $data[0]->solusi_sub_keg_1_4 }}
                  @elseif (isset($data[0]->solusi_sub_keg_1_3))
                  {{ $data[0]->solusi_sub_keg_1_3 }}
                  @elseif (isset($data[0]->solusi_sub_keg_1_3))
                  {{ $data[0]->solusi_sub_keg_1_3 }}
                  @elseif (isset($data[0]->solusi_sub_keg_1_1))
                  {{ $data[0]->solusi_sub_keg_1_1 }}
                  @endif
                  </textarea>
               </div>
               <h4 class="card-title">D. Program Unggulan dan Inovasi</h4>
               <br>
               <label><b>Program Unggulan dan Inovasi ?</b></label>
               <div class="form-group">
                  <div class="custom-control custom-checkbox">
                     <input type="checkbox" class="custom-control-input" id="customCheck1" name="unggulan" value="1" @if ($data[0]->unggulan == 1) checked @endif>
                     <label class="custom-control-label" for="customCheck1">Iya</label>
                  </div>
               </div>
               <div class="form-group">
                  <label><b>Lokasi</b></label>
                  <input type="text" class="form-control" name="lokasi" value="@if (isset($data[0]->lokasi)){{ $data[0]->lokasi }}@endif">
               </div>
               <div class="form-group">
                  <label><b>Uraian</b></label>
                  <input type="text" class="form-control" name="keterangan" value="@if (isset($data[0]->keterangan)){{ $data[0]->keterangan }}@endif">
               </div>
               <br>
               <br>
               @if (Auth::user()->hak_akses != 'BIDANG')
               <Button type="submit" class="btn btn-primary">SIMPAN</Button>
               @endif
            </form>
         </div>
      </div>
   </div>
</div>
@endif
@endsection