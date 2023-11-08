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
              <h5 class="mb-10">Kategori Laporan : </h5>
              <h4 class="mb-10"><b>{{ $data[0]->Kategori->nama_kategori }} {{ $data[0]->Kategori->keterangan }}</b></h4>
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
                <table class="table table-striped table-bordered no-wrap">
                  <thead class="bg-gradient-primary-dark text-white text-center">
                      <th>No</th>
                      <th>Uraian</th>
                      <th>2017</th>
                      <th>2018</th>
                      <th>2019</th>
                      <th>2020</th>
                      <th>2021</th>
                      <th>2022</th>
                      <th>2023</th>
                  </thead>
                  <tbody>
                    @foreach ($data as $dt)
                        <tr>
                            <td class="text-center">{{ $dt->kode_data }}</td>
                            <td class="text-left">{{ $dt->nama_data }}</td>
                            <td class="text-center">{{ $dt->th_2017 }}</td>
                            <td class="text-center">{{ $dt->th_2018 }}</td>
                            <td class="text-center">{{ $dt->th_2019 }}</td>
                            <td class="text-center">{{ $dt->th_2020 }}</td>
                            <td class="text-center">{{ $dt->th_2021 }}</td>
                            <td class="text-center">{{ $dt->th_2022 }}</td>
                            <td class="text-center">{{ $dt->th_2023 }}</td>
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