@extends('layouts.app')

@section('title', config('app.name') . ' | Tu mensaje')

@section('content')
	<div class="container mt-4 mb-4">

		<h1>{{ $message->subject }}</h1>
		<p class="lead">{{ $message->body }}</p>

		<small class="text-black-50 ">
                Escrito por: {{ $message->name }} - {{ $message->created_at->format('d/m/Y') }}
        </small><br>

            @auth
                <div class="btn-group btn-group-sm">
                    <a class="btn btn-primary" href="{{ route('message.index') }}">Regresar</a>
                    {{-- <a class="btn btn-primary" href="{{ route('message.edit', $message) }}"
                        >Editar
                    </a> --}}
                @if (auth()->user()->isAdmin())

                    <a class="btn btn-danger rounded-right" href="#" onclick="document.getElementById('delete-message').submit()"
                        >Eliminar
                    </a>
                    <form class="d-none" id="delete-message" action="{{ route('message.destroy', $message) }}" method="post">
                            @csrf @method('DELETE')
                    </form>

                @endif

                </div>
            @endauth

	</div>
@endsection