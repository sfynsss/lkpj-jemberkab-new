@extends('lkpj-fix.layouts.app')

@section('content')

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

@endsection