@extends('layouts.app')

@section('content')

@include('pages.opd.kinerja.kinerja_kegiatan')

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
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-12">
              <div class="d-lg-flex align-items-center">
                <h3 class="text-dark font-weight-bold mb-2">Daftar Kegiatan Tahun <span class="badge badge-primary">2021</span></h3>
              </div>
              <h3 class="text-dark font-weight-bold mb-2">Program : {{ $nama }}</h3>
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
                  <th><b>Kegiatan</b></th>
                  <th><b>Indikator</b></th>
                  <th><b>Target</b></th>
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
                  <td>{{$data->kode_kegiatan}}</td>
                  <td class="text-left">{{$data->nama_kegiatan}}</td>
                  <td class="text-left">{{$data->indikator_kegiatan}}</td>
                  <td class="text-left">{{$data->target_kegiatan1}}</td>
                  <td class="text-left">{{$data->pagu_indikatif_kegiatan1}}</td>
                  <td class="text-left">{{$data->prakiraan_maju_kegiatan1}}</td>
                  <td>
                    {{-- <a href="{{ route('kinerja-subkegiatan-opd', $data->id) }}" class="btn btn-primary" ><i class="fas fa-clipboard-check btn-icon-prepend mr-2"></i>Sub-Kegiatan</a> --}}
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" onclick="kinerjaKegiatan(
                      '{{$data->id}}',
                      '{{$data->kode_kegiatan}}',
                      '{{$data->nama_kegiatan}}',
                      '{{$data->indikator_kegiatan}}',
                      '{{$data->pagu_indikatif_kegiatan1}}',
                      '{{$data->realisasi_kegiatan1}}',
                      '{{$data->target_kegiatan1}}',
                      '{{$data->kinerja_kegiatan1}}'
                      )"><i class="fas fa-file btn-icon-prepend mr-2"></i> Kinerja Kegiatan
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