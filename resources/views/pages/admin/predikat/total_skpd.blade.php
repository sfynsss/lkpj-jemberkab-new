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
      <li class="nav-item">SIPPD</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Daftar SKPD</li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Pilih SKPD</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="basic-datatables" class="display table table-striped table-hover" >
              <thead>
                <tr>
                  <th><b>No.</b></th>
                  <th><b>Perangkat Daerah</b></th>
                  <th><b>Persentase Kinerja</b></th>
                  <th><b>Predikat Kinerja</b></th>
                  <th><b>Persentase Anggaran</b></th>
                  <th><b>Predikat Anggaran</b></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>DINAS PENDIDIKAN</td>
                  <td>28.31</td>
                  <td>Sangat Rendah</td>
                  <td>84.25</td>
                  <td>Tinggi</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>DINAS KESEHATAN</td>
                  <td>28.31</td>
                  <td>Sangat Rendah</td>
                  <td>84.25</td>
                  <td>Tinggi</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>RUMAH SAKIT DAERAH (RSD) DR SOEBANDI - BLUD</td>
                  <td>28.31</td>
                  <td>Sangat Rendah</td>
                  <td>84.25</td>
                  <td>Tinggi</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>RUMAH SAKIT DAERAH (RSD) BALUNG - BLUD</td>
                  <td>28.31</td>
                  <td>Sangat Rendah</td>
                  <td>84.25</td>
                  <td>Tinggi</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>RUMAH SAKIT DAERAH (RSD) KALISAT - BLUD</td>
                  <td>28.31</td>
                  <td>Sangat Rendah</td>
                  <td>84.25</td>
                  <td>Tinggi</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>DINAS PEKERJAAN UMUM BINA MARGA DAN SUMBER DAYA AIR</td>
                  <td>28.31</td>
                  <td>Sangat Rendah</td>
                  <td>84.25</td>
                  <td>Tinggi</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>DINAS PERUMAHAN RAKYAT, KAWASAN PERMUKIMAN DAN CIPTA KARYA</td>
                  <td>28.31</td>
                  <td>Sangat Rendah</td>
                  <td>84.25</td>
                  <td>Tinggi</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>SATUAN POLISI PAMONG PRAJA</td>
                  <td>28.31</td>
                  <td>Sangat Rendah</td>
                  <td>84.25</td>
                  <td>Tinggi</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>DINAS SOSIAL</td>
                  <td>28.31</td>
                  <td>Sangat Rendah</td>
                  <td>84.25</td>
                  <td>Tinggi</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>DINAS TENAGA KERJA</td>
                  <td>28.31</td>
                  <td>Sangat Rendah</td>
                  <td>84.25</td>
                  <td>Tinggi</td>
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