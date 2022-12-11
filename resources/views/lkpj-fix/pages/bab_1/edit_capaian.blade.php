@extends('lkpj-fix.layouts.app')
@section('content')
@if (substr(Cookie::get('tahun_aktif'), 3) == 2)
<div class="row mt-2">
   <div class="col-12">
      <div class="box">
         <div class="box-header with-border">
            <h4 class="box-title">
               <b>Ubah Data Capaian</b>
               <small class="subtitle">Isikan data berikut dengan lengkap dan sesuai</small>
            </h4>
         </div>
         <form method="POST" action="{{ route('edit-indikator-detail') }}">
            @csrf
            <input type="text" id="id" name="id" value="{{ $data->id }}" hidden>
            <input type="text" id="id_skpd" name="id_skpd" value="{{ $data->id_skpd }}" hidden>
            <div class="box-body">
               <div class="form-group">
                  <label class="form-label">Indikator</label>
                  <select class="form-control" id="indikator" name="indikator" disabled>
                     <option value="{{ $data->id }}">{{ $data->indikator }}</option>
                  </select>
               </div>
               <div class="row">
                  <div class="col-md-2">
                     <div class="form-group">
                        <label class="form-label">Satuan</label>
                        <input type="text" class="form-control" name="satuan" id="satuan" value="{{ $data->satuan }}" placeholder="Tulis satuan capaian">
                     </div>
                  </div>
                  <div class="col-md-2">
                     <div class="form-group">
                        <label class="form-label">Capaian 2021</label>
                        <div class="col-8"><input type="text" class="form-control" name="capaian_1" id="capaian_1" value="{{ $data->capaian_1 }}" placeholder="Isikan capaian 2021"></div>
                     </div>
                  </div>
                  <div class="col-md-2">
                     <div class="form-group">
                        <label class="form-label">Capaian 2022</label>
                        <div class="col-8"><input type="text" class="form-control" name="capaian_2" id="capaian_2" value="{{ $data->capaian_2 }}" placeholder="Isikan capaian 2022"></div>
                     </div>
                  </div>
                  <div class="col-md-2">
                     <div class="form-group">
                        <label class="form-label">Capaian 2023</label>
                        <div class="col-8"><input type="text" class="form-control" name="capaian_3" id="capaian_3" value="{{ $data->capaian_3 }}" placeholder="Isikan capaian 2023"></div>
                     </div>
                  </div>
                  <div class="col-md-2">
                     <div class="form-group">
                        <label class="form-label">Capaian 2024</label>
                        <div class="col-8"><input type="text" class="form-control" name="capaian_4" id="capaian_4" value="{{ $data->capaian_4 }}" placeholder="Isikan capaian 2024"></div>
                     </div>
                  </div>
                  <div class="col-md-2">
                     <div class="form-group">
                        <label class="form-label">Capaian 2025</label>
                        <div class="col-8"><input type="text" class="form-control" name="capaian_5" id="capaian_5" value="{{ $data->capaian_5 }}" placeholder="Isikan capaian 2025"></div>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label class="form-label">Keterangan</label>
                  <textarea class="form-control" name="keterangan" placeholder="Tulis keterangan capaian">{{ $data->keterangan }}</textarea>
               </div>
            </div>
            <div class="box-footer">
               <a href="{{ url()->previous() }}" class="btn btn-warning me-1">
               <i class="ti-trash"></i> Kembali
               </a>
               <button type="submit" class="btn btn-primary">
               <i class="ti-save-alt"></i> Simpan Data
               </button>
            </div>
         </form>
      </div>
   </div>
</div>
@else
<div class="row">
   <div class="col-12 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">Ubah Data Capaian</h4>
            <p class="card-description">
               Isikan data berikut dengan lengkap dan sesuai
            </p>
            <form class="forms-sample" method="POST" action="{{ route('edit-indikator-detail') }}">
               @csrf
               <input type="text" id="id" name="id" value="{{ $data->id }}" hidden>
               <input type="text" id="id_skpd" name="id_skpd" value="{{ $data->id_skpd }}" hidden>
               {{-- 
               <div class="form-group">
                  <label for="exampleFormControlSelect2">Urusan</label>
                  <select class="form-control" id="urusan" name="urusan" disabled>
                     <option value="{{ $data->Indikator->Urusan->id }}">{{ $data->Indikator->Urusan->nama_urusan }}</option>
                  </select>
               </div>
               --}}
               <div class="form-group">
                  <label for="exampleFormControlSelect2">Indikator</label>
                  <select class="form-control" id="indikator" name="indikator" disabled>
                     <option value="{{ $data->id }}">{{ $data->indikator }}</option>
                  </select>
               </div>
               <div class="form-group">
                  <label>Satuan</label>
                  <input type="text" class="form-control" name="satuan" id="satuan" value="{{ $data->satuan }}" placeholder="Tulis satuan capaian">
               </div>
               <div class="row">
                  <div class="col-lg-4 col-md-6">
                     <div class="form-group">
                        <label>2021</label>
                        <div class="row">
                           <div class="col-8"><input type="text" class="form-control" name="capaian_1" id="capaian_1" value="{{ $data->capaian_1 }}" placeholder="Isikan capaian 2021"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="form-group">
                        <label>2022</label>
                        <div class="row">
                           <div class="col-8"><input type="text" class="form-control" name="capaian_2" id="capaian_2" value="{{ $data->capaian_2 }}" placeholder="Isikan capaian 2022"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="form-group">
                        <label>2023</label>
                        <div class="row">
                           <div class="col-8"><input type="text" class="form-control" name="capaian_3" id="capaian_3" value="{{ $data->capaian_3 }}" placeholder="Isikan capaian 2023"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-4 col-md-6">
                     <div class="form-group">
                        <label>2024</label>
                        <div class="row">
                           <div class="col-8"><input type="text" class="form-control" name="capaian_4" id="capaian_4" value="{{ $data->capaian_4 }}" placeholder="Isikan capaian 2024"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="form-group">
                        <label>2025</label>
                        <div class="row">
                           <div class="col-8"><input type="text" class="form-control" name="capaian_5" id="capaian_5" value="{{ $data->capaian_5 }}" placeholder="Isikan capaian 2025"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label>Keterangan</label>
                  <textarea class="form-control" name="keterangan" placeholder="Tulis keterangan capaian">{{ $data->keterangan }}</textarea>
               </div>
               <button type="submit" class="btn btn-success me-2">Simpan Data</button>
               <button class="btn btn-light">Batal</button>
            </form>
         </div>
      </div>
   </div>
</div>
@endif
@endsection