@extends('layouts.app')

@section('content')

@include('pages.opd.kinerja.detail_subkegiatan')

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Kinerja</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="#">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Kinerja</li>
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
                <h3 class="text-dark font-weight-bold mb-2">Daftar Sub Kegiatan Tahun <span class="badge badge-primary">2021</span></h3>
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
                  <th><b>Nama Sub-Kegiatan</b></th>
                  <th><b>Pagu Anggaran</b></th>
                  <th><b>Prakiraan Maju</b></th>
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
                  <td class="text-left">{{$data->pagu_indikatif_sub_keg_1}}</td>
                  <td class="text-left">{{$data->prakiraan_maju_sub_keg_1}}</td>
                  <td class="text-center">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="insertText(
                      '{{$data->nama_sub_keg}}',
                      '{{$data->indikator_sub_keg}}',
                      '{{$data->target_sub_keg_1}}',
                      '{{$data->pagu_indikatif_sub_keg_1}}',
                      '{{$data->prakiraan_maju_sub_keg_1}}',
                      '{{$data->kinerja_sub_keg_1_1}}',
                      '{{$data->realisasi_sub_keg_1_1}}',
                      '{{$data->serapan_sub_keg_1_1}}',
                      '{{$data->masalah_sub_keg_1_1}}',
                      '{{$data->solusi_sub_keg_1_1}}',
                      '{{$data->papbd_sub_keg}}',
                      '{{$data->prioritas_nasional}}'
                      )"><i class="fas fa-eye btn-icon-prepend mr-2"></i> Rincian
                    </button>
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