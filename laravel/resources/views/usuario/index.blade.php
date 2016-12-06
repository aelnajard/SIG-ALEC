@extends('layouts.admin')

@include('alerts.succes')

@section('content')

	<table class="table" style="margin-left: 280px; width: 1030px; ">
		<thead>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Operaciones</th>
		</thead>
		@foreach($users as $user)
		<tbody>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>
		{!!link_to_route('usuario.edit', $title ='Editar', $parameters = $user->id, $attributes = ['class' => 'btn btn-primary'])!!}
			</td>
		</tbody>
		@endforeach
	</table>

	{!!$users->render()!!}


@stop