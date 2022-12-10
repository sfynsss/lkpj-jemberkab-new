@extends('lkpj-fix.layouts.app')

@section('content')

@if (substr(Cookie::get('tahun_aktif'), 3) == 2)

<div class="row">
  <div class="col-12">
    <div class="box">
      <div class="box-body bg-img" style="background-image: url(../images/bg-5.png);" data-overlay-light="9">
        <div class="d-lg-flex align-items-center justify-content-between">
          <div class="d-md-flex align-items-center mb-30 mb-lg-0 w-p100">
            <img src="{{ asset('LKPJ/images/svg-icon/color-svg/custom-14.svg') }}" class="img-fluid max-w-150" alt="" />
            <div class="ms-30">
              <h3 class="mb-10"><b>Bab. IV Penutup OPD</b></h3>
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
           <b>Halaman Penutup OPD</b>
           <small class="subtitle">Pengelolaan kalimat untuk penutup laporan LKPJ OPD</small>
        </h4>
     </div>
      <div class="box-body">
        {{-- <form>
          <textarea name="content" data-provide="markdown" data-iconlibrary="fa" rows="11"></textarea>
        </form> --}}        
        <form method="POST" action="{{ route('update-penutup-opd') }}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label><b>Penutup OPD</b></label>
            <input type="text" name="id_penutup" value="{{ $data->id }}" hidden>
            <textarea name="penutup" id="editor1" name="editor1" rows="10" cols="80" placeholder="Tulis keterangan penutup" required>{!! $data->penutup !!}</textarea>
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
        <h4 class="card-title">Penutup OPD : {{ $data->Skpd->nama_skpd }}</h4>
        <p class="card-description">Kelola kalimat penutup untuk laporan LKPJ OPD</p>
        <form class="forms-sample" method="POST" action="{{ route('update-penutup-opd') }}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label><b>Penutup OPD</b></label>
            <input type="text" name="id_penutup" value="{{ $data->id }}" hidden>
            <textarea id="penutup" name="penutup" rows="10" cols="80" placeholder="Tulis keterangan penutup" required>{!! $data->penutup !!}</textarea>
          </div>
          @if (Auth::user()->hak_akses != 'BIDANG')
          <button type="submit" class="btn btn-info me-2">Simpan Perubahan</button>
          @endif
        </form>
      </div>
    </div>
  </div>
</div>

@endif

@endsection


@if (substr(Cookie::get('tahun_aktif'), 3) != 2)

@section('script')
<script>
  // ClassicEditor
  // .create(document.querySelector('#penutup'))
  // .then(editor => {
  //   deskripsiEditorEdit = editor;
  // })
  // .catch(error => {
  //   console.error(error);
  // });
  CKEDITOR.replace( 'penutup' );
</script>
@endsection

@endif
