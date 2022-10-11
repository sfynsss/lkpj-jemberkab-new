@extends('layouts.app')

@section('content')
@include('pages.admin.master.program.tambah_program')
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
              <div class="col-sm-6">
                <div class="d-flex align-items-center justify-content-md-end">
                  <div class="pr-1 mb-3 mb-xl-0">
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal_tambah" onclick="tambah();">
                      Tambah Data Program
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
                    <th><b>Kode Bagian</b></th>
                    <th><b>Kode Program</b></th>
                    <th><b>Nama Program</b></th>
                    <th width='20%'><b>Aksi</b></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $i => $data)
                  <tr>
                    <td>{{$i+1}}</td>
                    <td>{{ \App\BidangUrusan::where(['id' => $data->id_bidang_urusan])->pluck('kode_bidang_urusan')->first() }}</td>
                    <td>{{$data->kode_program}}</td>
                    <td>{{$data->nama_program}}</td>
                    <td>
                      <a href="#" class="btn btn-sm btn-warning"  data-toggle="modal" data-target="#modal_tambah" onclick="ubah('{{$data->id}}', '{{ \App\BidangUrusan::where(['id' => $data->id_bidang_urusan])->pluck('id')->first() }}', '{{$data->kode_program}}', '{{$data->nama_program}}');"><i class="fas fa-pen btn-icon-prepend"></i></a>&nbsp;&nbsp;
                      <a href="{{ route('hapus-program', $data->id) }}" class="btn btn-sm btn-danger" onclick="if (confirm('Apakah Anda yakin untuk menghapus?')){return true;}else{event.stopPropagation(); event.preventDefault();};"><i class="fas fa-trash btn-icon-prepend"></i></a>
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
      $('#form-program').attr('action', '{{route('simpan-program')}}');
      document.getElementById("id_bidang_urusan").selectedIndex = "0";
      $("#kode_program").val("");
      $("#nama_program").val("");
    }

    function ubah($id_program, $id_bidang_urusan, $kode_program, $nama_program) {
      $('#form-program').attr('action', '{{route('ubah-program')}}');
      document.getElementById("id_bidang_urusan").selectedIndex = $id_bidang_urusan;
      $("#id_program").val($id_program);
      $("#kode_program").val($kode_program);
      $("#nama_program").val($nama_program);
    }
  </script>
  @endsection