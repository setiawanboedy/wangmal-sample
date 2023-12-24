@extends('layouts.app', ['title' => 'Program', 'page_heading' => 'Data Program'])

@section('content')
<section class="row">

	{{-- @include('utilities.alert-flash-message') --}}
	<div class="px-3 py-3 col card">
		<div class="pb-3 d-flex justify-content-end">
			<div class="gap-2 btn-group d-gap">
				<a href="#" class="btn btn-secondary">
					<span class="badge">5</span> Histori Dihapus
				</a>
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudentModal">
					<i class="bi bi-plus-circle"></i> Tambah Data
				</button>
			</div>
		</div>

		<div class="table-responsive">
			<table class="table table-sm w-100" id="datatable">
				<thead>
					<tr>
						<th scope=" col">#</th>
						<th scope="col">Nama Program</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
	</div>
</section>
@endsection

{{-- @push('modal')
@include('students.modal.create')
@include('students.modal.show')
@include('students.modal.edit')
@endpush

@push('js')
@include('students.script')
@endpush --}}
