@extends('layouts.app', ['title' => 'Donasi', 'page_heading' => 'Data Donasi'])

@section('content')
<section class="row">
	<div class="col-6">
		<div class="card">
			<div class="px-3 card-body py-4-5">
				<div class="row">
					<div class="col-4">
						<div class="stats-icon green">
							<i class="iconly-boldProfile"></i>
						</div>
					</div>
					<div class="col-8">
						<h6 class="font-semibold text-muted">Laki-laki</h6>
						<h6 class="mb-0 font-extrabold">
							2
						</h6>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-6">
		<div class="card">
			<div class="px-3 card-body py-4-5">
				<div class="row">
					<div class="col-4">
						<div class="stats-icon blue">
							<i class="iconly-boldProfile"></i>
						</div>
					</div>
					<div class="col-8">
						<h6 class="font-semibold text-muted">Perempuan</h6>
						<h6 class="mb-0 font-extrabold">
							3
						</h6>
					</div>
				</div>
			</div>
		</div>
	</div>

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
						<th scope="col">Nama Donatur</th>
						<th scope="col">Nominal Donasi</th>
						<th scope="col">Akad/Program</th>
                        <th scope="col">Asbab</th>
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
