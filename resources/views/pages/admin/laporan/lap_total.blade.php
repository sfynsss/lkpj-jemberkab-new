@extends('layouts.app')

@section('content')

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Rekap Laporan</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="#">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Rekap Laporan</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Laporan Total</li>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Pilih Triwulan</h4>
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
                    <th><b>Skpd Awal</b></th>
                    <th><b>Skpd Akhir</b></th>
                    <th><b>Aksi</b></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <form method="POST" action="{{ route('laporan-total-cetak', ['1']) }}">
                      {{ csrf_field() }}
                      <td>1</td>
                      <td>TRIWULAN I</td>
                      <td>
                        <div class="input-group">
                          <input type="date" name="tgl_susun" class="form-control" id="datepicker" name="datepicker">
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <input type="date" name="tgl_setuju" class="form-control" id="datepicker" name="datepicker">
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <input type="number" name="awal" class="form-control">
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <input type="number" name="akhir" class="form-control">
                        </div>
                      </td>
                      <td>
                        <button type="submit" class="btn btn-success"><span class="btn-label"><i class="fas fa-print mr-2"></i>Cetak</span></button>
                      </td>
                    </form>
                  </tr>
                  <tr>
                    <form method="POST" action="{{ route('laporan-total-cetak', ['2']) }}">
                      {{ csrf_field() }}
                      <td>2</td>
                      <td>TRIWULAN II</td>
                      <td>
                        <div class="input-group">
                          <input type="date" name="tgl_susun" class="form-control" id="datepicker" name="datepicker">
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <input type="date" name="tgl_setuju" class="form-control" id="datepicker" name="datepicker">
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <input type="number" name="awal" class="form-control">
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <input type="number" name="akhir" class="form-control">
                        </div>
                      </td>
                      <td>
                        <button type="submit" class="btn btn-success"><span class="btn-label"><i class="fas fa-print mr-2"></i>Cetak</span></button>
                      </td>
                    </form>
                  </tr>
                  <tr>
                    <form method="POST" action="{{ route('laporan-total-cetak', ['3']) }}">
                      {{ csrf_field() }}
                      <td>3</td>
                      <td>TRIWULAN III</td>
                      <td>
                        <div class="input-group">
                          <input type="date" name="tgl_susun" class="form-control" id="datepicker" name="datepicker">
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <input type="date" name="tgl_setuju" class="form-control" id="datepicker" name="datepicker">
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <input type="number" name="awal" class="form-control">
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <input type="number" name="akhir" class="form-control">
                        </div>
                      </td>
                      <td>
                        <button type="submit" class="btn btn-success"><span class="btn-label"><i class="fas fa-print mr-2"></i>Cetak</span></button>
                      </td>
                    </form>
                  </tr>
                  <tr>
                    <form method="POST" action="{{ route('laporan-total-cetak', ['4']) }}">
                      {{ csrf_field() }}
                      <td>4</td>
                      <td>TRIWULAN IV</td>
                      <td>
                        <div class="input-group">
                          <input type="date" name="tgl_susun" class="form-control" id="datepicker" name="datepicker">
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <input type="date" name="tgl_setuju" class="form-control" id="datepicker" name="datepicker">
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <input type="number" name="awal" class="form-control">
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <input type="number" name="akhir" class="form-control">
                        </div>
                      </td>
                      <td>
                        <button type="submit" class="btn btn-success"><span class="btn-label"><i class="fas fa-print mr-2"></i>Cetak</span></button>
                      </td>
                    </form>
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