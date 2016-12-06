


		var mymap = L.map('mapid').setView([4.57163, -73.14766], 5);

		//var base = new L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpandmbXliNDBjZWd2M2x6bDk3c2ZtOTkifQ._QA7i5Mpkd_m30IGElHziw', {
		//	maxZoom: 18,
		//attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
			//	'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				//'Imagery Â© <a href="http://mapbox.com">Mapbox</a>',
			//id: 'mapbox.streets'
		//}).addTo(mymap);


		//L.marker([4.5, -73.09]).addTo(mymap)
			//.bindPopup("<b>Hola Mundo</b><br />Soy Javier!!!.").openPopup();

		//L.circle([3.25021, -71.63086], 500, {
			//color: 'red',
			//fillColor: '#f03',
			//fillOpacity: 0.5
		//}).addTo(mymap).bindPopup("Soy un circulo");

		//L.polygon([
			//[4.34, -73.08],
			//[6.12, -76.06],
			//[4.08, -77.047]
		//]).addTo(mymap).bindPopup("Soy un polygon.");
		
		//Capa de Geojson
		
		<!---var consulta1 = L.geoJson(statesdata).addTo(mymap);
		  var geojsonMarkerOptions = {
    radius: 4,
    fillColor: "#0040FF",
    color: "black",
    weight: 3,
    opacity: 1,
    fillOpacity: 0.8
     };

    var cadaver = L.geoJson(localidad_punto, {
    pointToLayer: function (feature, latlng) {
        return L.circleMarker(latlng, geojsonMarkerOptions);
    },
	 onEachFeature: youOnEachFeatureFunction	
}).addTo(mymap);

function youOnEachFeatureFunction(feature, layer){
    if (feature.properties.nombre) {
        layer.bindPopup("Localidad<br>"+feature.properties.nombre +"<br><br></b>Departamento<br />"+ feature.properties.departamen +
			"<br><br></b>msnm<br />"+ feature.properties.asnv +"<br><br></b>Fecha Encuesta<br />"+ feature.properties.fechaencue +
			"<br><br></b>Actividades Económicas<br />"+ feature.properties.actividade +
			"<br><br></b>Vias de acceso<br />"+ feature.properties.viasdeacce );
    }
}
					
		
///--Mis Capas--////
		
		
		
					
					
		var departamento = new L.TileLayer.WMS('http://localhost:8080/geoserver/javi/wms',
                    {
                        layers: 'depto',
                        format: 'image/png',
                        transparent: true
                    }).addTo(mymap);
					
					
		
					
		<!--var municipios = new L.TileLayer.WMS('http://localhost:8080/geoserver/javi/wms',
                   <!-- {
                       <!-- layers: 'municipios',
                        <!--format: 'image/png',
                        <!--transparent: true,
					
                   <!-- }).addTo(mymap);
				
		var baseMaps = {
						
							"Departamento": departamento
							//"Mapa Base":base
					};

		var overlayMaps = {
						<!--"Municipios": municipios,
						"Localidades":cadaver
						<!--"Municipios que contienen Localidades": consulta1
							
					};		
					
					
					
		var popup = L.popup();

		function onMapClick(e) {
			popup
				.setLatLng(e.latlng)
				.setContent("Las coordenadas del mapa son" + e.latlng.toString())
				.openOn(mymap);
		}
			
    	mymap.on('click', onMapClick);
		
		L.control.layers(baseMaps, overlayMaps).addTo(mymap);
		
		
		var searchControl = new L.Control.Search({
		layer: cadaver,
		propertyName: 'nombre',
		circleLocation: false
		});
		
		searchControl.on('search_locationfound', function(e) {
        e.layer.setStyle({fillColor: '#3f0', color: '#0f0'});
		})
		
		mymap.addControl(searchControl);
		
		
	