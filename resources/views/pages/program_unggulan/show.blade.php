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
                     <h3 class="mb-10 fw-bold">Detail Sub-Kegiatan</h3>
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
            <h4 class="box-title"><b>Data Rincian Sub-Kegiatan : Tahun {{ $tahun }}</b></h4>
         </div>
         <form method="POST" action="{{ route('program-unggulan-update') }}">
            @csrf
            <input type="number" name="id_subkegiatan" value="{{ $data->id }}" hidden>
            <div class="box-body">
               <h4 class="box-title text-info mb-0"><i class="ti-save me-15"></i> Program/Kegiatan/Sub-Kegiatan</h4>
               <hr class="my-15">
               <div class="form-group">
                  <label class="form-label">Program</label>
                  <input type="text" class="form-control" name="program" value="{{ $data->Kegiatan->Program->nama_program }}" readonly>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label class="form-label">Kegiatan</label>
                        <input type="text" class="form-control" name="kegiatan" value="{{ $data->Kegiatan->nama_kegiatan }}" readonly>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label class="form-label">Sub-Kegiatan</label>
                        <input type="text" class="form-control" name="sub-kegiatan" value="{{ $data->nama_subkegiatan }}" readonly>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-6">
                     <h4 class="box-title text-info mb-0 mt-20"><i class="ti-save me-15"></i> Capaian Kinerja</h4>
                     <hr class="my-15">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="form-label">Target</label>
                              <input type="text" class="form-control" value="{{ $data_tahun->target }}" name="target" placeholder="Isikan target" readonly>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="form-label">Satuan</label>
                              <input type="text" class="form-control" value="{{ $data_tahun->satuan_target }}" name="satuan" placeholder="Tulis satuan kinerja" readonly>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="form-label">Realisasi Kinerja</label>
                              <input type="text" class="form-control" value="{{ $data_bulan->sum('realisasi_kinerja') }}" name="target_anggaran" placeholder="Tulis target anggaran" readonly>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-6">
                     <h4 class="box-title text-info mb-0 mt-20"><i class="ti-save me-15"></i> Capaian Anggaran</h4>
                     <hr class="my-15">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="form-label">Anggaran</label>
                              <input type="text" class="form-control" value="Rp. {{ number_format($data_tahun->pagu_indikatif, 0,',','.') }}"  name="capaian" placeholder="Isikan capaian" readonly>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="form-label">Realisasi Anggaran</label>
                              <input type="text" class="form-control" value="Rp. {{ number_format($data_bulan->sum('realisasi_anggaran'), 0,',','.') }}"  name="capaian" placeholder="Isikan capaian" readonly>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <h4 class="box-title text-info mb-0 mt-20"><i class="ti-save me-15"></i> Masalah dan Solusi</h4>
               <hr class="my-15">
               <div class="row">
                    @foreach ($data_bulan->where('bulan', '12') as $db)
                    <div class="col-6">
                        <div class="form-group">
                           <label class="form-label">Masalah</label>
                           <textarea class="form-control" name="masalah" placeholder="Tulis masalah" readonly>{{ $db->masalah == null ? '-' : $db->masalah }}</textarea>
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="form-group">
                           <label class="form-label">Solusi</label>
                           <textarea class="form-control" name="solusi" placeholder="Tulis solusi" readonly>{{ $db->solusi == null ? '-' : $db->solusi }}</textarea>
                        </div>
                     </div>
                    @endforeach
               </div>
               <hr class="my-15">
               <div class="box">
                  <div class="box-header with-border">
                     <h4 class="box-title">Apakah data ini termasuk dalam <i>Program Unggulan dan Inovasi</i> ?</h4>
                     {{-- <h5><small>*Biarkan kosong apabila tidak termasuk</small></h5> --}}
                  </div>
                  <div class="box-body">
                     <div class="row">
                        <div class="col-3">
                           <div class="form-group">
                              <label class="form-label">Status Program Unggulan</label>
                              <select class="form-select" name="unggulan">
                                 <option value="0" @if($data->unggulan == 0) selected @endif >Tidak</option>
                                 <option value="1" @if($data->unggulan == 1) selected @endif >Ya</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-3">
                           <div class="form-group">
                              <label class="form-label">Lokasi</label>
                              <input type="text" class="form-control" name="lokasi" value="{{ $data->lokasi }}" placeholder="Diisi sesuai dengan DPA/DPPA">
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group">
                              <label class="form-label">Keterangan</label>
                              <input type="text" class="form-control" name="keterangan" value="{{ $data->keterangan }}" placeholder="Jelaskan mengapa program tersebut termasuk program unggulan/bukan program unggulan">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
               <a href="{{ url()->previous() }}" class="btn btn-warning btn-sm me-1">Kembali</a>
               @if (Auth::user()->hak_akses != 'BIDANG')
               <button type="submit" class="btn btn-primary btn-sm">
                  <i class="ti-save-alt me-2"></i> Simpan Perubahan Data
               </button>
               @endif
            </div>
         </form>
      </div>
      <!-- /.box -->			
   </div>
</div>

@endsection