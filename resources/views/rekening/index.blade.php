@extends('layouts.app', ['title' => 'Rekening', 'page_heading' => 'Data Rekening'])

@section('content')
<section>

	<div class="row">
		<div class="px-3 py-3 card">
			<form action="" method="GET">
				<label for="start_date" class="pb-3 fw-bold">Filter Data dengan Rentang Tanggal :</label>
				
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
                            <th scope="col">Tanggal</th>
                            <th scope="col">Akun</th>
                            <th scope="col">Uraian</th>
                            <th scope="col">Debit</th>
                            <th scope="col">Kredit</th>
                            <th scope="col">Saldo</th>
						</tr>
					</thead>
					<tbody>
						{{-- @foreach ($filteredResult['cashTransactions'] as $cashTransaction) --}}
						<tr>
							<th>1</th>
                            <th>12-12-2024</th>
							<td>Donasi</td>
							<td>Kegiatan BBM</td>
							<td>1000</td>
                            <td>1000</td>
                            <td>10.0000</td>
						</tr>
						{{-- @endforeach --}}
					</tbody>
					<tfoot>
						<tr>
							<td colspan="6" align="right"><b>Total Masuk</b></td>
							<td>100000</td>
						</tr>

						<tr>
							<td colspan="6" align="right"><b>Total Keluar</b></td>
							<td>100000</td>
						</tr>
						<tr>
							<td colspan="6" align="right"><b>Sisa Saldo</b></td>
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
