@extends('layouts.app')
{{-- 'CenterPage | Usuarios' --}}
@section('title',  config('app.name') . ' | Usuarios' )

@section('content')
	<div class="container mt-4 mb-4">
		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
				    <tr>
				      <th scope="col">Nombres</th>
				      <th scope="col">Email</th>
				      <th scope="col">Acciones</th>
				    </tr>
				  </thead>
				  <tbody>

				    @foreach ($users as $user)
				    <tr>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>@mdo</td>
					</tr>
				    @endforeach

				</tbody>
			</table>
		</div>
	</div>
@endsection