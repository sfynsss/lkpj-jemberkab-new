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
              <h3 class="mb-10"><b>Bab. II Kegiatan</b></h3>
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
        <h4 class="box-title"><b>Data Kegiatan</b></h4>
        <h6 class="box-subtitle">Nama Program : {{ $nama_program->nama_program }}</h6>
        <h6 class="box-subtitle">SKPD : {{ $data[0]->Skpd->nama_skpd }}</h6>
      </div>
      <div class="box-body">
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table class="table table-striped table-bordered">
                <thead class="bg-gradient-primary-dark text-white text-center">
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
                      <a type="button" class="btn bg-gradient-success mb-2" data-bs-toggle="modal" data-bs-target="#modalTambah" onclick="tambahData('{{ $data->id }}', '{{ $data->nama_kegiatan }}', '{{ $data->indikator_kegiatan }}');">Ubah Indikator</a>
                      @endif
                      <a href="{{ route('subkegiatan-pks', $data->id) }}" class="btn bg-gradient-primary">Lihat Subkeg</a>
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
     <form class="modal-content" action="{{ route('ubah-indikator-kegiatan') }}" method="POST">
        @csrf
        <div class="modal-header">
           <h5 class="modal-title">Ubah Data</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <input type="text" hidden name="id_kegiatan" id="id_kegiatan" value="">
           <div class="form-group">
              <label for="nama_indikator">Nama Program</label>
              <textarea type="text" class="form-control" id="nama_kegiatan" disabled value=""></textarea>
           </div>
           <div class="form-group">
              <label for="nama_indikator">Nama Indikator</label>
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

@else

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

@endif

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