@extends('layouts.app')

@section('content')

<div class="page-inner">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 text-center">
                        <h3 class="text-dark font-weight-bold mb-2">Laporan Kinerja per Urusan</h3>
                        <h4 class="font-weight-normal mb-2">Pemerintah Kabupaten Jember</h4>
                        <h5 class="font-weight-normal mb-2">Tahun 2021</h5>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th><b>No.</b></th>
                                    <th><b>Kode</b></th>
                                    <th><b>Nama SKPD</b></th>
                                    <th><b>Anggaran</b></th>
                                    <th><b>Kinerja</b></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>1.1.1.1</td>
                                    <td>PENDIDIKAN</td>
                                    <td>70.40</td>
                                    <td>99.17</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>1.2.1.1</td>
                                    <td>KESEHATAN</td>
                                    <td>70.40</td>
                                    <td>99.17</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>1.2.1.2</td>
                                    <td>PEKERJAAN UMUM DAN PENATAAN RUANG</td>
                                    <td>70.40</td>
                                    <td>99.17</td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>1.2.1.3</td>
                                    <td>RUMAH SAKIT DAERAH (RSD) BALUNG - BLUD</td>
                                    <td>70.40</td>
                                    <td>99.17</td>
                                  </tr>
                                  <tr>
                                    <td>5</td>
                                    <td>1.2.1.4</td>
                                    <td>PERUMAHAN RAKYAT DAN KAWASAN PEMUKIMAN</td>
                                    <td>70.40</td>
                                    <td>99.17</td>
                                  </tr>
                                  <tr>
                                    <td>6</td>
                                    <td>1.3.1.1</td>
                                    <td>KETENTRAMAN DAN KETERTIBAN UMUM SERTA PERLINDUNGAN</td>
                                    <td>70.40</td>
                                    <td>99.17</td>
                                  </tr>
                                  <tr>
                                    <td>7</td>
                                    <td>1.3.2.1</td>
                                    <td>SOSIAL</td>
                                    <td>70.40</td>
                                    <td>99.17</td>
                                  </tr>
                                  <tr>
                                    <td>8</td>
                                    <td>1.5.1.1</td>
                                    <td>KETENAGAKERJAAN</td>
                                    <td>70.40</td>
                                    <td>99.17</td>
                                  </tr>
                                  <tr>
                                    <td>9</td>
                                    <td>1.6.1.1</td>
                                    <td>PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK/td>
                                    <td>70.40</td>
                                    <td>99.17</td>
                                  </tr>
                                  <tr>
                                    <td>10</td>
                                    <td>2.1.1.1</td>
                                    <td>PANGAN</td>
                                    <td>70.40</td>
                                    <td>99.17</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection