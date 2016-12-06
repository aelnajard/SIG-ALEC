
$.ajaxSetup
({
   headers : {'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')}
});



  $(document).on("submit",".formarchivo",function(e){

     
        e.preventDefault();
        var formu=$(this);
        var nombreform=$(this).attr("id");
         var token = $('#token').val();


        if(nombreform=="f_cargar_datos_informante" ){ var miurl="cargar_datos_informante";}
        
        //información del formulario
        var formData = new FormData($("#"+nombreform+"")[0]);

        //hacemos la petición ajax   
        $.ajax({
            url: miurl,  
            type: 'POST',
            headers: {'X-CSRF-TOKEN': token},
           
     
            // Form data
            //datos del formulario
            data: formData,
            //necesario para subir archivos via ajax
            cache: false,
            contentType: false,
            processData: false,
            async: true,
            chunking: true,

             success:function(){
            $("#msj-success").fadeIn();
        },
            error:function(){
            $("#msj-error").fadeIn();
        }
       
            

            //mientras enviamos el archivo
                 
              });
    });


 