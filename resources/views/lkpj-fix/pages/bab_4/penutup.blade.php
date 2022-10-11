@extends('lkpj-fix.layouts.app')

@section('content')

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

@endsection
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