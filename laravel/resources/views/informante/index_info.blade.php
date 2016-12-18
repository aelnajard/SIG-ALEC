@extends('layouts.admin')

@include('alerts.succes')
@include('informante.modal')

@section('content')
<div>

       {!!Form::open(['route'=> 'informante.index', 'method'=> 'GET', 'btn btn-primary', 'class' => 'navbar-form navbar-right', 'role' => 'search'])!!}

                <div class="form-group">

        {!!Form::text('infor',null,['class'=> 'form-control', 'placeholder'=> 'Buscar Informante'])!!}
                <button type="submit" class="btn btn-defatult" style="margin-right: 40px">Buscar</button>
                </div>
         {!!Form::close()!!}

         <br><br>


	<table class="table table-hover" style="margin-left: 275px; width: 3500px; background-color: #FAFAFA; margin-top: 20px;margin-bottom: 20px; border-bottom: solid; font-size: 12px; border-top: solid;">
		<thead>
			<th>Id Informante</th>			
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
			<th>Localidad</th>
			<th>Campo Semántico</th>
			<th>Operaciones</th>

			
			
		</thead>
		@foreach($informaantes as $informante)
		<tbody style="color: black;">
			<td>{{$informante->id_informante}}</td>			
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
		<button type="button" class="btn btn-primary btn btn-link"  OnClick='Mostrar(this)' value="{{$informante->idlocalida}}" data-toggle='modal' data-target='#myModal'><i class="fa fa-eye" aria-hidden="true" style="color:  #2ECCFA"></i><br>Localidad</button>		
			</td>


			<td>			
		<button type="button" class="btn btn-primary btn btn-link"  OnClick='Mostrarnos(this)' value="{{$informante->id_informante}}" data-toggle='modal' data-target='#moModal'><i class="fa fa-eye" aria-hidden="true" style="color:  #2ECCFA"></i><br>Campo Semántico</button>		
			</td>

	
			<td>
		{!!link_to_route('informante.edit', $title ='Editar', $parameters = $informante->id_informante, $attributes = ['class' => 'btn btn-primary', 'style '=> 'float:left;'])!!}

		{!!Form::open(['route'=>['informante.destroy', $informante->id_informante], 'method' => 'DELETE'])!!}
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger','style' => 'margin-left: 5px'])!!}
		{!!Form::close()!!}

			</td>

		</tbody>
		@endforeach
	</table>

	{!!$informaantes->render()!!}
</div>



{!!Html::script('js/script2.js')!!}
@stop