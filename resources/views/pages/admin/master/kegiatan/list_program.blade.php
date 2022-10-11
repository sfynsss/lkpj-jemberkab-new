@extends('layouts.app')

@section('content')
<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Master</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="#">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Master</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">List SKPD</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">List Program</li>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-sm-6">
                <div class="d-lg-flex align-items-center">
                  <h4>Daftar Program pada {{$skpd->nama_skpd}}</h4>
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
                    <th><b>Kode Program</b></th>
                    <th><b>Nama Program</b></th>
                    <th width='20%'><b>Aksi</b></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $i => $data)
                  <tr>
                    <td>{{$i+1}}</td>
                    <td>{{$data->kode_program}}</td>
                    <td>{{$data->nama_program}}</td>
                    <td>
                      <a href="{{ route('kegiatan', $data->id) }}" class="btn btn-sm btn-primary"><i class="mdi mdi-file-check btn-icon-prepend"></i> Daftar Kegiatan</a>
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