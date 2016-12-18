@extends('layouts.admin')

@include('alerts.succes')

@section('content')
<div>

       {!!Form::open(['route'=> 'usuario.index', 'method'=> 'GET', 'btn btn-primary', 'class' => 'navbar-form navbar-right', 'role' => 'search'])!!}

                <div class="form-group">

        {!!Form::text('name',null,['class'=> 'form-control', 'placeholder'=> 'Buscar Usuario'])!!}
                <button type="submit" class="btn btn-defatult" style="margin-right: 40px">Buscar</button>
                </div>
         {!!Form::close()!!}

         <br><br>


	<table class="table table-hover" style="margin-left: 280px; width: 1030px; background-color: #FAFAFA; margin-top: 20px ">
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
</div>
@stop