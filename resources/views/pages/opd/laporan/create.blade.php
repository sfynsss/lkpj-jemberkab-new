<!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <form action="{{ route('simpan-laporan-opd') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Laporan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama SKPD</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="{{ Auth::user()->Skpd->nama_skpd }}" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">File Upload</label>
                    <div class="col-sm-9">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="file_upload" accept=".pdf" required>
                            <p>* Tipe file yang diterima hanya berupa pdf. Nama file tidak diperbolehkan berisi symbol</p>
                            <label class="custom-file-label" for="customFile">Pilih File</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
          </div>
      </form>
  </div>
</div>
</div>
