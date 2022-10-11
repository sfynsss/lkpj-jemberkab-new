<div class="modal fade bd-example-modal-lg" id="modal_import" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form action="{{ route('import-skpd') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
					<div class="row">
						<div class="col-lg-12 col-md-12 text-center">
							<h3 class="text-dark font-weight-bold mb-2">Import Data SKPD</h3>
							<h5 class="font-weight-normal mb-2">Silahkan pilih file SKPD untuk di Import :</h5>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">SKPD</label>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="customFile" name="file_skpd" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
										<p>* untuk format file bisa diunduh <a href="{{url('assets/file/skpd.xlsx')}}" style="color: blue;">disini</a></p>
										<label class="custom-file-label" for="customFile">Pilih File SKPD</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mt-2 py-4 float-right">
						<button type="submit" class="btn btn-primary mr-2">Upload</button>
						<button class="btn btn-light" data-dismiss="modal">Batal</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>