<div>
    <form wire:submit.prevent='store'>
        @csrf
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Program</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                        name="name" id="name" wire:model.live.debounce.300ms='name'
                        value="{{ old('name') }}" placeholder="Nama program">

                    @error('name')
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