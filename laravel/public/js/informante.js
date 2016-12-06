function localidad_mostrar(){

document.getElementById('seccion_informante').style.display = 'block';
document.getElementById('seccion_localidad').style.display = 'none';}


function informante_mostrar(){
document.getElementById('seccion_informante').style.display = 'none';
document.getElementById('seccion_localidad').style.display = 'block';}


//  <select id="localidad" name="tipo_educacion" class="form-control" style="height: 40px">
                          
                                 // @foreach($localidad as $loca)
                                  //<option value="{{$loca->id}}" style="height:80px"> {{ $loca->idlocalida}} {{ $loca->nombre}}  </option>
//
  //                                @endforeach
                                
    //                           </select>