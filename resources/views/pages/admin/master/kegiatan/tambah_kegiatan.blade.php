<div class="modal fade bd-example-modal-lg" id="modal_tambah" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form action="{{ route('simpan-kegiatan') }}" method="POST" id="form-kegiatan">
				@csrf
				<div class="card-body">
					<input type="text" name="id_kegiatan" id="id_kegiatan" hidden>
					<div class="row">
						<div class="col-lg-12 col-md-12 text-center">
							<h3 class="text-dark font-weight-bold mb-2">Tambah Data Kegiatan</h3>
							<h5 class="font-weight-normal mb-2">Isikan form berikut dengan benar :</h5>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">SKPD</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" placeholder="" readonly hidden name="id_skpd" id="id_skpd" value="{{ \App\Skpd::where(['id' => $program->id_skpd])->pluck('id')->first() }}">
									<input type="text" class="form-control" placeholder="" readonly value="{{ \App\Skpd::where(['id' => $program->id_skpd])->pluck('nama_skpd')->first() }}">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Program</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" placeholder="" readonly hidden name="id_program" id="id_Program" value="{{$program->id}}">
									<input type="text" class="form-control" placeholder="" readonly value="{{$program->nama_program}}">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Kode Kegiatan</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" placeholder="" name="kode_kegiatan" id="kode_kegiatan">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Nama Kegiatan</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" placeholder="" oninput="this.value = this.value.toUpperCase()" name="nama_kegiatan" id="nama_kegiatan">
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