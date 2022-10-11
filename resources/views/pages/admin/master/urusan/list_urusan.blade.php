@extends('layouts.app')

@section('content')
@include('pages.admin.master.urusan.import_urusan')
@include('pages.admin.master.urusan.tambah_urusan')
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
      <li class="nav-item">Master</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">List Urusan</li>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-sm-6">
                <div class="d-lg-flex align-items-center">
                  <h4>Daftar Urusan</h4>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="d-flex align-items-center justify-content-md-end">
                  <div class="pr-1 mb-3 mb-xl-0">
                    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modal_import">
                      Import Data Urusan
                      <i class="mdi mdi-file-document btn-icon-append"></i>                          
                    </a>
                  </div>
                  <div class="pr-1 mb-3 mb-xl-0">
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal_tambah" onclick="tambah();">
                      Tambah Data Urusan
                      <i class="mdi mdi-file-document btn-icon-append"></i>                          
                    </a>
                  </div>
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
                    <th><b>Nama Urusan</b></th>
                    <th><b>Aksi</b></th>
                  </tr>
                </thead>
                <tbody>
                  @php($i = 1)
                  @foreach($data as $data)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$data->kode_urusan}}</td>
                    <td>{{$data->nama_urusan}}</td>
                    <td>
                      <a href="#" class="btn btn-sm btn-warning"  data-toggle="modal" data-target="#modal_tambah" onclick="ubah('{{$data->id}}', '{{$data->kode_urusan}}', '{{$data->nama_urusan}}');"><i class="fas fa-pen btn-icon-prepend"></i></a>&nbsp;&nbsp;
                      <a href="{{ route('hapus-urusan', $data->id) }}" class="btn btn-sm btn-danger" onclick="if (confirm('Apakah Anda yakin untuk menghapus?')){return true;}else{event.stopPropagation(); event.preventDefault();};"><i class="fas fa-trash btn-icon-prepend"></i></a>
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

  @section('script')
  <script>
    function tambah() {
      $('#form-urusan').attr('action', '{{route('simpan-urusan')}}');
      $("#kode_urusan").val("");
      $("#nama_urusan").val("");
    }

    function ubah($id_urusan, $kode_urusan, $nama_urusan) {
      $('#form-urusan').attr('action', '{{route('ubah-urusan')}}');
      $("#id_urusan").val($id_urusan);
      $("#kode_urusan").val($kode_urusan);
      $("#nama_urusan").val($nama_urusan);
    }
  </script>
  @endsection