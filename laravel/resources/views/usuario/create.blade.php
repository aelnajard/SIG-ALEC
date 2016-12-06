@extends('layouts.admin')

@section('content')

	@include('alerts.request')

{!!Form::open(['route' => 'usuario.store', 'method' => 'POST'])!!}
		
		@include('usuario.forms.usr')

	     {!!Form::submit('Registrar',['class' => 'btn btn-primary','style' => 'margin-top: 15px;font-size: 20px;margin-left: 30%'])!!}


{!!Form::close()!!}

@stop