{{-- <!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Listado de Usuarios - Styde.net</title>
	</head>

<body>
 --}}
{{-- @include('header') --}}

{{-- esto seria otra amnera --}}

@extends('layout')
	
	@section('content')
	<h1>{{ $title }}</h1>

	{{-- <hr> --}}
	
	{{-- @if(! empty($users)) --}}
	
	{{-- otra manera seria asi  --}}
	{{-- @unless(empty($users)) --}}
	
	{{-- otra manera seria invirtiendo lo q esta en la condiciones y al mismo tiempo colocar la directiva empy --}}
	{{-- @empty($users) --}}
		{{-- <ul> --}}
			{{-- @foreach ($users as $user) --}}
				{{-- <li>{{ $user }}</li> --}}
			{{-- @endforeach --}}
		{{-- </ul> --}}
		{{-- <p>No hay Usuarios Registrados.</p> --}}
	{{-- @else --}}
		{{-- <p>No hay Usuarios Registrados.</p> --}}
		{{-- <ul> --}}
			{{-- @foreach ($users as $user) --}}
				{{-- <li>{{ $user }}</li> --}}
			{{-- @endforeach --}}
		{{-- </ul> --}}
		
	{{-- @endif --}}
	{{-- @endempty --}}

	{{-- otra manera sera de esta forma  --}}

	<ul>
		@forelse ($users as $user)
			<li>{{ $user }}</li>
		@empty
			<li>No hay Usuarios Registrados.</li>
		@endforelse
	</ul>

	@endsection

{{-- @include('footer') --}}

{{-- </body>
</html>