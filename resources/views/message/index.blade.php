@extends('layouts.app')

@section('title', config('app.name') . ' | Mensajes')

@section('content')
	<div class="container mt-4 mb-4">
		 <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="display-4 text-primary">Mensajes</h1>
        </div>

		<ul class="list-group">

			@forelse ($messages as $message)
				<li class="list-group-item border-0 mb-2 lead shadow-sm">
					<a class="text-secondary d-flex justify-content-between align-items-center"
							href="{{ route('message.show', $message->id) }}">
						<span class="lead d-block">{{ $message->subject }}</span>
						<span class="text-black-50 d-block">{{ $message->created_at->format('d/m/Y') }}</span>
					</a>


				</li>

			@empty
            	<li class="list-group-item border-0 mb-3 shadow-sm">No hay nada para mostrar</li>
			@endforelse

		<div class="overflow-auto mt-2">
			{{ $messages->links() }}
		</div>

		</ul>

	</div>
@endsection