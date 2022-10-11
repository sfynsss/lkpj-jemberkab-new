@extends('layouts.app')

@section('content')
<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Data Program Sasaran</h4>
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
      <li class="nav-item">Daftar Sasaran</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Data Program Sasaran</li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-sm-6">
                    <div class="d-lg-flex align-items-center">
                          <h3 class="text-dark font-weight-bold mb-2">Daftar Program Sasaran</h3>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="d-flex align-items-center justify-content-md-end">
                        <div class="pr-1 mb-3 mb-xl-0">
                            <a href="{{ route('tambah-program-sasaran') }}" class="btn btn-success">
                                Tambah Program
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
                  <th><b>Program</b></th>
                  <th><b>Indikator</b></th>
                  <th><b>Aksi</b></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>1</td>
                    <td>1.01.1</td>
                    <td class="text-left">Program Penunjang Urusan Pemerintahan Daerah Kabupaten / Kota</td>
                    <td class="text-left">Persentase tingkat pemenuhan kebutuhan dasar operasional OPD</td>
                    <td><a href="#!" class="btn btn-danger"><span class="btn-label"><i class="fas fa-trash"></i></span></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>1.01.15</td>
                    <td class="text-left">Program Pengelolaan Pendidikan</td>
                    <td>Jumlah bulan tersedianya anggaran tenaga pendidik dan tenaga kependidikan (PTT,GTT),  pengelola anggaran & barang</td>
                    <td><a href="#!" class="btn btn-danger"><span class="btn-label"><i class="fas fa-trash"></i></span></a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>1.01.16</td>
                    <td class="text-left">Program Pendidik Dan Tenaga Kependidikan</td>
                    <td>Jumlah bulan tersedianya anggaran manajemen Aset/Barang Daerah)</td>
                    <td><a href="#!" class="btn btn-danger"><span class="btn-label"><i class="fas fa-trash"></i></span></a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>1.01.17</td>
                    <td class="text-left">Program Pendidikan Menengah</td>
                    <td>Jumlah bulan tersedianya anggaran Penyediaan  Komponen  Instalasi Listrik/Penerangan Bangunan Kantor</td>
                    <td><a href="#!" class="btn btn-danger"><span class="btn-label"><i class="fas fa-trash"></i></span></a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>1.01.18</td>
                    <td class="text-left">Program Pendidikan Non Formal</td>
                    <td>Tersedianya peralatan dan perlengkapan kantor yang diadakan</td>
                    <td><a href="#!" class="btn btn-danger"><span class="btn-label"><i class="fas fa-trash"></i></span></a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>1.01.2</td>
                    <td class="text-left">Program Peningkatan Sarana dan Prasarana Aparatur</td>
                    <td>Jumlah bulan tersedianya anggaran  Peralatan Rumah Tangga kantor</td>
                    <td><a href="#!" class="btn btn-danger"><span class="btn-label"><i class="fas fa-trash"></i></span></a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>1.01.21</td>
                    <td class="text-left">Program Pengembangan Budaya Baca dan Pembinaan Perpustakaan</td>
                    <td>Jumlah bulan tersedianya anggaran Rapat-Rapat Kordinasi dan Konsultasi ke Luar Daerah dan dalam daerah</td>
                    <td><a href="#!" class="btn btn-danger"><span class="btn-label"><i class="fas fa-trash"></i></span></a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>1.01.22</td>
                    <td class="text-left">Program Manajemen Pelayanan Pendidikan</td>
                    <td>Jumlah bulan tersedianya anggaran Penyediaan Jasa Komunikasi, SumberDaya Air  dan Listrik</td>
                    <td><a href="#!" class="btn btn-danger"><span class="btn-label"><i class="fas fa-trash"></i></span></a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>1.01.23</td>
                    <td class="text-left">Program Peningkatan dan Pengembangan Pengelolaan Keuangan Daerah</td>
                    <td>Jumlah bulan tersedianya anggaran Pemeliharaan Rutin/Berkala Alat Kantor, Alat Rumah Tangga, Komputer</td>
                    <td><a href="#!" class="btn btn-danger"><span class="btn-label"><i class="fas fa-trash"></i></span></a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>1.01.24</td>
                    <td class="text-left">Program Peningkatan Sumberdaya Manusia melalui Beasiswa S-1</td>
                    <td>Jumlah ruang laboratorium komputer beserta perabotnya yang dibangun</td>
                    <td><a href="#!" class="btn btn-danger"><span class="btn-label"><i class="fas fa-trash"></i></span></a></td>
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