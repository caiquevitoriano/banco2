

<!DOCTYPE html>
<html>
  <head>
    <title>Geolocation</title>
    <link rel="stylesheet" href="./css/material.css">
    <script src="./js/material.min.js"></script>
    <link rel="stylesheet" href="./css/map.css">
    <script src="./map.js"></script>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    
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
         
        </div>
      </header>
      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">SisTevento</span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="criarevento.php">Criar Evento</a>
          <a class="mdl-navigation__link" href="localizacao.php">Buscar Evento</a>
         </nav>
      </div>

       <div class="page-content">
           
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3LOxf-7-7A88kh2FUHeFuC9fukzIq1rc&callback=initMap">
    </script>
        </div>

  </div>
  <div id="map" height="460px" width="100%"></div>
  
  </body>
</html>