@extends('layouts.app')

@section('content')

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Sub-Kegiatan RKPD</h4>
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
      <li class="nav-item">Program</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Kegiatan</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Sub-Kegiatan</li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-sm-6">
              <div class="d-lg-flex align-items-center">
                <h3 class="text-dark font-weight-bold mb-2">Kegiatan : {{ \App\Kegiatan::where('id', $data[0]->id_kegiatan)->pluck('nama_kegiatan')->first() }}</h3>
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
                  <th><b>Nama Sub-Kegiatan</b></th>
                  <th><b>Aksi</b></th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $i => $data)
                <tr>
                  <td>{{$i+1}}</td>
                  <td>{{$data->kode_sub_keg}}</td>
                  <td class="text-left">{{$data->nama_sub_keg}}</td>
                  <td>
                    <a href="{{ route('rkpd-ubah', $data->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-pen btn-icon-prepend mr-2"></i> Ubah Data</a>
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