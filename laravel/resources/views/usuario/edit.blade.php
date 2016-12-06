@extends('layouts.admin')

@section('content')
	@include('alerts.request')

{!!Form::model($user,['route'=>['usuario.update',$user->id],'method'=>'PUT'])!!}

@include('usuario.forms.usr')

 {!!Form::submit('Actualizar',['class' => 'btn btn-primary','style' => 'margin-top: 15px;font-size: 20px;margin-left: 30%'])!!}


{!!Form::close()!!}

{!!Form::open(['route'=>['usuario.destroy', $user], 'method' => 'DELETE'])!!}
{!!Form::submit('Eliminar',['class'=>'btn btn-danger','style' => 'margin-top: 15px;font-size: 20px;margin-left: 30%; z-index: 300;'])!!}
{!!Form::close()!!}




@stop