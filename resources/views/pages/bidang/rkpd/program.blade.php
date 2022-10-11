@extends('layouts.app')

@section('content')

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">RKPD</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="#">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">RKPD</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Daftar SKPD</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Daftar Program</li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-sm-6">
              <div class="d-lg-flex align-items-center">
                <h3 class="text-dark font-weight-bold mb-2">Daftar Program Tahun <span class="badge badge-primary">2021</span></h3>
              </div>
              <h3 class="text-dark font-weight-bold mb-2">SKPD : {{ $nama }}</h3>
            </div>
            <div class="col-sm-6">
              <div class="d-flex align-items-center justify-content-md-end">
              </div>
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
                  <th><b>Program</b></th>
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
                  <td>{{$data->kode_program}}</td>
                  <td class="text-left">{{$data->nama_program}}</td>
                  <td class="text-left">{{$data->indikator_program}}</td>
                  <td class="text-left">{{$data->target_program1}}</td>
                  <td class="text-left">{{$data->pagu_indikatif_program1}}</td>
                  <td class="text-left">{{$data->prakiraan_maju_program1}}</td>
                  <td>
                    <a href="{{ route('rkpd-kegiatan-bidang', $data->id) }}" class="btn btn-primary" ><i class="fas fa-clipboard-check btn-icon-prepend mr-2"></i>Kegiatan</a>
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