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
                <h3><b>Rincian Laporan :</b></h3>
                <h4 class="mb-10">{{ $kategori->nama_kategori }}</h4>
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
      <div class="box-body">
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table class="table mt-0 table-bordered table-hover no-wrap">
                <thead class="bg-gradient-primary-dark text-white text-center">
                  <tr>
                      <th>No/Kode</th>
                      <th>Nama/Uraian/Keterangan</th>
                      <th>Tahun 2017</th>
                      <th>Tahun 2018</th>
                      <th>Tahun 2019</th>
                      <th>Tahun 2020</th>
                      <th>Tahun 2021</th>
                      <th>Tahun 2022</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $dt)
                  <tr>
                    <td class="text-center">{{ $dt->kode_data == null ? '-' : $dt->kode_data }}</td>
                    <td>{{ $dt->nama_data }}</td>
                    <td class="text-center"><button type="button" class="btn {{ $dt->th_2017 == 0 ? 'btn-danger' : 'btn-light' }} btn-sm"><b>{{ $dt->th_2017 }}</b></button></td>
                    <td class="text-center"><button type="button" class="btn {{ $dt->th_2018 == 0 ? 'btn-danger' : 'btn-light' }} btn-sm"><b>{{ $dt->th_2018 }}</b></button></td>
                    <td class="text-center"><button type="button" class="btn {{ $dt->th_2019 == 0 ? 'btn-danger' : 'btn-light' }} btn-sm"><b>{{ $dt->th_2019 }}</b></button></td>
                    <td class="text-center"><button type="button" class="btn {{ $dt->th_2020 == 0 ? 'btn-danger' : 'btn-light' }} btn-sm"><b>{{ $dt->th_2020 }}</b></button></td>
                    <td class="text-center"><button type="button" class="btn {{ $dt->th_2021 == 0 ? 'btn-danger' : 'btn-light' }} btn-sm"><b>{{ $dt->th_2021 }}</b></button></td>
                    <td class="text-center"><button type="button" class="btn {{ $dt->th_2022 == 0 ? 'btn-danger' : 'btn-light' }} btn-sm"><b>{{ $dt->th_2022 }}</b></button></td>
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