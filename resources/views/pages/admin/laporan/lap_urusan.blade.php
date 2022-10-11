@extends('layouts.app')

@section('content')

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Daftar Urusan</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="#">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Laporan per Urusan</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Daftar Urusan</li>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Daftar Urusan</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="basic-datatables" class="display table table-striped table-hover" >
              <thead>
                <tr>
                  <th><b>Kode</b></th>
                  <th><b>Nama Urusan</b></th>
                  <th><b>Aksi</b></th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $i => $urusan)
                <tr>
                  <td>{{$urusan->kode_urusan}}</td>
                  <td>{{$urusan->nama_urusan}}</td>
                  <td><a href="{{ route('pilih-triwulan-urusan', $urusan->id) }}" class="btn btn-primary"><i class="fas fa-desktop btn-icon-prepend mr-2"></i>Cetak Laporan</td>
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