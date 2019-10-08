@extends('layouts.app')

@section('title', config('app.name') . ' | Perfil')

@section('content')
	<div class="container mt-4 mb-4">
		<label class="lead text-muted">Nombres:</label>
			<p class="lead">{{ $users->name }}</p>

		<label class="lead text-muted">Email:</label>
			<p class="lead">{{ $users->email }}</p>

	</div>
@endsection