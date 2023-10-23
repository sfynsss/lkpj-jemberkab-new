@extends('layouts.app')

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
        <h4 class="card-title">Data Program OPD : {{ $data[0]->Skpd->nama_skpd }}</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="zero_config" class="table table-striped table-bordered no-wrap">
                <thead>
                  <tr>
                      <th>No</th>
                      <th>Kode</th>
                      <th>Program</th>
                      <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $i => $program)
                      <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{ $program->kode_program }}</td>
                        <td>{{ $program->nama_program }}</td>
                        <td>
                          <a href="{{ route('kegiatan-lkpj', $program->id) }}" class="btn btn-outline-primary">View</a>
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