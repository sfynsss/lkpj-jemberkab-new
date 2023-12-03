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
              <h3 class="mb-10"><b>Tugas Pembantuan</b></h3>
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
          <h4 class="box-title">SKPD : <b>{{ Auth::user()->skpd->nama_skpd }}</b></h4>
          <ul class="box-controls pull-right d-md-flex d-none">
            <a href="{{ route('tugas-pembantuan-create') }}" class="btn btn-primary btn-sm px-4 py-2 me-2"><i class="fa fas fa-plus-circle"></i> Tambah Data</a>
            <a href="{{ route('tugas-pembantuan-export') }}" target="_blank" class="btn btn-danger btn-sm px-4 py-2 me-2"><i class="fa fas fa-file"></i> Export PDF</a>
          </ul>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table class="table table-striped table-bordered">
                  <thead class="bg-gradient-primary-dark text-white text-center">
                    <tr>
                      <th rowspan="2">Dasar Hukum</th>
                      <th rowspan="2">Instansi Pemberi <br> Tugas Pembantuan</th>
                      <th rowspan="2">Instansi Penerima <br> Tugas Pembantuan</th>
                      <th colspan="2">Fungsi</th>
                      <th colspan="2">Sub Fungsi</th>
                      <th colspan="2">Sub Kegiatan</th>
                      <th rowspan="2">Pagu</th>
                      <th rowspan="2">Realisasi</th>
                      <th rowspan="2">Jangka Waktu Pelaksanaan</th>
                      <th rowspan="2">No SIP DPA</th>
                      <th rowspan="2">Permasalahan</th>
                      <th rowspan="2">Solusi</th>
                      <th rowspan="2">Keterangan</th>
                      <th rowspan="2">Aksi</th>
                    </tr>
                    <tr>
                      <th>Kode</th>
                      <th>Nama</th>
                      <th>Kode</th>
                      <th>Nama</th>
                      <th>Kode</th>
                      <th>Nama</th>
                    </tr>
                    <tr>
                      <th>1</th>
                      <th>2</th>
                      <th>3</th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th>4</th>
                      <th></th>
                      <th>5</th>
                      <th>6</th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th>7</th>
                      <th>8</th>
                      <th>9</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($data as $dt)
                    <tr>
                      <td>{{ $dt->dasar_hukum }}</td>
                      <td>{{ $dt->pemberi_tugas }}</td>
                      <td>{{ $dt->penerima_tugas }}</td>
                      <td>{{ $dt->kode_fungsi }}</td>
                      <td>{{ $dt->nama_fungsi }}</td>
                      <td>{{ $dt->kode_subfungsi }}</td>
                      <td>{{ $dt->nama_subfungsi }}</td>
                      <td>{{ $dt->Subkegiatan->kode_subkegiatan }}</td>
                      <td>{{ $dt->Subkegiatan->nama_subkegiatan }}</td>
                      <td>{{ App\SubkegiatanTahun::where('subkegiatan_id', $dt->subkegiatan_id)->where('tahun', date('Y'))->pluck('pagu_indikatif')->first() }}</td>
                      <td>{{ App\SubkegiatanTahun::where('subkegiatan_id', $dt->subkegiatan_id)->where('tahun', date('Y'))->pluck('realisasi_anggaran')->first() }}</td>
                      <td>{{ $dt->waktu_pelaksanaan }}</td>
                      <td>{{ $dt->no_sp_dipa }}</td>
                      <td>{{ $dt->permasalahan }}</td>
                      <td>{{ $dt->solusi }}</td>
                      <td>{{ $dt->keterangan }}</td>
                      <td>
                        <a href="{{ route('tugas-pembantuan-edit', $dt->id) }}" class="btn btn-warning btn-sm btn-circle"><i class="fas fa fa-edit"></i></a>
                        <a href="{{ route('tugas-pembantuan-delete', $dt->id) }}" class="btn btn-danger btn-sm btn-circle" title="Hapus" onclick="if (confirm('Apakah Anda yakin untuk menghapus?')){return true;}else{event.stopPropagation(); event.preventDefault();};"><span class="fa fa-trash fs-18"></span></a>
                      </td>
                    </tr>
                    @empty                        
                    <tr>
                      <td class="text-center" colspan="16"><i>Data tidak tersedia</i></td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection