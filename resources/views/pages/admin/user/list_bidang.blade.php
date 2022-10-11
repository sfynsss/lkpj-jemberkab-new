@extends('layouts.app')

@section('content')
<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">User Bidang</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="#">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">User Bidang</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">List User Bidang</li>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-sm-6">
                <div class="d-lg-flex align-items-center">
                  <h4>Daftar User Bidang</h4>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="d-flex align-items-center justify-content-md-end">
                  <div class="pr-1 mb-3 mb-xl-0">

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
                    <th><b>Nama</b></th>
                    <th><b>Username</b></th>
                    <th width='20%'><b>Aksi</b></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $i)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$i->nama}}</td>
                    <td>{{$i->username}}</td>
                    <td><a href="{{ route('edit-user', $i->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-pen btn-icon-prepend"></i> Edit User</a>
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