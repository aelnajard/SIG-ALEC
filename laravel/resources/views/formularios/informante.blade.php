@extends('layouts.admin')
  @section('content')

<br><br>

  <section> 
                     <div id="capa_modal" class="div_modal" ></div>
                     <div id="capa_para_edicion" class="div_contenido" > 
                      <input type="hidden" id="usuario_seleccionado" value="0"  />
                      <input type="hidden" id="seccion_seleccionada" value="0"  />

                      <div class="margin"  id="botones_control" >
                                  <button type="button" class="btn btn-primary" onclick="mostrarseccion(1);" >Informacion</button>
                                  <button type="button" class="btn btn-primary" onclick="mostrarseccion(2);" >Educación</button>
                                  
                                 
                      </div>
                    

                      <div  id="contenido_capa_edicion" ></div>
            </section>
<div class="row" style="float:left;margin-left: 275px; width: 500px; background-color:#D8D8D8; border: 3px solid white; height: 600px; margin-top: 40px;font-family: cursive ;color: #104576;border-style: groove;">  

 <div class="col-md-4">
 
<br>      <div class="box box-primary">
                        
            <div class="box-header" style="width:380px; margin-left: 50px;">
                <h3 class="box-title">Selecciona Localidad</h3><br><br><br>
            </div><!-- /.box-header -->


         <form  id="f_agregar_educacion"  method="post"  action="agregar_educacion_usuario" class="form-horizontal form_entrada" >                
               
                 <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                    

               <div class="box-body ">

                  <div class="form-group col-xs-12" style="width:380px; margin-left: 0px;">
                              <label for="pais" >Tipo Educación</label>
                               <select id="localidad" name="tipo_educacion" class="form-control" style="height: 40px">
                          
                                  @foreach($localidad as $loca)
                                  <option value="{{$loca->id}}" style="height:80px"> {{ $loca->idlocalida}} {{ $loca->nombre}}  </option>

                                  @endforeach
                                
                               </select>
                       </div>



                 <div class="form-group col-xs-12" style="width:380px; margin-left: 0px;">
                              <label for="pais">Tipo Educación</label>
                               <select id="informante" name="tipo_educacion" class="form-control">
                          
                                  @foreach($informante as $info)
                                  <option value="{{$info->id}}"> {{ $info->id_informante}} {{ $info->nombres_informante}}  </option>

                                  @endforeach
                                
                               </select>
                       </div>


                        <div class="form-group col-xs-12" style="width:380px; margin-left: 0px;">
                              <label for="apellido">Titulo Obtenido</label>
                              <input type="text" class="form-control" id="titulo_educacion" name="titulo_educacion" value="" required>
                         </div>

                           <div class="form-group col-xs-12" style="width:380px; margin-left: 0px;">
                              <label for="apellido">Institución</label>
                              <input type="text" class="form-control" id="ins_educacion" name="ins_educacion" value="" required>
                         </div>  

                         <div class="form-group col-xs-12" style="width:380px; margin-left: 0px;">
                              <label for="apellido">Año de Graduacion</label>
                              <input type="text" class="form-control" id="anio_educacion" name="anio_educacion" value="" required>
                         </div>




               </div>
<br> <br>
               <div class="box-footer"><br> <br>
               <button type="submit" class="btn btn-primary" style="width:280px; margin-left: 90px;">
               Actualizar Datos</button>
               </div>
             
            </form>
            <br> <br>
        </div>
          


 </div>


   <?php foreach($localidad as $loca){  ?>
                  <li class="list-group-item">
                  <i class="fa fa-book margin-r-5"></i><b>--<?= $loca->nombre; ?></b> <a class="pull-right"></a>
                  
                  <?php foreach($informante as $info){  ?>
                  <?php  if($info->idlocalida==$loca->idlocalida){   ?>
                        
                   <br/> <i class="fa fa-circle-o text-yellow"></i> <span class="text-light-blue" >-<?=  $info->nombres_informante;  ?></span>
                  <span>-<?=  $info->apellidos_informante;  ?></span>  
                  
                       
                  <?php } ?>
                  <?php } ?>
                   
                  </li>

                   <?php } ?>

                   
                  </ul>

                  <a href="javascript:void(0);" class="btn btn-primary btn-block"><b>-</b></a>
                </div><!-- /.box-body -->








 

  



</div>

<br><br>
<div class="row" style="margin-left: 770px;float: right;position: absolute; width: 570px; background-color:#D8D8D8; border: 3px solid white;height: 600px;font-family: cursive;color: #0B243B; border-style: groove;";>  

 <div class="col-md-4">
 
<br>      <div class="box box-primary">
                        
            <div class="box-header" style="width:380px; margin-left: 50px;">
                <h3 class="box-title">Agregar Datos Educación</h3><br><br><br>
            </div><!-- /.box-header -->

            <div id="notificacion_resul_faedu"></div>

            <form  id="f_agregar_educacion"  method="post"  action="agregar_educacion_usuario" class="form-horizontal form_entrada" >                
               
                 <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                    

               <div class="box-body ">

                  <div class="form-group col-xs-12" style="width:380px; margin-left: 0px;">
                              <label for="pais">Tipo Educación</label>
                               <select id="tipo_educacion" name="tipo_educacion" class="form-control">
                          
                                  @foreach($localidad as $loca)
                                  <option value="{{$loca->id}}"> {{ $loca->idlocalida}} {{ $loca->nombre}}  </option>

                                  @endforeach
                                
                               </select>
                       </div>

                        <div class="form-group col-xs-12" style="width:380px; margin-left: 0px;">
                              <label for="apellido">Titulo Obtenido</label>
                              <input type="text" class="form-control" id="titulo_educacion" name="titulo_educacion" value="" required>
                         </div>

                           <div class="form-group col-xs-12" style="width:380px; margin-left: 0px;">
                              <label for="apellido">Institución</label>
                              <input type="text" class="form-control" id="ins_educacion" name="ins_educacion" value="" required>
                         </div>  

                         <div class="form-group col-xs-12" style="width:380px; margin-left: 0px;">
                              <label for="apellido">Año de Graduacion</label>
                              <input type="text" class="form-control" id="anio_educacion" name="anio_educacion" value="" required>
                         </div>



               </div>
<br> <br>
               <div class="box-footer"><br> <br>
               <button type="submit" class="btn btn-primary" style="width:280px; margin-left: 90px;">
               Actualizar Datos</button>
               </div>
             
            </form>
            <br> <br>
        </div>
          


 </div>
 

  



</div>
@stop