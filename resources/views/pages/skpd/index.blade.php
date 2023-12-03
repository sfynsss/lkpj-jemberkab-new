@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="box">
      <div class="box-body bg-img" style="background-image: url(../images/bg-5.png);" data-overlay-light="9">
        <div class="d-lg-flex align-items-center justify-content-between">
          <div class="d-md-flex align-items-center mb-30 mb-lg-0 w-p100">
            <img src="{{ asset('LKPJ/images/svg-icon/color-svg/custom-14.svg') }}" class="img-fluid max-w-150" alt="" />
            @isset($judul)
            <div class="ms-30">
                <h3 class="mb-10 fw-bold">Pilih SKPD untuk menu : {{ $judul }}</h3>
            </div>
            @endisset
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
        <ul class="box-controls pull-right d-md-flex d-none">
            @isset($link_export)
            <a href="{{ route($link_export) }}" target="_blank" class="btn btn-danger btn-sm px-4 py-2 me-2"><i class="fa fas fa-file"></i> Export PDF</a>
                
            @endisset
            <form class="me-2">
                <div class="input-group">
                  <input type="search" id="myInput" class="form-control" placeholder="Cari nama SKPD ..." autocomplete="off" onkeyup="myFunction()">
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
                    <th style="width: 10%">Kode SKPD</th>
                    <th style="width: 60%">Nama SKPD</th>
                    <th style="width: 25%">Aksi</th>
                  </tr>
                </thead>
                <tbody id="myUL">
                  @foreach ($data as $dt)
                  <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $dt->kode_skpd }}</td>
                    <td>{{ $dt->nama_skpd }}</td>                      
                    <td class="text-center">
                      <a href="{{ route($link, $dt->id) }}" class="btn bg-gradient-primary">
                        <i class="fa fa-home me-1"></i>
                        Lihat Data
                      </a>
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