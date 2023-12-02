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
              <h3 class="mb-10"><b>Tugas Pembantuan</b></h3>
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
          <h4 class="box-title">SKPD : <b>{{ Auth::user()->skpd->nama_skpd }}</b></h4>
          {{-- <ul class="box-controls pull-right d-md-flex d-none">
            <button class="btn btn-primary btn-sm px-4 py-2" data-bs-toggle="modal" data-bs-target=".modal-tambah-kebijakan">Tambah Data</button>
            <a href="{{ route('kebijakan-strategis-export') }}" class="btn btn-success btn-sm px-4 py-2 me-2"><i class="fa fas fa-print"></i> Cetak Excel</a>
          </ul> --}}
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table class="table table-striped table-bordered no-wrap">
                  <thead class="bg-gradient-primary-dark text-white text-center">
                      <th>Dasar Hukum</th>
                      <th>Instansi Pemberi <br> Tugas Pembantuan</th>
                      <th>Instansi Penerima <br> Tugas Pembantuan</th>
                      <th>Fungsi</th>
                      <th>Sub Fungsi</th>
                      <th>Sub Kegiatan</th>
                      <th>Pagu</th>
                      <th>Realisasi</th>
                      <th>Jangka Waktu Pelaksanaan</th>
                      <th>Permasalahan</th>
                      <th>Solusi</th>
                      <th>Keterangan</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center" colspan="12"><i>Data tidak tersedia</i></td>
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

@endsection