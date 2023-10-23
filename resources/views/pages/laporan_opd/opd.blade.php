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
              <h3 class="mb-10"><b>Cetak Laporan {{ ucwords(strtoupper($judul)) }}</b></h3>
            </div>
          </div>
        </div>							
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="box-header with-border">						
        <h4 class="box-title">
            <b>Daftar SKPD</b>
            <small class="subtitle">Pilih SKPD untuk mencetak laporan {{ $judul }}</small>
        </h4>
    </div>
      <div class="card-body">
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="zero_config" class="table table-bordered no-wrap">
                <thead class="bg-gradient-primary-dark text-white text-center">
                  <tr>
                      <th>No</th>
                      <th>Kode</th>
                      <th>Nama SKPD</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $i => $skpd)
                      <tr>
                        <td class="text-center">{{ $i+1 }}</td>
                        <td class="text-center">{{ $skpd->kode_skpd }}</td>
                        <td>{{ $skpd->nama_skpd }}</td>
                        <td class="text-center">
                          @if (Auth::user()->hak_akses != "OPD" || Auth::user()->username == "501501")
                          <a href="{{ route(''.$judul.'', $skpd->id) }}" class="btn bg-gradient-secondary">Print</a>
                          @else
                            @if ($sts == 1)
                            <a href="{{ route(''.$judul.'', $skpd->id) }}" class="btn bg-gradient-secondary">Print</a>
                            @else
                            <button type="button" class="btn bg-gradient-danger" data-toggle="modal" data-target="#info-alert-modal">Print</button>
                            @endif
                          @endif
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

<div id="info-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-body p-4">
              <div class="text-center">
                  <i class="dripicons-information h1 text-info"></i>
                  <h4 class="mt-2"><b>Mohon Maaf</b></h4>
                  <p class="mt-3">
                    Harap menunggu persetujuan untuk mencetak laporan
                  </p>
                  <button type="button" class="btn btn-info my-2"
                      data-dismiss="modal">Tutup</button>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection