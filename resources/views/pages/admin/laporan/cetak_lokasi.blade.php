@extends('layouts.app')

@section('content')

<div class="page-inner">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
            <div class="card-body">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Urusan/Program/Kegiatan/Sub-Kegiatan</th>
                                        <th>Anggaran</th>
                                        <th>Realisasi</th>
                                        <th>Lokasi</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <tr style="background-color:#fafafa"><td colspan="6">DINAS PENDIDIKAN</td></tr>
                                    <tr>
                                        <th scope="row" class="text-center">1</th>
                                        <td class="text-center">1.01</td>
                                        <td>PENDIDIKAN</td>
                                        <td class="text-right">375.245.673.484</td>
                                        <td class="text-right"></td>
                                        <td></td>
                                    </tr>
                                    <tr style="background-color:#bdbdbd">
                                        <th scope="row" class="text-center">1</th>
                                        <td class="text-center">1.01.1</td>
                                        <td>Program Pelayanan Administrasi Perkantoran</td>
                                        <td class="text-right">5.602.529.500</td>
                                        <td class="text-right">3.262.536.234</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center">1</th>
                                        <td class="text-center">1.01.1.1</td>
                                        <td>Penyediaan Alat Tulis Kantor</td>
                                        <td class="text-right">403.800.000</td>
                                        <td class="text-right">238.172.987</td>
                                        <td>Kabupaten Jember</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center">2</th>
                                        <td class="text-center">1.01.1.1</td>
                                        <td>Penyediaan Jasa Komunikasi, Sumber Daya Air dan Listrik</td>
                                        <td class="text-right">403.800.000</td>
                                        <td class="text-right">238.172.987</td>
                                        <td>Kabupaten Jember</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center">3</th>
                                        <td class="text-center">1.01.1.1</td>
                                        <td>Penyediaan Barang Cetakan dan Penggandaan</td>
                                        <td class="text-right">403.800.000</td>
                                        <td class="text-right">238.172.987</td>
                                        <td>Kabupaten Jember</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center">4</th>
                                        <td class="text-center">1.01.1.1</td>
                                        <td>Penyediaan Bahan Bacaan dan Peraturan Perundang-Undangan</td>
                                        <td class="text-right">403.800.000</td>
                                        <td class="text-right">238.172.987</td>
                                        <td>Kabupaten Jember</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center">5</th>
                                        <td class="text-center">1.01.1.1</td>
                                        <td>Penyediaan Makanan dan Minuman</td>
                                        <td class="text-right">403.800.000</td>
                                        <td class="text-right">238.172.987</td>
                                        <td>Kabupaten Jember</td>
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