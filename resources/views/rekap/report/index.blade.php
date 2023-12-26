@extends('layouts.app', ['title' => 'Rekap Laporan', 'page_heading' => 'Rekap Laporan'])

@section('content')
<section>
	{{-- <div class="row">
		<div class="col-6 col-lg-6 col-md-6">
			<div class="card">
				<div class="px-3 card-body py-4-4">
					<div class="row">
						<div class="col-md-4">
							<div class="stats-icon">
								<i class="iconly-boldChart"></i>
							</div>
						</div>
						<div class="col-md-8">
							<h6 class="font-semibold text-muted">Total Hari Ini</h6>
							<h6 class="mb-0 font-extrabold">
								100
							</h6>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-6 col-lg-6 col-md-6">
			<div class="card">
				<div class="px-3 card-body py-4-4">
					<div class="row">
						<div class="col-md-4">
							<div class="stats-icon">
								<i class="iconly-boldChart"></i>
							</div>
						</div>
						<div class="col-md-8">
							<h6 class="font-semibold text-muted">Total Minggu Ini</h6>
							<h6 class="mb-0 font-extrabold">
								100
							</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-6 col-lg-6 col-md-6">
			<div class="card">
				<div class="px-3 card-body py-4-4">
					<div class="row">
						<div class="col-md-4">
							<div class="stats-icon">
								<i class="iconly-boldChart"></i>
							</div>
						</div>
						<div class="col-md-8">
							<h6 class="font-semibold text-muted">Total Bulan Ini</h6>
							<h6 class="mb-0 font-extrabold">
								100
							</h6>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-6 col-lg-6 col-md-6">
			<div class="card">
				<div class="px-3 card-body py-4-4">
					<div class="row">
						<div class="col-md-4">
							<div class="stats-icon">
								<i class="iconly-boldChart"></i>
							</div>
						</div>
						<div class="col-md-8">
							<h6 class="font-semibold text-muted">Total Tahun Ini</h6>
							<h6 class="mb-0 font-extrabold">
								100
							</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}

	<div class="row">
		<div class="px-3 py-3 card">
			<form action="" method="GET">
				<label for="start_date" class="pb-3 fw-bold">Filter Data dengan Rentang Tanggal :</label>
				
				<h6>Program/Akad</h6>
				<div class="input-group">
					<fieldset class="form-group">
						<select class="form-select" id="basicSelect">
							<option>Semua</option>
							<option>BBM</option>
							<option>MGTS</option>
							<option>RQJ</option>
							<option>Palestina</option>
							<option>Upgrade SDM</option>
							<option>Pembebasan Lahan</option>
							<option>Zakat Maal</option>
							<option>Infak Umum</option>
							<option>Rangkul Yatim</option>
						</select>
					</fieldset>
				</div>
				<div class="input-group">
					<input type="date" name="start_date" class="form-control" placeholder="Pilih tanggal awal..">
					<input type="date" name="end_date" class="form-control" placeholder="Pilih tanggal akhir..">
					<button type="submit" class="btn btn-primary">Filter</button>
				</div>
			</form>
		</div>
	</div>

	{{-- @empty(!$filteredResult) --}}
	<div class="row">
		<div class="px-3 py-3 card">
			<div class="col-lg-12">
				<a href="#"
					class="btn btn-success float-end">
					<i class="bi bi-file-earmark-excel-fill"></i>
					Export Excel
				</a>
			</div>

			<div class="mt-3 table-responsive">
				<table class="table text-center table-sm caption-top" id="datatable">
					<caption>Laporan data dari tanggal <span class="fw-bold">1-12-2023</span> -
						<span class="fw-bold">12-12-2023</span>
					</caption>
					<thead>
						<tr>
                            <th scope=" col">#</th>
                            <th scope="col">Nama Donatur</th>
                            <th scope="col">Nominal Donasi</th>
                            <th scope="col">Akad/Program</th>
                            <th scope="col">Asbab</th>
						</tr>
					</thead>
					<tbody>
						{{-- @foreach ($filteredResult['cashTransactions'] as $cashTransaction) --}}
						<tr>
							<th>1</th>
                            <th>Rendi</th>
							<td>Rp 1000</td>
							<td>BBM</td>
							<td>Fitri</td>
						</tr>
						{{-- @endforeach --}}
					</tbody>
					<tfoot>
						<tr>
							<td colspan="4" align="right"><b>Total</b></td>
							<td>100000</td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
	{{-- @endempty --}}
</section>
@endsection

{{-- @push('js')
@include('reports.script')
@endpush --}}
