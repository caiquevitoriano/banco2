<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link rel="stylesheet" href="./material.css">	
	<script src="./material.min.js"></script>	

	<link rel="stylesheet" href="./mapCriar.css">
   	<script type="text/javascript" src="mapCriar.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>
<body>

	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		  <header class="mdl-layout__header">
		    <div class="mdl-layout__header-row">
		      <!-- Title -->
		      <span class="mdl-layout-title">Inicio</span>
		      <!-- Add spacer, to align navigation to the right -->
		      <div class="mdl-layout-spacer"></div>
		      <!-- Navigation. We hide it in small screens. -->
		      <nav class="mdl-navigation mdl-layout--large-screen-only">
		        <a class="mdl-navigation__link" href="criarevento.php">Criar Evento</a>
		        <a class="mdl-navigation__link" href="localizacao.php">Buscar Evento</a>		        
		      </nav>
		      <?php
			  	session_start();
			  	echo 'Bem Vindo! '.$_SESSION['login'];
			  	
				echo ' | <a href="login.php?action=logout"> Sair</a>';
			  ?>
		    </div>
		  </header>
		  <div class="mdl-layout__drawer">
		    <span class="mdl-layout-title">SisTevento</span>
		    <nav class="mdl-navigation">
		      <a class="mdl-navigation__link" href="criarevento.php">Criar Evento</a>
		      <a class="mdl-navigation__link" href="localizacao.php">Buscar Evento</a>
		     </nav>
		  </div>

		  <main class="mdl-layout__content">
		  	<div class="mdl-grid">
		  		
		  		<div class="mdl-cell mdl-cell--4-col mdl-cell--3-col-tablet">
		  			<h2> Criar Eventro </h2>
		  			<form action="#" class="mdl-shadow--4dp centalizaForm">		  					

							  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							    <label  for="sample3">Titulo </label>
							    <input class="mdl-textfield__input" type="text" id="Titulo">
							    
							  </div>

							  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">		
							  	<label  for="sample3">Data Inicio </label> 
							    <input class="mdl-textfield__input" type="date" id="dataInicio">						
							     
							  </div>
							  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">		
							  	 <label for="sample3">Data Final </label> 	
							    <input class="mdl-textfield__input" type="date" id="dataFinal">						
							       
							  </div>

							 <div class="mdl-selectfield mdl-js-selectfield">
							  	<label class="mdl-selectfield__label" for="myselect">Escolha Um tema</label>
							  	<select id="tema" name="tema" class="mdl-selectfield__select">
							  		<option value="option5_value">diversos</option>
								    <option value="option0_value">construção civil</option>
								    <option value="option1_value">informática</option>
								    <option value="option2_value">automação</option>
								    <option value="option3_value">linguagens</option>
								    <option value="option4_value">humanidades</option>								    
							  	</select>							     
							  </div>
							    <br>
								<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Salvar</button>
						 
						</form>	
		  		</div>

		  		<div class="mdl-cell mdl-cell--8-col mdl-cell--5-col-tablet ">

		  			<h2> Local </h2>
		  				<input id="pac-input" class="controls" type="text" placeholder="Pesquisar Local">
    					<div id="map"></div>
				    <script type="text/javascript">
				   		function initAutocomplete() {
				        var map = new google.maps.Map(document.getElementById('map'), {
				          center: {lat: -33.8688, lng: 151.2195},
				          zoom: 13,
				          mapTypeId: 'roadmap'
				        });

				        // Create the search box and link it to the UI element.
				        var input = document.getElementById('pac-input');
				        var searchBox = new google.maps.places.SearchBox(input);
				        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

				        // Bias the SearchBox results towards current map's viewport.
				        map.addListener('bounds_changed', function() {
				          searchBox.setBounds(map.getBounds());
				        });

				        var markers = [];
				        // Listen for the event fired when the user selects a prediction and retrieve
				        // more details for that place.
				        searchBox.addListener('places_changed', function() {
				          var places = searchBox.getPlaces();

				          if (places.length == 0) {
				            return;
				          }

				          // Clear out the old markers.
				          markers.forEach(function(marker) {
				            marker.setMap(null);
				          });
				          markers = [];

				          // For each place, get the icon, name and location.
				          var bounds = new google.maps.LatLngBounds();
				          places.forEach(function(place) {
				            if (!place.geometry) {
				              console.log("Returned place contains no geometry");
				              return;
				            }
				            var icon = {
				              url: place.icon,
				              size: new google.maps.Size(71, 71),
				              origin: new google.maps.Point(0, 0),
				              anchor: new google.maps.Point(17, 34),
				              scaledSize: new google.maps.Size(25, 25)
				            };

				            // Create a marker for each place.
				            markers.push(new google.maps.Marker({
				              map: map,
				              icon: icon,
				              title: place.name,
				              position: place.geometry.location
				            }));

				            if (place.geometry.viewport) {
				              // Only geocodes have viewport.
				              bounds.union(place.geometry.viewport);
				            } else {
				              bounds.extend(place.geometry.location);
				            }
				          });
				          map.fitBounds(bounds);
				        });
				      }
  						/* Script para salvar dados no banco*/
				      function saveData() {
				        var titulo = escape(document.getElementById('titulo').value);
				        var tema = escape(document.getElementById('tema').value);
				        var dataInicio = escape(document.getElementById('dataInicio').value);
				        var dataFinal = escape(document.getElementById('dataFinal').value);
				        var latlng = marker.getPosition();
				        var url = 'criarevento.php?titulo=' + titulo + '&tema=' + tema +
				                  '&dataInicio=' + dataInicio + 
				                  '&dataFinal=' + dataFinal +'&lat=' + latlng.lat() + '&lng=' + latlng.lng();

				        downloadUrl(url, function(data, responseCode) {

				          if (responseCode == 200 && data.length <= 1) {
				            infowindow.close();
				            messagewindow.open(map, marker);
				          }
				        });
				      }

				      function downloadUrl(url, callback) {
				        var request = window.ActiveXObject ?
				            new ActiveXObject('Microsoft.XMLHTTP') :
				            new XMLHttpRequest;

				        request.onreadystatechange = function() {
				          if (request.readyState == 4) {
				            request.onreadystatechange = doNothing;
				            callback(request.responseText, request.status);
				          }
				        };

				        request.open('GET', url, true);
				        request.send(null);
				      }

				      function doNothing () {
				      }
				   </script>
				   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3LOxf-7-7A88kh2FUHeFuC9fukzIq1rc&libraries=places&callback=initAutocomplete"
         async defer></script>
				  		</div>
				  	</div>		    
		  </main>
		 
</body>
</html>