@extends('layouts.app')

@section('title', 'No autorizado')

@section('content')
	<div class="container">
		<h1>No tienes autoridazación para ingresar aquí</h1>
		<a href="{{ route('home') }}">Volver al camino!</a>
	</div>
@endsection