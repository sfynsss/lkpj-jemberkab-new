@extends('layouts.app')

@section('content')
<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Kegiatan</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="#">
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
      <li class="nav-item">Daftar SKPD</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Program</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Kegiatan</li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Kegiatan dari Program : {{ $nama_program }}</h4>
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
                  <th><b>Aksi</b></th>
                </tr>
              </thead>
              <tbody>
                @foreach($kegiatan as $v_kegiatan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $v_kegiatan->kode_kegiatan }}</td>
                    <td class="text-left">{{ $v_kegiatan->nama_kegiatan }}</td>
                    <td>{{ $v_kegiatan->indikator_kegiatan }}</td>
                    <td><a href="{{ route('sippd-subkegiatan', $v_kegiatan->id) }}" class="btn btn-sm btn-success"><i class="fas fa-clipboard-check btn-icon-prepend mr-2"></i>Sub-Kegiatan</td>
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