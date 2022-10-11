@extends('layouts.app')

@section('content')

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Sasaran</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="#">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Sasaran</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Daftar Sasaran</li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">Tambah Sasaran Program</li>
    </ul>
  </div>
  @if ($message = Session::get('success'))
  <div class="alert alert-success alert-block"><button type="button" class="close" data-dismiss="alert">×</button>{{ $message }}</div>
  @elseif ($message = Session::get('warning'))
  <div class="alert alert-warning alert-block"><button type="button" class="close" data-dismiss="alert">×</button>{{ $message }}</div>
  @elseif ($message = Session::get('danger'))
  <div class="alert alert-danger alert-block"><button type="button" class="close" data-dismiss="alert">×</button>{{ $message }}</div>
  @endif
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-sm-8">
              <div class="d-lg-flex align-items-center">
                <h3 class="text-dark font-weight-bold mb-2">Daftar Program di Sasaran :</h3>
              </div>
              <h3 class="text-dark font-weight-bold mb-2">{{ $sasaran->sasaran }}</h3>
            </div>
            <div class="col-sm-4">
              <div class="d-flex align-items-center justify-content-md-end">
                  <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Tambah Program Sasaran</button>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="basic-datatables" class="display table table-striped table-hover" >
              <thead class="text-center">
                <tr>
                  <th><b>No.</b></th>
                  <th><b>Kode</b></th>
                  <th><b>Nama Program</b></th>
                  <th><b>Aksi</b></th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $v_data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $v_data->kode_program }}</td>
                    <td>{{ $v_data->nama_program }}</td>
                    <td class="text-center">
                      <a href="{{ route('sasaran-program-delete-opd', $v_data->id) }}" class="btn btn-danger" 
                        onclick="if (confirm('Hapus Sasaran Terpilih?')){
                            return true;
                            } else {
                                event.stopPropagation(); event.preventDefault();
                        };"><i class="mdi mdi-delete"></i> Hapus Program dari Sasaran</a>
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
      <form action="{{ route('sasaran-program-store-opd') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
            @csrf
            <div class="form-group">
            <input type="text" class="form-control" name="id_sasaran" id="id_sasaran" value="{{ $sasaran->id }}" hidden>
            <label for="defaultSelect">Nama Program</label>
            <select class="form-control form-control" name="id_program">
              @foreach($program as $v_program)
              <option value={{ $v_program->id }}>{{ $v_program->kode_program }} . {{ $v_program->nama_program }}</option>
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
  function storeProgram($a, $b) 
  {
      $('#link_url').attr('action', '{{ route('sasaran-program-store-opd') }}');
      $("#id_sasaran").val($a);
      $("#id_program").val($b);
  }
</script>

@endsection