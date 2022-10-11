@extends('layouts.app')

@section('content')

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Prioritas Nasional</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="#">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Prioritas Nasional</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Daftar Program</li>
      <li class="separator">
          <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">Daftar Kegiatan</li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">Daftar Sub-Kegiatan</li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-12">
              <div class="d-lg-flex align-items-center">
                <h3 class="text-dark font-weight-bold mb-2">Daftar Sub Kegiatan</h3>
              </div>
              <h3 class="text-dark font-weight-bold mb-2">Kegiatan : {{ $nama }}</h3>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="basic-datatables" class="display table table-striped table-hover" >
              <thead>
                <tr>
                  <th><b>No.</b></th>
                  <th><b>Kode</b></th>
                  <th style="width: 40%"><b>Sub-Kegiatan</b></th>
                  <th style="width: 20%"><b>Prioritas Nasional</b></th>
                  <th><b>Aksi</b></th>
                </tr>
              </thead>
              <tbody>
                @php($i = 1)
                @foreach($data as $data)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$data->kode_sub_keg}}</td>
                  <td class="text-left">{{$data->nama_sub_keg}}</td>
                  <td>
                    @if($data->prioritas_nasional == "")
                    <i>kosong</i>
                    @else
                    {{$data->prioritas_nasional}}
                    @endif
                  </td>
                  <td>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"                            
                    onclick="storePrioritas(
                      '{{$data->id}}',
                      '{{$data->nama_sub_keg}}',
                      '{{$data->prioritas_nasional}}',
                      )"><i class="fas fa-check-circle btn-icon-prepend mr-2"></i> Prioritas Nasional
                      </button>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('prioritas-store-opd') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
            @csrf
            <input type="text" class="form-control" name="id" id="id" hidden>
            <div class="form-group">
              <label for="defaultSelect">Nama Sub-Kegiatan</label>
              <textarea type="text" class="form-control" rows="3" name="nama_sub_keg" id="nama_sub_keg" readonly></textarea>
            </div>
            <div class="form-group">
            <label for="defaultSelect">Pilih Prioritas Nasional</label>
            <select class="form-control form-control" name="prioritas_nasional">
              @foreach($prioritas as $v_prioritas)
              <option value="{{ $v_prioritas->nama_prioritas }}">{{ $v_prioritas->nama_prioritas }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="modal-footer">
            <hr>
            <button data-dismiss="modal" class="btn btn-light mr-2">Batal</button>
            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
        </div>
    </form>
    </div>
  </div>
</div>

<script>
  function storePrioritas($a, $b, $c) 
  {
      $('#link_url').attr('action', '{{ route('prioritas-store-opd') }}');
      $("#id").val($a);
      $("#nama_sub_keg").val($b);
      $("#prioritas_nasional").val($c);
  }
</script>

@endsection