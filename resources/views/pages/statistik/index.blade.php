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
                <h3 class="mb-10"><b>Kategori Laporan @if(Auth::user()->skpd_id == 37) Penjabaran @else Statistik @endif</b></h3>
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
          <h4 class="box-title"><b>Daftar Kategori Laporan</b></h4>
          <h6 class="box-subtitle">Pilih salah satu jenis dibawah ini :</h6>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="tickets" class="table mt-0 table-bordered table-hover no-wrap" data-page-size="10">
                  <thead class="bg-gradient-primary-dark text-white text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Tahun</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $dt)
                    <tr>
                      <td class="text-center">{{ $loop->iteration }}</td>
                      <td>{{ $dt->nama_kategori }}</td>
                      <td>{{ $dt->tahun }}</td>                      
                      <td>{{ $dt->keterangan }}</td>                      
                      <td class="text-center">
                        <a href="{{ route('statistik-show', $dt->id) }}" class="btn bg-gradient-primary">Lihat</a>
                      </td>
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