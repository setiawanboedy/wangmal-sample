@extends('layouts.app', ['title' => 'Asbab', 'page_heading' => 'Data Asbab'])

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
							{{$sumBoys}}
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
							{{$sumGirls}}
						</h6>
					</div>
				</div>
			</div>
		</div>
	</div>

	@livewire('masters\asbab.table-asbab')

</section>
@endsection

@push('modals')
@include('masters.asbab.modal.create')
@include('masters.asbab.modal.update')
@endpush

