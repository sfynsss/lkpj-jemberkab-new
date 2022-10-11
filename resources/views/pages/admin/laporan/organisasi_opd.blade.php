@extends('layouts.app')

@section('content')

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Daftar Organisasi</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="#">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Laporan per Organisasi</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Daftar Organisasi</li>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Daftar Organisasi</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="basic-datatables" class="display table table-striped table-hover" >
              <thead>
                <tr>
                  <th><b>No.</b></th>
                  <th><b>Kode</b></th>
                  <th><b>Nama Urusan</b></th>
                  <th><b>Aksi</b></th>
                </tr>
              </thead>
              <tbody>
                @foreach($skpd as $i => $skpd)
                <tr>
                  <td>{{$i+1}}</td>
                  <td>{{$skpd->kode_skpd}}</td>
                  <td>{{$skpd->nama_skpd}}</td>
                  <td><a href="{{ route('laporan-organisasi', $skpd->id) }}" class="btn btn-primary"><i class="fas fa-desktop btn-icon-prepend mr-2"></i>Cetak Laporan</td>
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