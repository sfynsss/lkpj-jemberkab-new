<div class="modal fade bd-example-modal-lg" id="modal_tambah" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<form action="{{ route('simpan-subkegiatan') }}" method="POST" id="form-subkegiatan">
				@csrf
				<div class="card-body">
					<input type="text" name="id_subkegiatan" id="id_subkegiatan" hidden>
					<div class="row">
						<div class="col-lg-12 col-md-12 text-center">
							<h3 class="text-dark font-weight-bold mb-2">Tambah Data Sub-Kegiatan</h3>
							<h5 class="font-weight-normal mb-2">Isikan form berikut dengan benar :</h5>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Kegiatan</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" placeholder="" readonly hidden name="id_kegiatan" id="id_kegiatan" value="{{$kegiatan->id}}">
									<input type="text" class="form-control" placeholder="" readonly value="{{$kegiatan->nama_kegiatan}}">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Kode Sub-Kegiatan</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" placeholder="Isikan kode sub-kegiatan" name="kode_subkegiatan" id="kode_subkegiatan">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Nama Sub-Kegiatan</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" placeholder="Isikan nama sub-kegiatan" name="nama_subkegiatan" id="nama_subkegiatan">
								</div>
							</div>
						</div>
					</div>
					<div class="mb-3 float-right">
						<button type="submit" class="btn btn-primary mr-2">Simpan</button>
						<button class="btn btn-light" data-dismiss="modal">Batal</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>