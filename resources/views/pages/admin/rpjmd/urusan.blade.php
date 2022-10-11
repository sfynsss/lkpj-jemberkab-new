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
      <li class="nav-item">RPJMD</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Tambah Program</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Urusan</li>
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
                    <th><b>No.</b></th>
                    <!-- <th><b>Kode</b></th> -->
                    <th><b>Urusan</b></th>
                    <th><b>Aksi</b></th>
                  </tr>
                </thead>
                <tbody>
                  @php($i = 1)
                  @foreach($data as $data)
                  <tr>
                    <td>{{$i++}}</td>
                    <!-- <td>{{$data->kode_urusan}}</td> -->
                    <td>{{$data->nama_urusan}}</td>
                    <td>
                      <a href="{{ route('rpjm-bidang', $data->id) }}" class="btn btn-primary"><i class="mdi mdi-file-check btn-icon-prepend"></i>Bidang Urusan</a>
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