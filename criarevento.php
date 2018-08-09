<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link rel="stylesheet" href="./material.css">	
	<script src="./material.min.js"></script>	

	<link rel="stylesheet" href="./map.css">
    	
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
							    <input class="mdl-textfield__input" type="text" id="Titulo">
							    <label class="mdl-textfield__label" for="sample3">Titulo: </label>
							  </div>

							  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">			  	
							    <input class="mdl-textfield__input" type="date" id="data">						   
							  </div>

							  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height">
							        <input type="text" value="" class="mdl-textfield__input" id="Tema" readonly>
							        <input type="hidden" value="" name="Tema">
							        <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
							        <label for="Tema" class="mdl-textfield__label">Tema</label>
							        <ul for="Tema" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
								        <li class="mdl-menu__item" data-val="ConsCi">Construção Civil</li>
							            <li class="mdl-menu__item" data-val="Info">Informatica</li>
							            <li class="mdl-menu__item" data-val="Aut">Automação</li>
							            <li class="mdl-menu__item" data-val="Lin">Linguagens</li>
							            <li class="mdl-menu__item" data-val="Hum">Humanidades</li>
							            <li class="mdl-menu__item" data-val="Div">Diversos</li>
							        </ul>
							    </div>
							    <br>
								<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Salvar</button>
						 
						</form>	
		  		</div>

		  		<div class="mdl-cell mdl-cell--8-col mdl-cell--5-col-tablet ">

		  			<h2> Local </h2>
		  			  <div id="map"></div>
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3LOxf-7-7A88kh2FUHeFuC9fukzIq1rc&callback=initMap">
    </script>
		  		</div>
		  	</div>		    
		  </main>
		 
</body>
</html>