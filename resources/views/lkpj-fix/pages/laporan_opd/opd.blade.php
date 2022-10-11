@extends('lkpj-fix.layouts.app')

@section('content')

{{-- <div class="row">
  <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Triwulan I</h4>
        <div class="d-flex justify-content-between">
          <p>Avg. Session</p>
          <p>40 %</p>
        </div>
        <div class="progress progress-md">
          <div class="progress-bar bg-info w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Triwulan II</h4>                      
        <div class="d-flex justify-content-between">
          <p>Avg. Session</p>
          <p>120 %</p>
        </div>
        <div class="progress progress-md">
          <div class="progress-bar bg-success w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Triwulan III</h4>
        <div class="d-flex justify-content-between">
          <p>Avg. Session</p>
          <p>54 %</p>
        </div>
        <div class="progress progress-md">
          <div class="progress-bar bg-danger w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Triwulan IV</h4>
        <div class="d-flex justify-content-between">
          <p>Avg. Session</p>
          <p>143 %</p>
        </div>
        <div class="progress progress-md">
          <div class="progress-bar bg-warning w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
  </div>
</div> --}}

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data SKPD Kabupaten Jember</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive table-bordered">
              <table id="order-listing" class="table">
                <thead>
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
                        <td>{{ $i+1 }}</td>
                        <td>{{ $skpd->kode_skpd }}</td>
                        <td>{{ $skpd->nama_skpd }}</td>
                        <td>
                          @if (Auth::user()->hak_akses != "OPD")
                          <a href="{{ route(''.$judul.'', $skpd->id) }}" class="btn btn-outline-success">Print</a>
                          @else
                            @if ($sts == 1)
                            <a href="{{ route(''.$judul.'', $skpd->id) }}" class="btn btn-outline-success">Print</a>
                            @else
                            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#info-alert-modal">Print</button>
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