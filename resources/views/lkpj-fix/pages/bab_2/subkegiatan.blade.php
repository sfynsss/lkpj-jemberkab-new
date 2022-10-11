@extends('lkpj-fix.layouts.app')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Sub-Kegiatan {{ $data[0]->Skpd->nama_skpd }}</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="zero_config" class="table table-striped table-bordered no-wrap">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Sub-Kegiatan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $i => $data)
                  <tr>
                    <td class="text-center">{{ $i+1 }}</td>
                    <td>{{ $data->kode_sub_keg }}</td>
                    <td>{{ $data->nama_sub_keg }}</td>                      
                    <td class="text-center">
                      <a href="{{ route('detail-pks', $data->id) }}" class="btn btn-warning text-white"><i class="typcn typcn-edit"></i>VIEW</a>
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