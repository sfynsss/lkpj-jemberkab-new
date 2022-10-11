<div class="modal fade bd-example-modal-lg" id="modal_tambah" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form action="{{ route('simpan-urusan') }}" method="POST" id="form-urusan">
				@csrf
				<div class="card-body">
					<input type="text" name="id_urusan" id="id_urusan" hidden>
					<div class="row">
						<div class="col-lg-12 col-md-12 text-center">
							<h3 class="text-dark font-weight-bold mb-2">Tambah Data Urusan</h3>
							<h5 class="font-weight-normal mb-2">Isikan form berikut dengan benar :</h5>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Kode Urusan</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" placeholder="" name="kode_urusan" id="kode_urusan">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Nama Urusan</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" placeholder="" oninput="this.value = this.value.toUpperCase()" name="nama_urusan" id="nama_urusan">
								</div>
							</div>
						</div>
					</div>
					<div class="mt-2 py-4 float-right">
						<button type="submit" class="btn btn-primary mr-2">Simpan</button>
						<button class="btn btn-light" data-dismiss="modal">Batal</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>