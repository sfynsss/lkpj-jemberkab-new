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
              <h3 class="mb-10"><b>Kategori Laporan</b></h3>
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
        <div class="box-body">
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered no-wrap">
                  <thead class="bg-gradient-primary-dark text-white text-center">
                      <th>No</th>
                      <th>Nama Kategori</th>
                      <th>Hingga Tahun</th>
                      <th>Keterangan</th>
                      <th>Aksi</th>
                  </thead>
                  <tbody>
                    @foreach ($data as $dt)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-left">{{ $dt->nama_kategori }}</td>
                            <td class="text-center">{{ $dt->tahun }}</td>
                            <td class="text-center">{{ $dt->keterangan }}</td>
                            <td class="text-center">
                                @if ($dt->id == 1)
                                    <a href="{{ route('indikator-kependudukan') }}" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="fa fa-file fs-18"></span></a>
                                @elseif($dt->id == 2)
                                    <a href="{{ route('jumlah-penduduk') }}" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="fa fa-file fs-18"></span></a>
                                @else
                                    @if (Auth::user()->skpd_id == 36)
                                    <a href="{{ route('laporan-statistik-detail', $dt->id) }}" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="fa fa-file fs-18"></span></a>
                                    @elseif (Auth::user()->skpd_id == 37)
                                      @if ($dt->id == 21)
                                        <a href="{{ route('perkembangan-apbd') }}" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="fa fa-file fs-18"></span></a>
                                      @else
                                        <a href="{{ route('laporan-penjabaran-detail', [$dt->id, date('Y')]) }}" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="fa fa-file fs-18"></span></a>
                                      @endif
                                    @endif
                                @endif
                                <button class="waves-effect waves-warning btn btn-warning-light btn-circle" data-bs-toggle="modal" data-bs-target=".modal-ubah-kategori" onclick="insertTextKebijakan('{{ $dt->id }}', '{{ $dt->nama_kategori }}', '{{ $dt->tahun }}', '{{ $dt->keterangan }}');"><span class="fa fa-edit fs-18"></span></button>
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

<div class="modal fade modal-ubah-kategori" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <form class="modal-content" action="{{ route('laporan-kategori-update') }}" method="POST">
      <div class="modal-header">
        <h4 class="modal-title" id="myLargeModalLabel">Form Ubah Kategori Laporan</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @csrf
        <div class="form-group">
          <label class="form-label">Nama Kategori</label>
          <input type="number" id="id_kategori" name="id_kategori" required hidden>
          <input type="text" id="nama_kategori" name="nama_kategori" class="form-control" required>
        </div>
        <div class="form-group">
          <label class="form-label">Tahun Berjalan</label>
          <input type="number" id="tahun" name="tahun" class="form-control" min="2017" max="{{ date('Y') }}" required>
        </div>
        <div class="form-group">
          <label class="form-label">Keterangan</label>
          <input type="text" id="keterangan" name="keterangan" class="form-control" required>
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
  function insertTextKebijakan($a, $b, $c, $d){
    document.getElementById('id_kategori').value = $a;
    document.getElementById('nama_kategori').value = $b;
    document.getElementById('tahun').value = $c;
    document.getElementById('keterangan').value = $d;
  }
</script>



@endsection