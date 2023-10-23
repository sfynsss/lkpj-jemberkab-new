@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">
            <div class="row">
                <div class="col">
                    Sub Urusan Dinas Pendidikan
                </div>
                <div class="col-auto">
                    <a href="{{ route('suburusanutama') }}" class="btn btn-success">Tambah Data</a>
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
                      <th>Indikator</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td class="text-center">1</td>
                      <td>Manajemen Pendidikan</td>                      
                      <td class="text-center">
                        <a href="" class="btn btn-danger">Hapus</a>
                      </td>
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