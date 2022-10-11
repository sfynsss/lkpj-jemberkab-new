@extends('layouts.app')

@section('content')
<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Sasaran</h4>
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
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Sasaran</li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-sm-6">
                <div class="d-lg-flex align-items-center">
                      <h3 class="text-dark font-weight-bold mb-2">Daftar Sasaran</h3>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="d-flex align-items-center justify-content-md-end">
                    <div class="pr-1 mb-3 mb-xl-0">
                        <a href="{{ route('tambah-sasaran') }}" class="btn btn-success">
                            Tambah Data Sasaran
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
                  <th><b>Sasaran</b></th>
                  <th><b>Jumlah Program</b></th>
                  <th><b>Aksi</b></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>1</td>
                    <td class="text-left">Program Penunjang Urusan Pemerintahan Daerah Kabupaten / Kota</td>
                    <td class="text-left">2</td>
                    <td>
                      <a href="{{ route('program-sasaran') }}" class="btn btn-success"><span class="btn-label"><i class="fas fa-plus-square"></i></span> Tambah Program</a>
                      <a href="{{ route('ubah-sasaran') }}" class="btn btn-warning"><i class="fas fa-file-alt"></i> Ubah Sasaran</a>
                      <a href="#!" class="btn btn-danger"><span class="btn-label"><i class="fas fa-trash"></i></span></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td class="text-left">Program Penunjang Urusan Pemerintahan Daerah Kabupaten / Kota</td>
                    <td class="text-left">2</td>
                    <td>
                      <a href="{{ route('program-sasaran') }}" class="btn btn-success"><span class="btn-label"><i class="fas fa-plus-square"></i></span> Tambah Program</a>
                      <a href="{{ route('ubah-sasaran') }}" class="btn btn-warning"><i class="fas fa-file-alt"></i> Ubah Sasaran</a>
                      <a href="#!" class="btn btn-danger"><span class="btn-label"><i class="fas fa-trash"></i></span></a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td class="text-left">Program Penunjang Urusan Pemerintahan Daerah Kabupaten / Kota</td>
                    <td class="text-left">2</td>
                    <td>
                      <a href="{{ route('program-sasaran') }}" class="btn btn-success"><span class="btn-label"><i class="fas fa-plus-square"></i></span> Tambah Program</a>
                      <a href="{{ route('ubah-sasaran') }}" class="btn btn-warning"><i class="fas fa-file-alt"></i> Ubah Sasaran</a>
                      <a href="#!" class="btn btn-danger"><span class="btn-label"><i class="fas fa-trash"></i></span></a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td class="text-left">Program Penunjang Urusan Pemerintahan Daerah Kabupaten / Kota</td>
                    <td class="text-left">2</td>
                    <td>
                      <a href="{{ route('program-sasaran') }}" class="btn btn-success"><span class="btn-label"><i class="fas fa-plus-square"></i></span> Tambah Program</a>
                      <a href="{{ route('ubah-sasaran') }}" class="btn btn-warning"><i class="fas fa-file-alt"></i> Ubah Sasaran</a>
                      <a href="#!" class="btn btn-danger"><span class="btn-label"><i class="fas fa-trash"></i></span></a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td class="text-left">Program Penunjang Urusan Pemerintahan Daerah Kabupaten / Kota</td>
                    <td class="text-left">2</td>
                    <td>
                      <a href="{{ route('program-sasaran') }}" class="btn btn-success"><span class="btn-label"><i class="fas fa-plus-square"></i></span> Tambah Program</a>
                      <a href="{{ route('ubah-sasaran') }}" class="btn btn-warning"><i class="fas fa-file-alt"></i> Ubah Sasaran</a>
                      <a href="#!" class="btn btn-danger"><span class="btn-label"><i class="fas fa-trash"></i></span></a>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td class="text-left">Program Penunjang Urusan Pemerintahan Daerah Kabupaten / Kota</td>
                    <td class="text-left">2</td>
                    <td>
                      <a href="{{ route('program-sasaran') }}" class="btn btn-success"><span class="btn-label"><i class="fas fa-plus-square"></i></span> Tambah Program</a>
                      <a href="{{ route('ubah-sasaran') }}" class="btn btn-warning"><i class="fas fa-file-alt"></i> Ubah Sasaran</a>
                      <a href="#!" class="btn btn-danger"><span class="btn-label"><i class="fas fa-trash"></i></span></a>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td class="text-left">Program Penunjang Urusan Pemerintahan Daerah Kabupaten / Kota</td>
                    <td class="text-left">2</td>
                    <td>
                      <a href="{{ route('program-sasaran') }}" class="btn btn-success"><span class="btn-label"><i class="fas fa-plus-square"></i></span> Tambah Program</a>
                      <a href="{{ route('ubah-sasaran') }}" class="btn btn-warning"><i class="fas fa-file-alt"></i> Ubah Sasaran</a>
                      <a href="#!" class="btn btn-danger"><span class="btn-label"><i class="fas fa-trash"></i></span></a>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td class="text-left">Program Penunjang Urusan Pemerintahan Daerah Kabupaten / Kota</td>
                    <td class="text-left">2</td>
                    <td>
                      <a href="{{ route('program-sasaran') }}" class="btn btn-success"><span class="btn-label"><i class="fas fa-plus-square"></i></span> Tambah Program</a>
                      <a href="{{ route('ubah-sasaran') }}" class="btn btn-warning"><i class="fas fa-file-alt"></i> Ubah Sasaran</a>
                      <a href="#!" class="btn btn-danger"><span class="btn-label"><i class="fas fa-trash"></i></span></a>
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td class="text-left">Program Penunjang Urusan Pemerintahan Daerah Kabupaten / Kota</td>
                    <td class="text-left">2</td>
                    <td>
                      <a href="{{ route('program-sasaran') }}" class="btn btn-success"><span class="btn-label"><i class="fas fa-plus-square"></i></span> Tambah Program</a>
                      <a href="{{ route('ubah-sasaran') }}" class="btn btn-warning"><i class="fas fa-file-alt"></i> Ubah Sasaran</a>
                      <a href="#!" class="btn btn-danger"><span class="btn-label"><i class="fas fa-trash"></i></span></a>
                    </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td class="text-left">Program Penunjang Urusan Pemerintahan Daerah Kabupaten / Kota</td>
                    <td class="text-left">2</td>
                    <td>
                      <a href="{{ route('program-sasaran') }}" class="btn btn-success"><span class="btn-label"><i class="fas fa-plus-square"></i></span> Tambah Program</a>
                      <a href="{{ route('ubah-sasaran') }}" class="btn btn-warning"><i class="fas fa-file-alt"></i> Ubah Sasaran</a>
                      <a href="#!" class="btn btn-danger"><span class="btn-label"><i class="fas fa-trash"></i></span></a>
                    </td>
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