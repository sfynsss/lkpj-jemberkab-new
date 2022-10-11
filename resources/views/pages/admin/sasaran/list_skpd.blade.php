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
      <li class="nav-item">Sasaran</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Daftar SKPD</li>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Daftar SKPD</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="basic-datatables" class="display table table-striped table-hover" >
              <thead>
                <tr>
                  <th><b>No.</b></th>
                  <th><b>Kode</b></th>
                  <th><b>Nama SKPD</b></th>
                  <th><b>Aksi</b></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>1.1.1.1</td>
                  <td>DINAS PENDIDIKAN</td>
                  <td><a href="{{ route('sasaran') }}" class="btn btn-primary">Sasaran</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>1.2.1.1</td>
                  <td>DINAS KESEHATAN</td>
                  <td><a href="{{ route('sasaran') }}" class="btn btn-primary">Sasaran</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>1.2.1.2</td>
                  <td>RUMAH SAKIT DAERAH (RSD) DR SOEBANDI - BLUD</td>
                  <td><a href="{{ route('sasaran') }}" class="btn btn-primary">Sasaran</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>1.2.1.3</td>
                  <td>RUMAH SAKIT DAERAH (RSD) BALUNG - BLUD</td>
                  <td><a href="{{ route('sasaran') }}" class="btn btn-primary">Sasaran</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>1.2.1.4</td>
                  <td>RUMAH SAKIT DAERAH (RSD) KALISAT - BLUD</td>
                  <td><a href="{{ route('sasaran') }}" class="btn btn-primary">Sasaran</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>1.3.1.1</td>
                  <td>DINAS PEKERJAAN UMUM BINA MARGA DAN SUMBER DAYA AIR</td>
                  <td><a href="{{ route('sasaran') }}" class="btn btn-primary">Sasaran</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>1.3.2.1</td>
                  <td>DINAS PERUMAHAN RAKYAT, KAWASAN PERMUKIMAN DAN CIPTA KARYA</td>
                  <td><a href="{{ route('sasaran') }}" class="btn btn-primary">Sasaran</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>1.5.1.1</td>
                  <td>SATUAN POLISI PAMONG PRAJA</td>
                  <td><a href="{{ route('sasaran') }}" class="btn btn-primary">Sasaran</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>1.6.1.1</td>
                  <td>DINAS SOSIAL</td>
                  <td><a href="{{ route('sasaran') }}" class="btn btn-primary">Sasaran</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>2.1.1.1</td>
                  <td>DINAS TENAGA KERJA</td>
                  <td><a href="{{ route('sasaran') }}" class="btn btn-primary">Sasaran</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection