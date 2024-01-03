<div>
	<div class="px-3 py-3 col card">
		<div class="pb-3 d-flex justify-content-end">
			<div class="gap-2 btn-group d-gap">
				<a href="#" class="btn btn-secondary">
					<span class="badge">5</span> Histori Dihapus
				</a>
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addAsbabModal">
					<i class="bi bi-plus-circle"></i> Tambah Data
				</button>
			</div>
		</div>

		<div class="table-responsive">
			<table class="table table-sm w-100" id="datatable">
				<thead>
					<tr>
						<th scope=" col">#</th>
						<th scope="col">Nama Lengkap</th>
						<th scope="col">NIP</th>
						<th scope="col">Jenis Kelamin</th>
						<th scope="col">No. HP</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
                <tbody>
                    @foreach ($asbabs as $asbab)
                    <tr>
                        <th>{{$asbab->id}}</th>
                        <td>{{$asbab->name}}</td>
                        <th>{{$asbab->nip}}</th>
                        <td>{{\App\Helper\ConvertGender::genderToString($asbab->gender)}}</td>
                        <td>{{$asbab->hp}}</td>
                        <td class="text-bold-500">
                            <div class="gap-2 mb-3 btn-group gap" role="group">
                                <button type="button"
                                    class="btn btn-success btn-sm update-modal" data-bs-toggle="modal"
                                    data-bs-target="#updateAsbabModal" wire:click="editAsbab({{$asbab->id}})">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button type="button" class="btn btn-danger btn-sm delete"wire:click="deleteAsbab({{$asbab->id}})">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
			</table>
		</div>
	</div>
</div>
@push('scripts')
@include('includes.scripts.alert')
@endpush