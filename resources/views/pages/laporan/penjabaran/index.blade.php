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
                <h5 class="mb-10">Kategori Laporan : </h5>
                <h4 class="mb-10"><b>{{ $data[0]->Kategori->nama_kategori }} {{ $data[0]->Kategori->keterangan }}</b></h4>
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
          <h4 class="box-title">Data Tahun : <b>{{ $data[0]->tahun }}</b></h4>
          <ul class="box-controls pull-right d-md-flex d-none">
            <li class="dropdown">
                <button class="dropdown-toggle btn btn-primary py-2 px-4" data-bs-toggle="dropdown" href="#">Filter Tahun</button>										  
                <div class="dropdown-menu">
                    @foreach ($tahun as $th)
                        <a href="{{ route('laporan-penjabaran-detail', [$data[0]->kategori_id, $th]) }}" class="dropdown-item">{{ $th }}</a>
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
                      <th>Uraian</th>
                      <th>Anggaran</th>
                      <th>Realisasi</th>
                      <th>Prosentase</th>
                      <th>Sisa Lebih / Kurang</th>
                      <th>Aksi</th>
                  </thead>
                  <tbody>
                    @foreach ($data as $dt)
                        <tr>
                            <td class="text-left">{{ $dt->kode_data }}</td>
                            <td class="text-left">{{ $dt->nama_data }}</td>
                            <td class="text-center">Rp. {{ number_format($dt->anggaran,0,',','.') }}</td>
                            <td class="text-center">Rp. {{ number_format($dt->realisasi,0,',','.') }}</td>
                            <td class="text-center">{{ $dt->prosentase }}%</td>
                            <td class="text-center">Rp. {{ number_format($dt->sisa,0,',','.') }}</td>
                            <td class="text-center">
                              @if ($dt->urutan != 0)
                              <button class="waves-effect waves-warning btn btn-warning btn-circle btn-sm" 
                                data-bs-toggle="modal" data-bs-target=".modal-ubah-penjabaran" 
                                onclick="insertTextPenjabaran('{{ $dt->id }}', '{{ $dt->nama_data }}', 
                                '{{ $dt->anggaran }}', '{{ $dt->realisasi }}',
                                '{{ $dt->prosentase }}', '{{ $dt->sisa }}');">
                                <span class="fa fa-edit fs-18"></span>
                              </button>
                              @endif
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

<div class="modal fade modal-ubah-penjabaran" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <form class="modal-content" action="#" method="POST">
      <div class="modal-header">
        <h4 class="modal-title" id="myLargeModalLabel">Form Ubah Data Penjabaran</h4>
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
          <label class="form-label">Anggaran</label>
          <input type="number" class="form-control" id="anggaran" name="anggaran" min="0" step=".01">
        </div>
        <div class="form-group"">
          <label class="form-label">Realisasi</label>
          <input type="number" class="form-control" id="realisasi" name="realisasi" min="0" max="100" step=".01">
        </div>
        <div class="form-group"">
          <label class="form-label">%</label>
          <input type="number" class="form-control" id="prosentase" name="prosentase" min="0" step=".01" readonly>
        </div>
        <div class="form-group"">
          <label class="form-label">Sisa Lebih / Kurang</label>
          <input type="number" class="form-control" id="sisa" name="sisa" min="0" step=".01" readonly>
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
  function insertTextPenjabaran($a,$b,$c,$d,$e,$f)
  {
      document.getElementById('id_data').value = $a;
      document.getElementById('nama_data').value = $b;
      document.getElementById('anggaran').value = $c;
      document.getElementById('realisasi').value = $d;
      document.getElementById('prosentase').value = $e;
      document.getElementById('sisa').value = $f;
  }
</script>

@endsection