@extends('layouts.app')

@section('content')

@include('pages.opd.sippd.detail_subkegiatan')

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">SIPPD</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="{{ route('dashboard-opd') }}">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">SIPPD</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>

      <li class="nav-item">Daftar Program</li>
      <li class="separator">
          <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Daftar Kegiatan</li>
      <li class="separator">
          <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Daftar Sub-Kegiatan</li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-12">
              <div class="d-lg-flex align-items-center">
                <h3 class="text-dark font-weight-bold mb-2">Daftar Sub Kegiatan</h3>
              </div>
              <h3 class="text-dark font-weight-bold mb-2">Kegiatan : {{ $nama }}</h3>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="basic-datatables" class="display table table-striped table-hover" >
              <thead>
                <tr>
                  <th><b>No.</b></th>
                  <th><b>Kode</b></th>
                  <th><b>Sub-Kegiatan</b></th>
                  <th><b>Aksi</b></th>
                </tr>
              </thead>
              <tbody>
                @php($i = 1)
                @foreach($data as $data)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$data->kode_sub_keg}}</td>
                  <td class="text-left">{{$data->nama_sub_keg}}</td>
                  <td>
                    <button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#exampleModal"                            
                    onclick="insertText(
                      '{{$data->nama_sub_keg}}',
                      '{{$data->indikator_sub_keg}}',
                      '{{$data->target_kinerja1}}',
                      '{{$data->pagu_indikatif_sub_keg_1}}',
                      '{{$data->prakiraan_maju_sub_keg_1}}',
                      '{{$data->realisasi_sub_keg_1_1}}',
                      '{{$data->serapan_sub_keg_1_1}}',
                      '{{$data->kinerja_sub_keg_1_1}}',
                      '{{$data->target_kinerja2}}',
                      '{{$data->pagu_indikatif_sub_keg_2}}',
                      '{{$data->prakiraan_maju_sub_keg_2}}',
                      '{{$data->realisasi_sub_keg_1_2}}',
                      '{{$data->serapan_sub_keg_1_2}}',
                      '{{$data->kinerja_sub_keg_1_2}}',
                      '{{$data->target_kinerja3}}',
                      '{{$data->pagu_indikatif_sub_keg_3}}',
                      '{{$data->prakiraan_maju_sub_keg_3}}',
                      '{{$data->realisasi_sub_keg_1_3}}',
                      '{{$data->serapan_sub_keg_1_3}}',
                      '{{$data->kinerja_sub_keg_1_3}}',
                      '{{$data->target_kinerja4}}',
                      '{{$data->pagu_indikatif_sub_keg_4}}',
                      '{{$data->prakiraan_maju_sub_keg_4}}',
                      '{{$data->realisasi_sub_keg_1_4}}',
                      '{{$data->serapan_sub_keg_1_4}}',
                      '{{$data->kinerja_sub_keg_1_4}}',
                      '{{$data->target_kinerja5}}',
                      '{{$data->pagu_indikatif_sub_keg_5}}',
                      '{{$data->prakiraan_maju_sub_keg_5}}',
                      '{{$data->realisasi_sub_keg_5}}',
                      '{{$data->serapan_sub_keg_5}}',
                      '{{$data->kinerja_sub_keg_5_1}}',
                      '{{$data->target_kinerja6}}',
                      '{{$data->pagu_indikatif_sub_keg_6}}',
                      '{{$data->prakiraan_maju_sub_keg_6}}',
                      '{{$data->realisasi_sub_keg_6}}',
                      '{{$data->serapan_sub_keg_6}}',
                      '{{$data->kinerja_sub_keg_6}}',
                      '{{$data->papbd_sub_keg}}',
                      '{{$data->prioritas_nasional}}',
                      '{{$data->masalah_sub_keg_1_1}}',
                      '{{$data->solusi_sub_keg_1_1}}',
                      '{{$data->masalah_sub_keg_1_2}}',
                      '{{$data->solusi_sub_keg_1_2}}',
                      '{{$data->masalah_sub_keg_1_3}}',
                      '{{$data->solusi_sub_keg_1_3}}',
                      '{{$data->masalah_sub_keg_1_4}}',
                      '{{$data->solusi_sub_keg_1_4}}',
                      '{{$data->masalah_sub_keg_5}}',
                      '{{$data->solusi_sub_keg_5}}',
                      '{{$data->masalah_sub_keg_6}}',
                      '{{$data->solusi_sub_keg_6}}'
                      )"><i class="fas fa-eye btn-icon-prepend mr-2"></i> Lihat Rincian
                    </button>
                    <a href="{{ route('sippd-subkegiatan-opd-edit', $data->id) }}" class="btn btn-warning"><i class="fas fa-pen btn-icon-prepend mr-2"></i>Ubah Data</a>
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



@endsection