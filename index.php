<?php
$servername = "localhost";
$username = "root";
$password = "rootsgc";
$dbname = "folios";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname) ;
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error) ;
}

$id = isset($_GET['id'])? $_GET['id']: 0;
$vendedor = isset($_GET["id"])? $_GET['id']: '0';
$folio = isset($_GET["folio"])? $_GET['folio']: '0';
$nombre = isset($_GET["nombre"])? $_GET['nombre']: '0';
$fichero = isset($_GET["fichero"])? $_GET['fichero']: '0';
$fecha = isset($_GET['fecha'])? $_GET['fecha']: 0;

$sql = "INSERT INTO `factura2` (`id`, `vendedor`, `folio`, `nombre`, `fichero`, `fecha`, `log`) VALUES (NULL, '$vendedor', '$folio', '$nombre', '$fichero', '$fecha', now()); ";

$result = $conn->query($sql);

$sql = "SELECT * from factura2 where `vendedor` = '" . $id ."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()){
      echo "id:" . $row["id"]. ";Vendedor:" . $row["vendedor"]. ";folio:". $row["folio"].";nombre:".$row["nombre"]. ";fichero:" . $row["fichero"].";fecha:" .$row["fecha"]. ";log:". $row["log"] . "<br>";
    }
}

$conn->close();
