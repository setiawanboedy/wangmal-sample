<div>
    <form wire:submit.prevent='store'>
        @csrf
        <div class="row">

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
                <div class="mb-3">
                    <label for="nominal" class="form-label">Nominal</label>
                    <input type="number" class="form-control @error('nominal') is-invalid @enderror"
                        name="nominal" id="nominal" wire:model.live.debounce.300ms='nominal'
                        value="{{ old('nominal') }}" placeholder="Nominal">

                    @error('nominal')
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

            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal</label>
                    <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" id="date"
                    wire:model.live.debounce.300ms='date'
                        value="{{ old('date') }}" placeholder="Tanggal">

                    @error('date')
                    <div class="d-block invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            
            <div class="col-sm-12 col-md-12 col-lg-4">
                <label for="program_id" class="form-label">Program</label>
                <select class="form-select @error('program_id') is-invalid @enderror" name="program_id" id="program_id" wire:model.change='program_id'>
                    <option selected>Pilih Program</option>
                    @foreach ($programs as $program)
                    <option value="{{$program->id}}">{{$program->name}}</option>
                    @endforeach
                </select>

                @error('gender')
                <div class="d-block invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>


            <div class="col-sm-12 col-md-12 col-lg-4">
                <label for="asbab_id" class="form-label">Asbab</label>
                <select class="form-select @error('asbab_id') is-invalid @enderror" name="asbab_id" id="asbab_id" wire:model.change='asbab_id'>
                    <option selected>Pilih Asbab</option>
                    @foreach ($asbabs as $asbab)
                    <option value="{{$asbab->id}}" >{{$asbab->name}}</option>
                    @endforeach
                </select>

                @error('asbab_id')
                <div class="d-block invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
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