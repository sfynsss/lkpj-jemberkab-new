@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="box">
      <div class="box-body bg-img" style="background-image: url(../images/bg-5.png);" data-overlay-light="9">
        <div class="d-lg-flex align-items-center justify-content-between">
          <div class="d-md-flex align-items-center mb-30 mb-lg-0 w-p100">
            <img src="{{ asset('LKPJ/images/svg-icon/color-svg/custom-14.svg') }}" class="img-fluid max-w-150" alt="" />
            <div class="ms-30">
              <h3 class="mb-10"><b>Jumlah Penduduk, Luas Wilayah, dan Kepadatan Penduduk <br> per Kecamatan di Kabupaten Jember</b></h3>
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
        <h4 class="box-title">Data Tahun : <b>{{ date('Y') }}</b></h4>
        <ul class="box-controls pull-right d-md-flex d-none">
          <li class="dropdown">
              <button class="dropdown-toggle btn btn-primary py-2 px-4" data-bs-toggle="dropdown" href="#">Filter Tahun</button>										  
              <div class="dropdown-menu">
                  @foreach ($tahun as $th)
                      <a href="#" class="dropdown-item">{{ $th }}</a>
                  @endforeach
              </div>
            </li>
        </ul>
      </div>
      <div class="box-body">
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="zero_config" class="table table-striped table-bordered no-wrap">
                <thead class="bg-gradient-primary-dark text-white text-center">
                    <th>No</th>
                    <th>Kecamatan</th>
                    <th>Jumlah <br> Penduduk</th>
                    <th>Persentase <br> Terhadap Total</th>
                    <th>Luas <br> Wilayah</th>
                    <th>Kepadatan <br> Penduduk</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                  @foreach ($data as $dt)
                      <tr>
                          <td class="text-center">{{ $loop->iteration }}</td>
                          <td class="text-left">{{ $dt->nama }}</td>
                          @foreach ($dt->JumlahPenduduk as $jml)
                              @if ($jml->tahun == 2023)
                                  <td class="text-center">{{ $jml->jumlah }}</td>
                                  <td class="text-center">{{ $jml->prosentase }}</td>
                                  <td class="text-center">{{ $jml->luas }}</td>
                                  <td class="text-center">{{ $jml->kepadatan }}</td>
                                  <td class="text-center">
                                    <button class="waves-effect waves-warning btn btn-warning btn-sm" 
                                            data-bs-toggle="modal" data-bs-target=".modal-ubah-penduduk" 
                                            onclick="insertTextIndikator('{{ $jml->id }}', 'Kecamatan {{ $jml->Kecamatan->nama }} Tahun {{ $jml->tahun }}', 
                                            '{{ $jml->jumlah }}', '{{ $jml->prosentase }}',
                                            '{{ $jml->luas }}', '{{ $jml->kepadatan }}');">
                                            <span class="fa fa-edit fs-18"></span>
                                    </button>
                                </td>
                              @endif
                          @endforeach
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

<div class="modal fade modal-ubah-penduduk" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <form class="modal-content" action="{{ route('indikator-kependudukan-update') }}" method="POST">
      <div class="modal-header">
        <h4 class="modal-title" id="myLargeModalLabel">Form Ubah Data Statistik Kependudukan</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @csrf
        <input type="number" id="id_data" name="id_data" required hidden>
        <div class="form-group">
          <label class="form-label">Nama Data</label>
          <input type="text" class="form-control" id="nama_data" readonly>
        </div>
        <div class="form-group"">
          <label class="form-label">Jumlah Penduduk</label>
          <input type="number" class="form-control" id="jumlah" name="jumlah" min="0" step=".01">
        </div>
        <div class="form-group"">
          <label class="form-label">Prosentase Terhadap Total</label>
          <input type="number" class="form-control" id="prosentase" name="prosentase" min="0" max="100" step=".01">
        </div>
        <div class="form-group"">
          <label class="form-label">Luas</label>
          <input type="number" class="form-control" id="luas" name="luas" min="0" step=".01">
        </div>
        <div class="form-group"">
          <label class="form-label">Kepadatan Penduduk</label>
          <input type="number" class="form-control" id="kepadatan" name="kepadatan" min="0" step=".01">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-warning float-end">Ubah Data</button>
        <button type="button" class="btn btn-light float-end" data-bs-dismiss="modal">Tutup</button>
      </div>
    </form>
  </div>
</div>

<script>
  function insertTextIndikator($a,$b,$c,$d,$e,$f)
  {
      document.getElementById('id_data').value = $a;
      document.getElementById('nama_data').value = $b;
      document.getElementById('jumlah').value = $c;
      document.getElementById('prosentase').value = $d;
      document.getElementById('luas').value = $e;
      document.getElementById('kepadatan').value = $f;
  }
</script>

@endsection