@extends('lkpj-fix.layouts.app')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Kegiatan {{ $data[0]->Skpd->nama_skpd }}</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="zero_config" class="table table-striped table-bordered no-wrap">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Kegiatan</th>
                    <th>Indikator</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $i => $data)
                  <tr>
                    <td class="text-center">{{ $i+1 }}</td>
                    <td>{{ $data->kode_kegiatan }}</td>
                    <td>{{ $data->nama_kegiatan }}</td>                      
                    <td>{{ $data->indikator_kegiatan }}</td>                      
                    <td class="text-center">
                      @if (Auth::user()->hak_akses != 'BIDANG')
                      <a type="button" class="btn btn-outline-success text-success" data-toggle="modal" data-target="#modalTambah" onclick="tambahData('{{ $data->id }}', '{{ $data->nama_kegiatan }}', '{{ $data->indikator_kegiatan }}');">Ubah</a>
                      @endif
                      <a href="{{ route('subkegiatan-pks', $data->id) }}" class="btn btn-outline-primary">Lihat</a>
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

<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modalTambah" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Indikator Kegiatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('ubah-indikator-kegiatan') }}" method="POST">
          @csrf
          <input type="text" hidden name="id_kegiatan" id="id_kegiatan" value="">
          <div class="form-group">
            <label for="nama_indikator">Nama Kegiatan</label>
            <input type="text" class="form-control" id="nama_kegiatan" disabled value="">
          </div>
          <div class="form-group">
            <label for="nama_indikator">Nama Indikator</label>
            <input type="text" class="form-control" name="nama_indikator" id="nama_indikator" placeholder="Isikan nama indikator" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
@section('script')
<script>
  function tambahData($a, $b, $c) {
    $("#id_kegiatan").val($a);
    $("#nama_kegiatan").val($b);
    $("#nama_indikator").val($c);
  }
</script>
@endsection