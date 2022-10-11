@extends('layouts.app')

@section('content')

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Laporan per Urusan</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="#">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Laporan per Urusan</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Daftar Urusan</li>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Daftar Urusan</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="basic-datatables" class="display table table-striped table-hover" >
                <thead>
                  <tr>
                    <th><b>No.</b></th>
                    <th><b>Triwulan</b></th>
                    <th><b>Tgl Susunan</b></th>
                    <th><b>Tgl Setuju</b></th>
                    <th><b>Aksi</b></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>TRIWULAN I</td>
                    <td>
                      <div class="input-group">
                        <input type="date" class="form-control" id="datepicker" name="datepicker" placeholder="Tanggal Disetujui">
                      </div>
                    </td>
                    <td>
                      <div class="input-group">
                        <input type="date" class="form-control" id="datepicker" name="datepicker" placeholder="Tanggal Disetujui">
                      </div>
                    </td>
                    <td>
                      <a href="{{ route('laporan-urusan-cetak', [$urusan->id, '1']) }}" class="btn btn-success"><span class="btn-label"><i class="fas fa-print mr-2"></i>Cetak</span></a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>TRIWULAN II</td>
                    <td>
                      <div class="input-group">
                        <input type="date" class="form-control" id="datepicker" name="datepicker" placeholder="Tanggal Disetujui">
                      </div>
                    </td>
                    <td>
                      <div class="input-group">
                        <input type="date" class="form-control" id="datepicker" name="datepicker" placeholder="Tanggal Disetujui">
                      </div>
                    </td>
                    <td>
                      <a href="{{ route('laporan-urusan-cetak', [$urusan->id, '2']) }}" class="btn btn-success"><span class="btn-label"><i class="fas fa-print mr-2"></i>Cetak</span></a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>TRIWULAN III</td>
                    <td>
                      <div class="input-group">
                        <input type="date" class="form-control" id="datepicker" name="datepicker" placeholder="Tanggal Disetujui">
                      </div>
                    </td>
                    <td>
                      <div class="input-group">
                        <input type="date" class="form-control" id="datepicker" name="datepicker" placeholder="Tanggal Disetujui">
                      </div>
                    </td>
                    <td>
                      <a href="{{ route('laporan-urusan-cetak', [$urusan->id, '3']) }}" class="btn btn-success"><span class="btn-label"><i class="fas fa-print mr-2"></i>Cetak</span></a>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>TRIWULAN IV</td>
                    <td>
                      <div class="input-group">
                        <input type="date" class="form-control" id="datepicker" name="datepicker" placeholder="Tanggal Disetujui">
                      </div>
                    </td>
                    <td>
                      <div class="input-group">
                        <input type="date" class="form-control" id="datepicker" name="datepicker" placeholder="Tanggal Disetujui">
                      </div>
                    </td>
                    <td>
                      <a href="{{ route('laporan-urusan-cetak', [$urusan->id, '4']) }}" class="btn btn-success"><span class="btn-label"><i class="fas fa-print mr-2"></i>Cetak</span></a>
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