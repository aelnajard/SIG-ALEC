
$(document).ready(function(){
	
});



function Mostrar(btn){
	var route = "http://localhost:8000/informantes/"+btn.value+"";;

	$.get(route, function(res){
		$("#nombres_informante").val(res.idlocalida);		
		$("#nombre").val(res.nombre);
		$("#departamen").val(res.departamen);
		$("#asnv").val(res.asnv+"  metros");
		$("#temperatur").val(res.temperatur+"°C");
		$("#anofundac").val(res.anofundac);
		$("#comentario").val(res.comentario);
		$("#actividade").val(res.actividade);
		$("#viasdeacce").val(res.viasdeacce);
		$("#fechaencue").val(res.fechaencue);
		$("#fechacompl").val(res.fechacompl);
		$("#observacio").val(res.observacio);
		$("#paginaweb").val(res.paginaweb);
		
		
	});
}




function Mostrarnos(btn){
	var route = "http://localhost:8000/informantescamp/"+btn.value;

	$.get(route, function(res){

	var tbl=$("<table/>").attr("id","mytables");
    $("#div1").append(tbl);
    var Table = document.getElementById("mytables");
	Table.innerHTML = "";
    for(var i=0;i<res.length;i++)
{

    var tr="<tr>";
    var td1="<td>"+res[i]["id_campo_semantico"]+":&nbsp  &nbsp  &nbsp"+"</td>";
    var td2="<td>"+res[i]["campo_semantico"]+"</td>";

   $("#mytables").append(tr,td1,td2); 



}
		
		
	});
}



