<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form isi Kinerja Program</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('kinerja-program-update') }}" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
                @csrf
                <input type="text" class="form-control" name="id" id="id" hidden>
                <div class="form-group row">
                    <div class="col-2">
                        <label>Kode :</label>
                        <input type="text" class="form-control" id="kode_program" name="kode_program" disabled>
                    </div>  
                    <div class="col-10">
                        <label>Nama Program :</label>
                        <input type="text" class="form-control" id="nama_program" name="nama_program" disabled>
                    </div>  
                </div>
                <div class="form-group">
                    <label>Indikator Program :</label>
                    <input type="text" class="form-control text-dark" id="indikator_program" name="indikator_program" disabled>
                </div>      
                <div class="form-group row">
                    <div class="col-4">
                        <label>Pagu Anggaran :</label>
                        <input type="text" class="form-control text-dark" id="pagu_indikatif_program1" name="pagu_indikatif_program1" disabled>
                    </div>
                    <div class="col-4">
                        <label>Realisasi :</label>
                        <input type="text" class="form-control text-dark" id="realisasi_program1" name="realisasi_program1" disabled>
                    </div>
                    <div class="col-4">
                        <label>Target :</label>
                        <input type="text" class="form-control text-dark" id="target_program1" name="target_program1" disabled>
                    </div>
                </div>      
                <div class="form-group">
                        <label>Kinerja :</label>
                        <input type="number" class="form-control text-dark" id="kinerja_program1" name="kinerja_program1" step=".1" placeholder="Isikan Kinerja Program">
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
    function kinerjaProgram($a, $b, $c, $d, $e, $f, $g, $h) 
    {
        $('#link_url').attr('action', '{{ route('kinerja-program-update') }}');
        $("#id").val($a);
        $("#kode_program").val($b);
        $("#nama_program").val($c);
        $("#indikator_program").val($d);
        $("#pagu_indikatif_program1").val($e);
        $("#realisasi_program1").val($f);
        $("#target_program1").val($g);
        $("#kinerja_program1").val($h);
    }
</script>