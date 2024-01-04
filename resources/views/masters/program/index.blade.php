@extends('layouts.app', ['title' => 'Program', 'page_heading' => 'Data Program'])

@section('content')
<section class="row">
	@livewire('masters\program.table-program')
	
</section>
@endsection

@push('modals')
@include('masters.program.modal.create')
@endpush


