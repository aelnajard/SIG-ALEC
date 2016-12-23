<?php

namespace SIGALEC\Http\Controllers;

use Illuminate\Http\Request;

use SIGALEC\Http\Requests;
use SIGALEC\Http\Controllers\Controller;
use SIGALEC\User;
use SIGALEC\informante;
use SIGALEC\localidad; 
use SIGALEC\tpinforcamp; /**llamando el modelo*/
use SIGALEC\camposem;
use Session;
use Redirect;
use Excel;
use Storage;
use load;
use save;

class tpinforcampsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */




    public function store(Request $request) 
    {
    
    $loop = $request->get('id_campo_semantico');
    foreach ($loop as $value){
        $resortfacility = new tpinforcamp;
        $resortfacility->id_informante = $request ->get('id_informante');
        $resortfacility->id_campo_semantico = $value;
        $resortfacility->save();
    }
  
    
    }


    public function locamodal($id_informante)
 
    {
             
      $tp_inform_camposema = informante::find($id_informante)->camposeman;        

        return response()->json($tp_inform_camposema);
          
    
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
