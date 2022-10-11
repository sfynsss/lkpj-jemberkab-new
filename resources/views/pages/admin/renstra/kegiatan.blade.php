@extends('layouts.app')

@section('content')

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Daftar SKPD</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="#">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">RENSTRA</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Daftar SKPD</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">RENSTRA</li>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-sm-6">
                <div class="d-lg-flex align-items-center">
                      <h3 class="text-dark font-weight-bold mb-2">Daftar Kegiatan</h3>
                </div>
            </div>
            <!-- <div class="col-sm-6">
                <div class="d-flex align-items-center justify-content-md-end">
                    <div class="pr-1 mb-3 mb-xl-0">
                        <a href="" class="btn btn-success">
                            Tambah RENSTRA
                            <i class="mdi mdi-file-document btn-icon-append"></i>                          
                        </a>
                    </div>
                </div>
            </div> -->
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
                  <th width="20%"><b>Aksi</b></th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $i => $data)
                <tr>
                    <td>{{$i+1}}</td>
                    <td>{{$data->kode_kegiatan}}</td>
                    <td class="text-left">{{$data->nama_kegiatan}}</td>
                    <td>{{$data->indikator_kegiatan}}</td>
                    <td>
                        <!-- <a href="{{ route('renstra-ubah', $data->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-pen btn-icon-prepend"></i></a> -->
                        <a href="{{ route('renstra-subkegiatan', $data->id) }}" class="btn btn-sm btn-success"><i class="fas fa-clipboard-check btn-icon-prepend mr-2"></i> Sub-Kegiatan</a>
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