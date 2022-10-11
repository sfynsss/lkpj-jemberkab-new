@extends('layouts.app')

@section('content')
@include('pages.admin.master.bidang.tambah_bidang')
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
      <li class="nav-item">List Bidang Urusan</li>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-sm-6">
                <div class="d-lg-flex align-items-center">
                  <h4>Daftar Bidang Urusan</h4>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="d-flex align-items-center justify-content-md-end">
                  <div class="pr-1 mb-3 mb-xl-0">
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal_tambah" onclick="tambah();">
                      Tambah Data Bidang Urusan
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
                    <th><b>Kode Urusan</b></th>
                    <th><b>Kode Bidang</b></th>
                    <th><b>Nama Bidang</b></th>
                    <th width='20%'><b>Aksi</b></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $i => $data)
                  <tr>
                    <td>{{$i+1}}</td>
                    <td>{{ \App\Urusan::where(['id' => $data->id_urusan])->pluck('kode_urusan')->first() }}</td>
                    <td>{{$data->kode_bidang_urusan}}</td>
                    <td class="text-left">{{$data->nama_bidang_urusan}}</td>
                    <td>
                      <a href="#" class="btn btn-sm btn-warning"  data-toggle="modal" data-target="#modal_tambah" onclick="ubah('{{$data->id}}', '{{\App\Urusan::where(['id' => $data->id_urusan])->pluck('id')->first()}}', '{{$data->kode_bidang_urusan}}', '{{$data->nama_bidang_urusan}}');"><i class="fas fa-pen btn-icon-prepend"></i></a>&nbsp;&nbsp;
                      <a href="{{ route('hapus-bidang', $data->id) }}" class="btn btn-sm btn-danger" onclick="if (confirm('Apakah Anda yakin untuk menghapus?')){return true;}else{event.stopPropagation(); event.preventDefault();};"><i class="fas fa-trash btn-icon-prepend"></i></a>
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
      $('#form-bidang').attr('action', '{{route('simpan-bidang')}}');
      document.getElementById("id_urusan").selectedIndex = "0";
      $("#kode_bidang_urusan").val("");
      $("#nama_bidang_urusan").val("");
    }

    function ubah($id_bidang_urusan, $id_urusan, $kode_bidang_urusan, $nama_bidang_urusan) {
      $('#form-bidang').attr('action', '{{route('ubah-bidang')}}');
      $("#id_bidang_urusan").val($id_bidang_urusan);
      document.getElementById("id_urusan").selectedIndex = $id_urusan;
      $("#kode_bidang_urusan").val($kode_bidang_urusan);
      $("#nama_bidang_urusan").val($nama_bidang_urusan);
    }
  </script>
  @endsection