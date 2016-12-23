<?php

namespace SIGALEC\Http\Controllers;


use Illuminate\Http\Request;
use SIGALEC\Http\Requests;
use SIGALEC\Http\Requests\UserCreateRequest;
use SIGALEC\Http\Requests\UserUpdateRequest;
use SIGALEC\Http\Controllers\Controller;
use SIGALEC\User; /**llamando el modelo*/
use Session;
use Redirect;
use Excel;
use Storage;
use load;
use save;

class usuariocontroller extends Controller
{



   public function __construct(){
    $this->middleware('auth');
     $this->middleware('admin',['only' => ['create','edit']]);
  }   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
       
        $users = User::name($request->get('name'))->OrderBy('id', 'Asc')->paginate(20);
       /** $users =  User::paginate(20);*/

        return view('usuario.index', compact('users'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        User::create([
            "name"  => $request ["name"],
            "email"  => $request ["email"],
            "password"  => $request["password"],
            ]);

        return redirect('/usuario')->with('message','Usuario Agregado Satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view ('usuario.edit', ['user'=> $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
        Session::flash('message','Usuario Editado Correctamente');
        return Redirect::to('/usuario');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // User::destroy($id);
        $user = User::find($id);
        $user->delete();
        Session::flash('message','Usuario Eliminado Correctamente');
        return Redirect::to('/usuario');
    }


    public function form_cargar_datos_usuarios(){

       return view("formularios.create1");

    }


    public function cargar_datos_usuarios(Request $request)
    {
       $archivo = $request->file('archivo');
       $nombre_original=$archivo->getClientOriginalName();
       $extension=$archivo->getClientOriginalExtension();
       $r1=Storage::disk('archivos')->put($nombre_original,  \File::get($archivo) );
       $ruta  =  storage_path('archivos') ."/". $nombre_original;
       
       if($r1){
            
            Excel::selectSheetsByIndex(0)->load($ruta, function($hoja) {
                
                $hoja->each(function($fila) {
                    $usersemails=User::where("email","=",$fila->email)->first();
                    if(count( $usersemails)==0){
                        $usuario=new User;
                        $usuario->name= $fila->nombres;
                        //$usuario->apellidos= $fila->apellidos;
                        $usuario->email= $fila->email;
                        //$usuario->telefono= $fila->telefono; //este campo llamado telefono se debe agregar en la base de datos c
                        //$usuario->pais= $fila->pais;
                        //$usuario->ciudad= $fila->ciudad;
                        //$usuario->institucion= $fila->institucion;
                       // $usuario->ocupacion= $fila->ocupacion;
                        $usuario->password= bcrypt($fila->password);
                        $usuario->save();
                        Session::flash('message','Usuario Editado Correctamente');
                    }
             

                });

       

            });

              Session::flash('message','Usuarios agregados Correctamente');
        
       }
       else
       {
            Session::flash('message-error','Usuarios no han sido agregados Correctamente');
       }

            
       }
     
      
    }



