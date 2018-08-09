
<?php

/*  
require("conexao.php");

// Gets data from URL parameters.
$titulo = $_GET['titulo'];
$dataInicio = $_GET['dataInicio'];
$dataFinal = $_GET['dataFinal'];
$tema = $_GET['tema'];
$lat = $_GET['lat'];
$lng = $_GET['lng'];


// Opens a connection to a MySQL server.
$connection=mysql_connect ("localhost", $username, $password);
if (!$connection) {
  die('Not connected : ' . mysql_error());
}

// Sets the active MySQL database.
$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}

// Inserts new row with place data.
$query = sprintf("INSERT INTO markers " .
         " (id, name, address, lat, lng, type ) " .
         " VALUES (NULL, '%s', '%s', '%s', '%s', '%s');",
         mysql_real_escape_string($name),
         mysql_real_escape_string($address),
         mysql_real_escape_string($lat),
         mysql_real_escape_string($lng),
         mysql_real_escape_string($type));

$result = mysql_query($query);

if (!$result) {
  die('Invalid query: ' . mysql_error());
}
*/
?>