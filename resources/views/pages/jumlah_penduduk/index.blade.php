@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="box">
      <div class="box-body bg-img" style="background-image: url(../images/bg-5.png);" data-overlay-light="9">
        <div class="d-lg-flex align-items-center justify-content-between">
          <div class="d-md-flex align-items-center mb-30 mb-lg-0 w-p100">
            <img src="{{ asset('LKPJ/images/svg-icon/color-svg/custom-14.svg') }}" class="img-fluid max-w-150" alt="" />
            <div class="ms-30">
              <h3 class="mb-10"><b>Jumlah Penduduk, Luas Wilayah, dan Kepadatan Penduduk <br> per Kecamatan di Kabupaten Jember</b></h3>
            </div>
          </div>
        </div>							
      </div>
    </div>
  </div>
</div>

<div class="row">
    <div class="col-12">
      <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title">Data Tahun : <b>{{ date('Y') }}</b></h4>
          <ul class="box-controls pull-right d-md-flex d-none">
            <li class="dropdown">
                <button class="dropdown-toggle btn btn-primary py-2 px-4" data-bs-toggle="dropdown" href="#">Filter Tahun</button>										  
                <div class="dropdown-menu">
                    @foreach ($tahun as $th)
                        <a href="#" class="dropdown-item">{{ $th }}</a>
                    @endforeach
                </div>
              </li>
          </ul>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered no-wrap">
                  <thead class="bg-gradient-primary-dark text-white text-center">
                      <th>No</th>
                      <th>Kecamatan</th>
                      <th>Jumlah <br> Penduduk</th>
                      <th>Persentase <br> Terhadap Total</th>
                      <th>Luas <br> Wilayah</th>
                      <th>Kepadatan <br> Penduduk</th>
                  </thead>
                  <tbody>
                    @foreach ($data as $dt)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-left">{{ $dt->nama }}</td>
                            @foreach ($dt->JumlahPenduduk as $jml)
                                @if ($jml->tahun == 2023)
                                    <td class="text-center">{{ $jml->jumlah }}</td>
                                    <td class="text-center">{{ $jml->prosentase }}</td>
                                    <td class="text-center">{{ $jml->luas }}</td>
                                    <td class="text-center">{{ $jml->kepadatan }}</td>
                                @endif
                            @endforeach
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
  </div>

@endsection