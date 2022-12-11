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
              <h3 class="mb-10"><b>Bab. IV Penutup Admin</b></h3>
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
        <h4 class="box-title">
           <b>Halaman Penutup Admin</b>
           <small class="subtitle">Berisi tentang kesimpulan atas capaian kinerja dan anggaran program dan kegiatan (Bab II) serta capaian data kinerja (Bab I) maupun capaian indikator kinerja utama (Bab III)</small>
        </h4>
     </div>
      <div class="box-body">
        {{-- <form>
          <textarea name="content" data-provide="markdown" data-iconlibrary="fa" rows="11"></textarea>
        </form> --}}        
        <form method="POST" action="{{ route('update-penutup-admin') }}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label><b>Penutup OPD</b></label>
            <input type="text" name="id_penutup" value="{{ $data->id }}" hidden>
            <textarea id="summernoteExample" class="form-control" name="penutup" rows="15" placeholder="Tulis keterangan penutup" required>{!! $data->penutup !!}</textarea>
          </div>
          @if (Auth::user()->hak_akses != 'BIDANG')
          <button type="submit" class="btn bg-gradient-info">Simpan Perubahan</button>
          @endif
        </form>
      </div>
    </div>
  </div>
</div>

@else

<div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Bab IV Penutup</h4>
          <p class="card-description">Berisi tentang kesimpulan atas capaian kinerja dan anggaran program dan kegiatan (Bab II) serta capaian data kinerja (Bab I) maupun capaian indikator kinerja utama (Bab III)</p>
          <form class="forms-sample" method="POST" action="{{ route('update-penutup-admin') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label><b>Edit Penutup Akhir</b></label>
                <input type="text" name="id_penutup" value="{{ $data->id }}" hidden>
                <textarea id="summernoteExample" class="form-control" name="penutup" rows="15" placeholder="Tulis keterangan penutup" required>{!! $data->penutup !!}</textarea>
            </div>
            <button type="submit" class="btn btn-info me-2">Simpan Perubahan</button>
          </form>
        </div>
      </div>
    </div>
</div>

@endif

@endsection