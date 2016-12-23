<?php

namespace SIGALEC\Http\Controllers;

use Illuminate\Http\Request;
use SIGALEC\Http\Requests;
use SIGALEC\Http\Controllers\Controller;

class PruebaController extends Controller
{
	public function index(){
		return "Hola desde Index";
	}

	public function nombre($nombre){
		return "Hola mi nombre es: ".$nombre;
	}
}
