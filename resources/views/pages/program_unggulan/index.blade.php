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
              <h3 class="mb-10 fw-bold">Program, Kegiatan, Sub-Kegiatan</h3>
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
        <h4 class="box-title">
          <b>Daftar Sub-Kegiatan : </b>
          <h6 class="box-subtitle text-fade">{{ Auth::user()->SKPD->nama_skpd }}</h6>
        </h4>
        <ul class="box-controls text-end">
          <a class="btn btn-success btn-sm fw-bold" href="{{ route('program-unggulan-export') }}">
            <i class="fa fa-print me-1"><span class="path1"></span><span class="path2"></span></i>
            Cetak Capaian Pelaksanaan
          </a>
          <form class="me-2">
            <div class="input-group">
              <input type="search" id="myInput" class="form-control" placeholder="Cari nama sub ..." autocomplete="off" onkeyup="myFunction()">
            </div>
          </form>
        </ul>
      </div>
      <div class="box-body">
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="myTable" class="table table-bordered no-wrap">
                <thead class="bg-gradient-primary-dark text-white text-center">
                  <tr>
                    <th style="width: 5%">No</th>
                    <th style="width: 10%">Kode</th>
                    <th style="width: 75%">Nama Sub-Kegiatan</th>
                    <th style="width: 10%">Aksi</th>
                  </tr>
                </thead>
                <tbody id="myUL">
                  @forelse ($data as $dt)
                  <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $dt->kode_subkegiatan }}</td>
                    <td>{{ $dt->nama_subkegiatan }}</td>                      
                    <td class="text-center">
                      <a href="{{ route('program-unggulan-show', $dt->id) }}" class="btn btn-sm bg-gradient-primary">
                        <i class="fa fa-edit me-1"><span class="path1"></span><span class="path2"></span></i>
                        Edit
                      </a>
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="4" class="text-centter"><i>Data tidak ditemukan</i></td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@push('script')
<script>
  function myFunction() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
  
    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[2];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }
</script>
@endpush

@endsection