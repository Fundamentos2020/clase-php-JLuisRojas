<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "lista_tareas";
$port = "80";

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";

$sql = "SELECT * FROM tareas WHERE completada='NO'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<br>TAREAS NO COMPLETADAS: <br>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<br>";
    echo "Titulo: " . $row["titulo"];
    echo "<br>";
    echo "Descripcion: " . $row["descripcion"];
    echo "<br>";
    echo "Fecha limite: " . $row["fecha_limite"];
    echo "<br>";
    var_dump($row);
    echo "<br>";
    //var_dump($row);
    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();?>

