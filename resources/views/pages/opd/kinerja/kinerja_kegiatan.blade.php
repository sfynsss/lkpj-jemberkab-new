<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form isi Kinerja Kegiatan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('kinerja-kegiatan-update') }}" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
                @csrf
                <input type="text" class="form-control" name="id" id="id" hidden>
                <div class="form-group row">
                    <div class="col-2">
                        <label>Kode :</label>
                        <input type="text" class="form-control" id="kode_kegiatan" name="kode_kegiatan" disabled>
                    </div>  
                    <div class="col-10">
                        <label>Nama kegiatan :</label>
                        <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" disabled>
                    </div>  
                </div>
                <div class="form-group">
                    <label>Indikator kegiatan :</label>
                    <input type="text" class="form-control text-dark" id="indikator_kegiatan" name="indikator_kegiatan" disabled>
                </div>      
                <div class="form-group row">
                    <div class="col-4">
                        <label>Pagu Anggaran :</label>
                        <input type="text" class="form-control text-dark" id="pagu_indikatif_kegiatan1" name="pagu_indikatif_kegiatan1" disabled>
                    </div>
                    <div class="col-4">
                        <label>Realisasi :</label>
                        <input type="text" class="form-control text-dark" id="realisasi_kegiatan1" name="realisasi_kegiatan1" disabled>
                    </div>
                    <div class="col-4">
                        <label>Target :</label>
                        <input type="text" class="form-control text-dark" id="target_kegiatan1" name="target_kegiatan1" disabled>
                    </div>
                </div>      
                <div class="form-group">
                        <label>Kinerja :</label>
                        <input type="number" class="form-control text-dark" id="kinerja_kegiatan1" name="kinerja_kegiatan1" step=".1" placeholder="Isikan Kinerja kegiatan">
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
    function kinerjaKegiatan($a, $b, $c, $d, $e, $f, $g, $h) 
    {
        $('#link_url').attr('action', '{{ route('kinerja-kegiatan-update') }}');
        $("#id").val($a);
        $("#kode_kegiatan").val($b);
        $("#nama_kegiatan").val($c);
        $("#indikator_kegiatan").val($d);
        $("#pagu_indikatif_kegiatan1").val($e);
        $("#realisasi_kegiatan1").val($f);
        $("#target_kegiatan1").val($g);
        $("#kinerja_kegiatan1").val($h);
    }
</script>