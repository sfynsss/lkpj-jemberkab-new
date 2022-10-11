@extends('lkpj-fix.layouts.app')

@section('content')

<div class="row">
  <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Triwulan I</h4>
        <div class="d-flex justify-content-between">
          <p>Kinerja</p>
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
          <p>Kinerja</p>
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
          <p>Kinerja</p>
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
          <p>Kinerja</p>
          <p>143 %</p>
        </div>
        <div class="progress progress-md">
          <div class="progress-bar bg-warning w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">
          <div class="row">
            <div class="col">
              Capaian Kinerja {{ $nama_skpd->nama_skpd }}
            </div>
            <div class="col-auto">
              {{-- <a href="{{ route('tambah-capaian', $nama_skpd->id) }}" class="btn btn-success">Tambah Data</a> --}}
            </div>
          </div>
        </h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="zero_config" class="table table-striped table-bordered no-wrap">
                <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th class="text-left">Uraian</th>
                    <th>Satuan</th>
                    <th>2021</th>
                    <th>2022</th>
                    <th>2023</th>
                    <th>2024</th>
                    <th>2025</th>
                    @if (Auth::user()->hak_akses != 'BIDANG')
                    <th>Action</th>
                    @endif
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $i => $indikator)
                  <tr>
                    <td class="text-center">{{ $i+1 }}</td>
                    <td class="text-left">{{ $indikator->indikator }}</td>     
                    <td class="text-center">{{ $indikator->satuan }}</td>                 
                    <td class="text-center">{{ $indikator->capaian_1 }}</td>
                    <td class="text-center">{{ $indikator->capaian_2 }}</td>
                    <td class="text-center">{{ $indikator->capaian_3 }}</td>
                    <td class="text-center">{{ $indikator->capaian_4 }}</td>
                    <td class="text-center">{{ $indikator->capaian_5 }}</td>
                    @if (Auth::user()->hak_akses != 'BIDANG')
                    <td class="text-center">
                      <a href="{{ route('edit-capaian', $indikator->id) }}" class="btn btn-warning text-white">Ubah</a>
                      <a href="{{ route('hapus-capaian', $indikator->id) }}" class="btn btn-danger" onclick="if (confirm('Apakah Anda yakin untuk menghapus?')){return true;}else{event.stopPropagation(); event.preventDefault();};">Hapus</a>
                    </td>
                    @endif
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