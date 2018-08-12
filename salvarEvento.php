
<?php
  
require("conexao.php");

// Gets data from URL parameters.
$user_id = $_GET['user_id'];
$titulo = $_GET['titulo'];
$dataInicio = $_GET['dataInicio'];
$dataFinal = $_GET['dataFinal'];
$tema = $_GET['tema'];
$lat = $_GET['lat'];
$lng = $_GET['lng'];


// Opens a connection to a MySQL server.
$connection=mysql_connect ($host, $user, $pass);
if (!$connection) {
  die('Not connected : ' . mysql_error());
}

// Sets the active MySQL database.
$db_selected = mysql_select_db($evento, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}

// Inserts new row with place data.
$query = sprintf("INSERT INTO evento " .
         " (id, titulo, tema, dataInicio, dataFinal, lat, lng ) " .
         " VALUES (int, '%s', '%s', '%s', '%s', '%s','%s');",
         mysql_real_escape_string($nome),
         mysql_real_escape_string($titulo),
         mysql_real_escape_string($tema),
         mysql_real_escape_string($dataInicio),
         mysql_real_escape_string($temaFinal),
         mysql_real_escape_string($lat),
         mysql_real_escape_string($lng),
         mysql_real_escape_string($tema));
  
$result = mysql_query($query);

if (!$result) {
  die('Invalid query: ' . mysql_error());
}

?>