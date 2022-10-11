@extends('layouts.app')

@section('content')
@include('pages.admin.master.subkegiatan.tambah_subkegiatan')
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
                  <h4>Daftar Subkegiatan</h4>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="d-flex align-items-center justify-content-md-end">
                  <div class="pr-1 mb-3 mb-xl-0">
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal_tambah" onclick="tambah();">
                      Tambah Data Subkegiatan
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
                    <th><b>Nama Subkegiatan</b></th>
                    <th><b>Aksi</b></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $i => $data)
                  <tr>
                    <td>{{$i+1}}</td>
                    <td>{{$data->kode_sub_keg}}</td>
                    <td>{{$data->nama_sub_keg}}</td>
                    <td>
                      <a href="#" class="btn btn-sm btn-warning"  data-toggle="modal" data-target="#modal_tambah" onclick="ubah('{{$data->id}}', '{{$data->kode_sub_keg}}', '{{$data->nama_sub_keg}}');"><i class="fas fa-pen btn-icon-prepend"></i></a>&nbsp;&nbsp;
                      <a href="{{ route('hapus-subkegiatan', $data->id) }}" class="btn btn-sm btn-danger" onclick="if (confirm('Apakah Anda yakin untuk menghapus?')){return true;}else{event.stopPropagation(); event.preventDefault();};"><i class="fas fa-trash btn-icon-prepend"></i></a>
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
      $('#form-subkegiatan').attr('action', '{{route('simpan-subkegiatan')}}');
      $("#kode_subkegiatan").val("");
      $("#nama_subkegiatan").val("");
    }

    function ubah($id_subkegiatan, $kode_subkegiatan, $nama_subkegiatan) {
      $('#form-subkegiatan').attr('action', '{{route('ubah-subkegiatan')}}');
      $("#id_subkegiatan").val($id_subkegiatan);
      $("#kode_subkegiatan").val($kode_subkegiatan);
      $("#nama_subkegiatan").val($nama_subkegiatan);
    }
  </script>
  @endsection