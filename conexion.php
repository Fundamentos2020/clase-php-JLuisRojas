<?php

$servername = "localhost";
$database = "lista_tareas";
$port = "80";

$username = "root";
$password = "";

$dns = "mysql:host=$servername;dbname=$database;port=$port;";

$connection = new PDO($dns, $username, $password);
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$query = $connection->prepare('SELECT * FROM tareas');
$query->execute();

$tareas = array();

while($row = $query->fetch(PDO::FETCH_ASSOC)) {
  var_dump($row);
}

?>

