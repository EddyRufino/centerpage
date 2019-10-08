@extends('layouts.app')

@section('title', 'Te perdiste')

@section('content')
	<div class="container">
		<h1>Te perdiste :c</h1>
		<a href="{{ route('home') }}">Volver al camino!</a>
	</div>
@endsection