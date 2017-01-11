<?php

namespace SIGALEC\Http\Controllers;

use Illuminate\Http\Request;
use SIGALEC\Http\Requests;
use SIGALEC\Http\Controllers\Controller;

class FrontController extends Controller
{

   public function __construct(){
    
    $this->middleware('auth',['only' => ['admin','sig','form_cargar_datos_usuarios']]);

  }


   public function index(){
        return view('index');
   }

   public function sig(){
        return view('sig');
   }

   public function admin(){
        return view('admin.index');
   }
   
}
