<div class="modal fade" id="addAsbabModal" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah Data Asbab</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="#" method="POST">
					@csrf
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-4">
							<div class="mb-3">
								<label for="nip" class="form-label">NIP (Optional)</label>
								<input type="number" class="form-control @error('nip') is-invalid @enderror"
									name="nip" id="nip"
									value="{{ old('nip') }}" placeholder="Masukkan nip..">

								@error('student_identification_number')
								<div class="d-block invalid-feedback">
									{{ $message }}
								</div>
								@enderror
							</div>
						</div>

						<div class="col-sm-12 col-md-12 col-lg-4">
							<div class="mb-3">
								<label for="name" class="form-label">Nama Lengkap</label>
								<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
									value="{{ old('name') }}" placeholder="Masukkan nama lengkap..">

								@error('name')
								<div class="d-block invalid-feedback">
									{{ $message }}
								</div>
								@enderror
							</div>
						</div>

						<div class="col-sm-12 col-md-12 col-lg-4">
							<label for="gender" class="form-label">Jenis Kelamin</label>
							<select class="form-select @error('gender') is-invalid @enderror" name="gender" id="gender">
								<option selected>Pilih Jenis Kelamin</option>
								<option value="1" {{ old('gender')==='1' ? 'selected' : '' }}>Laki-laki</option>
								<option value="2" {{ old('gender')==='2' ? 'selected' : '' }}>Perempuan</option>
							</select>

							@error('gender')
							<div class="d-block invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
					</div>

					<div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Nomor Handphone</label>
                                <input type="number" class="form-control @error('phone_number') is-invalid @enderror"
                                    name="phone_number" id="phone_number" value="{{ old('phone_number') }}"
                                    placeholder="Masukkan nomor handphone..">
    
                                @error('phone_number')
                                <div class="d-block invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
						<div class="col-sm-6 col-md-6">
							<div class="mb-3">
								<label for="targe" class="form-label">Jumlah Target</label>
								<input type="number" class="form-control @error('target') is-invalid @enderror" name="target" id="target"
									value="{{ old('target') }}" placeholder="Masukkan jumlah target..">

								@error('target')
								<div class="d-block invalid-feedback">
									{{ $message }}
								</div>
								@enderror
							</div>
						</div>

						
					</div>

					<div class="row">
						<div class="col-sm-12 col-md-12">
							<label for="division">Divisi</label>
							<div class="mb-3 input-group">
								<input type="text" class="form-control @error('division') is-invalid @enderror"
									name="division" placeholder="Masukkan nama divisi..">
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
