@extends('layouts.admin')

@include('alerts.succes')

@section('content')
<div>

       {!!Form::open(['route'=> 'informante.index', 'method'=> 'GET', 'btn btn-primary', 'class' => 'navbar-form navbar-right', 'role' => 'search'])!!}

                <div class="form-group">

        {!!Form::text('infor',null,['class'=> 'form-control', 'placeholder'=> 'Buscar Informante'])!!}
                <button type="submit" class="btn btn-defatult" style="margin-right: 40px">Buscar</button>
                </div>
         {!!Form::close()!!}

         <br><br>


	<table class="table table-hover" style="margin-left: 275px; width: 3000px; background-color: #FAFAFA; margin-top: 20px; font-size: 12px; border-top: solid;">
		<thead>
			<th>Id Informante</th>
			<th>Id Localidad</th>
			<th>Informante</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Edad</th>
			<th>Género</th>
			<th>Ocupación</th>
			<th>Nivel de Escolaridad</th>
			<th>Proveniencia</th>
			<th>Proveniencia de los Padres</th>
			<th>Proveniencia del Conyugue</th>
			<th>Viajes</th>
			<th>Operaciones</th>
			
		</thead>
		@foreach($informaantes as $informante)
		<tbody>
			<td>{{$informante->id_informante}}</td>
			<td>{{$informante->idlocalida}}</td>
			<td>{{$informante->infomante}}</td>
			<td>{{$informante->nombres_informante}}</td>
			<td>{{$informante->apellidos_informante}}</td>
			<td>{{$informante->edad_informante}}</td>
			<td>{{$informante->genero}}</td>
			<td>{{$informante->ocupacion}}</td>
			<td>{{$informante->nivel_de_escolaridad}}</td>
			<td>{{$informante->proveniencia}}</td>
			<td>{{$informante->proveniencia_de_los_padres}}</td>
			<td>{{$informante->proveniencia_del_conyugue}}</td>
			<td>{{$informante->viajes}}</td>




			<td>
		{!!link_to_route('informante.edit', $title ='Editar', $parameters = $informante->id, $attributes = ['class' => 'btn btn-primary'])!!}
			</td>
		</tbody>
		@endforeach
	</table>

	{!!$informaantes->render()!!}
</div>
@stop