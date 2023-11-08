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
                      <th>%</th>
                      <th>Sisa Lebih / Kurang</th>
                  </thead>
                  <tbody>
                    @foreach ($data as $dt)
                        <tr>
                            <td class="text-center">{{ $dt->kode_data }}</td>
                            <td class="text-left">{{ $dt->nama_data }}</td>
                            <td class="text-center">{{ $dt->anggaran }}</td>
                            <td class="text-center">{{ $dt->realisasi }}</td>
                            <td class="text-center">{{ $dt->prosentase }}</td>
                            <td class="text-center">{{ $dt->sisa }}</td>
                            {{-- <td class="text-center">
                                @if ($dt->id == 1)
                                    <a href="{{ route('indikator-kependudukan') }}" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="fa fa-file fs-18"></span></a>
                                @elseif($dt->id == 2)
                                    <a href="{{ route('jumlah-penduduk') }}" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="fa fa-file fs-18"></span></a>
                                @else
                                    @if (Auth::user()->skpd_id == 36)
                                    <a href="{{ route('laporan-statistik-detail', $dt->id) }}" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="fa fa-file fs-18"></span></a>
                                    @elseif (Auth::user()->skpd_id == 37)
                                      <a href="{{ route('laporan-penjabaran-detail', $dt->id) }}" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="fa fa-file fs-18"></span></a>
                                    @endif
                                @endif
                                <button class="waves-effect waves-warning btn btn-warning-light btn-circle" data-bs-toggle="modal" data-bs-target=".modal-ubah-kategori" onclick="insertTextKebijakan('{{ $dt->id }}', '{{ $dt->nama_kategori }}', '{{ $dt->tahun }}', '{{ $dt->keterangan }}');"><span class="fa fa-edit fs-18"></span></button>
                            </td> --}}
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

@endsection