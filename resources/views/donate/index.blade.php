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

	@livewire('donation.table-donation')
</section>
@endsection

@push('modals')
@include('donate.modal.create')
@include('donate.modal.update')
@endpush

