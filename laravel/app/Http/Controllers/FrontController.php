<?php

namespace SIGALEC\Http\Controllers;

use Illuminate\Http\Request;
use SIGALEC\Http\Requests;
use SIGALEC\Http\Controllers\Controller;

class FrontController extends Controller
{

   public function __construct(){
    
    $this->middleware('auth',['only' => ['admin','visualizacion','form_cargar_datos_usuarios']]);

  }


   public function index(){
        return view('index');
   }

   public function visualizacion(){
        return view('visualizacion');
   }

   public function reviews(){
        return view('reviews');
   }

   public function admin(){
        return view('admin.index');
   }
   
}
