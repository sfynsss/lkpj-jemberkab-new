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
                     <h3 class="mb-10"><b>Bab. II Program</b></h3>
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
            <h4 class="box-title"><b>Program</b></h4>
            <h6 class="box-subtitle">SKPD : {{ $nama_skpd->nama_skpd }}</h6>
         </div>
         <div class="box-body">
            <div class="row">
               <div class="col-12">
                  <div class="table-responsive">
                     <table id="zero_config" class="table table-striped table-bordered no-wrap">
                        <thead class="bg-gradient-primary-dark text-white text-center">
                           <tr>
                              <th>No</th>
                              <th>Kode</th>
                              <th>Nama Program</th>
                              <th>Indikator</th>
                              <th>Aksi</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($data as $i => $data)
                           <tr>
                              <td class="text-center">{{ $i+1 }}</td>
                              <td>{{ $data->kode_program }}</td>
                              <td>@if($data->unggulan == 1) <i class="fa fa-check-circle-o text-success me-2" aria-hidden="true"></i> @endif {{ $data->nama_program }}</td>
                              <td>{{ $data->indikator_program }}</td>
                              <td class="text-center">
                                 @if (Auth::user()->hak_akses == 'ADMIN')
                                 <a type="button" class="btn bg-gradient-success mb-2"  data-bs-toggle="modal" data-bs-target="#modalTambah" onclick="tambahData('{{ $data->id }}', '{{ $data->nama_program }}', '{{ $data->indikator_program }}');">Ubah Indikator</a>
                                 @endif
                                 <a href="{{ route('kegiatan-pks', $data->id) }}" class="btn bg-gradient-primary">Lihat Kegiatan</a>
                              </td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal modal-left fade" id="modalTambah" tabindex="-1">
  <div class="modal-dialog">
     <form class="modal-content" action="{{ route('ubah-indikator-program') }}" method="POST">
        @csrf
        <div class="modal-header">
           <h5 class="modal-title">Ubah Data</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <input type="text" hidden name="id_program" id="id_program" value="">
           <div class="form-group">
              <label for="nama_indikator">Nama Program</label>
              <textarea type="text" class="form-control" id="nama_program" disabled value=""></textarea>
           </div>
           <div class="form-group">
              <label for="nama_indikator">Indikator Kegiatan</label>
              <textarea class="form-control" name="nama_indikator" id="nama_indikator" rows="8" placeholder="Isikan nama indikator" required></textarea>
           </div>
        </div>
        <div class="modal-footer modal-footer-uniform">
           <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Tutup</button>
           <button type="submit" class="btn btn-primary float-end"><i class="ti-save-alt"></i> Simpan</button>
        </div>
     </form>
  </div>
</div>
@endsection
@section('script')
<script>
   function tambahData($a, $b, $c) {
     $("#id_program").val($a);
     $("#nama_program").val($b);
     $("#nama_indikator").val($c);
   }
</script>
@endsection