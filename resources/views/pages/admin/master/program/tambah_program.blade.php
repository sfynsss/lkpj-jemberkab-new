<div class="modal fade bd-example-modal-lg" id="modal_tambah" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form action="{{ route('simpan-program') }}" method="POST" id="form-program">
				@csrf
				<div class="card-body">
					<input type="text" name="id_program" id="id_program" hidden>
					<div class="row">
						<div class="col-lg-12 col-md-12 text-center">
							<h3 class="text-dark font-weight-bold mb-2">Tambah Data Program</h3>
							<h5 class="font-weight-normal mb-2">Isikan form berikut dengan benar :</h5>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">SKPD</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" placeholder="" readonly hidden name="id_skpd" id="id_skpd" value="{{$skpd->id}}">
									<input type="text" class="form-control" placeholder="" readonly value="{{$skpd->nama_skpd}}">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Bidang Urusan</label>
								<div class="col-sm-9">
									<select class="form-control" name="id_bidang_urusan" id="id_bidang_urusan" required>
										<option disabled="true" selected="none">Pilih Salah Satu</option>
										@foreach($bidang as $bidang)
										<option value="{{$bidang->id}}">{{$bidang->kode_bidang_urusan}} {{$bidang->nama_bidang_urusan}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Kode Program</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" placeholder="1.01" oninput="this.value = this.value.toUpperCase()" name="kode_program" id="kode_program" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Nama Program</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" placeholder="PROGRAM PENUNJANG" oninput="this.value = this.value.toUpperCase()" name="nama_program" id="nama_program" required>
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