<div>
    <form wire:submit.prevent='update'>
        @csrf
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="mb-3">
                    <label for="nip" class="form-label">NIP (Optional)</label>
                    <input type="number" class="form-control @error('nip') is-invalid @enderror"
                        name="nip" id="nip" wire:model.live.debounce.300ms='nip'
                        value="{{ old('nip') }}" placeholder="Masukkan nip..">

                    @error('nip')
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
                    wire:model.live.debounce.300ms='name'
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
                <select class="form-select @error('gender') is-invalid @enderror" name="gender" id="gender" wire:model.change='gender'>
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
                    <label for="hp" class="form-label">Nomor Handphone</label>
                    <input type="number" class="form-control @error('hp') is-invalid @enderror"
                        name="hp" id="hp" 
                        wire:model.live.debounce.300ms='hp'
                        value="{{ old('hp') }}"
                        placeholder="Masukkan nomor handphone..">

                    @error('hp')
                    <div class="d-block invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="mb-3">
                    <label for="target" class="form-label">Jumlah Target</label>
                    <input type="number" class="form-control @error('target') is-invalid @enderror" name="target" id="target"
                    wire:model.live.debounce.300ms='target'
                        value="{{ old('target') }}" placeholder="Masukkan jumlah target..">

                    @error('target')
                    <div class="d-block invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>

@push('scripts')
    @include('includes.scripts.alert')
@endpush