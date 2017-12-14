{{-- @include('header') --}}
@extends('layout')
	@section('content')
	<h1>{{ $title }}</h1>

	<ul>
		@forelse ($users as $user)
			<li>{{ $user }}</li>
		@empty
			<li>No hay Usuarios Registrados.</li>
		@endforelse
	</ul>
	@endsection

{{-- @include('footer') --}}