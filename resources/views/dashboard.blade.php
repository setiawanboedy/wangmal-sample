@extends('layouts.app', ['title' => 'Dashboard', 'page_heading' => 'Dashboard'])

@section('content')
<section class="row">
	<div class="col-12 col-lg-12">
		<div class="row">
			<div class="col-6 col-lg-3 col-md-6">
				<a href="#">
					<div class="card card-stat">
						<div class="px-3 card-body py-4-5">
							<div class="row">
								<div class="col-md-4">
									<div class="stats-icon purple">
										<i class="iconly-boldProfile"></i>
									</div>
								</div>
								<div class="col-md-8">
									<h6 class="font-semibold text-muted">Pelajar</h6>
									<h6 class="font-extrabold {{ 21 <= 0 ? 'text-danger' : '' }} mb-0">
										21
									</h6>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-6 col-lg-3 col-md-6">
				<a href="#">
					<div class="card card-stat">
						<div class="px-3 card-body py-4-5">
							<div class="row">
								<div class="col-md-4">
									<div class="stats-icon blue">
										<i class="iconly-boldBookmark"></i>
									</div>
								</div>
								<div class="col-md-8">
									<h6 class="font-semibold text-muted">Kelas</h6>
									<h6 class="font-extrabold {{ 12 <= 0 ? 'text-danger' : '' }} mb-0">
										12
									</h6>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-6 col-lg-3 col-md-6">
				<a href="#">
					<div class="card card-stat">
						<div class="px-3 card-body py-4-5">
							<div class="row">
								<div class="col-md-4">
									<div class="stats-icon green">
										<i class="iconly-boldWork"></i>
									</div>
								</div>
								<div class="col-md-8">
									<h6 class="font-semibold text-muted">Jurusan</h6>
									<h6 class="font-extrabold {{ 2 <= 0 ? 'text-danger' : '' }} mb-0">
										2
									</h6>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-6 col-lg-3 col-md-6">
				<a href="#">
					<div class="card card-stat">
						<div class="px-3 card-body py-4-5">
							<div class="row">
								<div class="col-md-4">
									<div class="stats-icon red">
										<i class="iconly-boldTicket"></i>
									</div>
								</div>
								<div class="col-md-8">
									<h6 class="font-semibold text-muted">Kas Bulan Ini</h6>
									<h6 class="mb-0 font-extrabold">{{ 100000 }}</h6>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
		{{-- @include('dashboard.charts.chart') --}}
		<div class="row">
			<div class="col-12 col-xl-12">
				<div class="card">
					<div class="card-header">
						<h4>5 Transaksi Terakhir</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover table-striped table-lg">
								<thead>
									<tr>
										<th>Nama Pelajar</th>
										<th>Total Bayar</th>
										<th>Tanggal</th>
										<th>Pencatat</th>
										<th>Detail</th>
									</tr>
								</thead>
								<tbody>
									{{-- @forelse($latestCashTransactions as $latestCashTransaction) --}}
									<tr>
										<td class="col-5">
											<div class="d-flex align-items-center">
												<p class="mb-0 font-bold ms-3">
													Sinaga
												</p>
											</div>
										</td>
										<td class="col-auto">
											<p class="mb-0 ">
												400000
											</p>
										</td>
										<td class="col-auto">
											<p class="mb-0 ">
												24-12-2023
											</p>
										</td>
										<td class="col-auto">
											<p class="mb-0 ">
												Admin
											</p>
										</td>
										<td class="col-auto">
											<p class="mb-0">
												<button type="button" "
													class="btn btn-primary btn-sm cash-transaction-detail" data-bs-toggle="modal"
													data-bs-target="#showCashTransactionModal">
													<i class="bi bi-search"></i>
												</button>
											</p>
										</td>
									</tr>
									{{-- @empty
									<tr>
										<td colspan="5">
											<p class="text-center fw-bold text-danger text-uppercase">Data kosong!</p>
										</td>
									</tr>
									@endforelse --}}
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

{{-- @push('modal')
@include('dashboard.modal.show')
@endpush

@push('js')
@include('dashboard.script')
@endpush --}}
