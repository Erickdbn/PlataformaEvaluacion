<?php

$dbhost = "localhost";
$dbuser = "CHECA-LAS-TABLAS-DE-LA-BD";
$dbpass = "uvFEI2022";
$dbname = "CHECAelNombreDeUSUARIOdelaBD";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {
	echo "Fallo la conexión con MySQL: " . mysqli_connect_error();
	exit();
  }

$id = $_REQUEST['id'];

$result = mysqli_query($conn, "SELECT nombre, descripcion FROM usuarios WHERE id = '$id'");
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){
	  echo "Nombre:\t";
	  echo $row['nombre'] . "<br>";
	  echo "Descripcion del usuario:\t";
	  echo $row['descripcion'] . "<br>";

  }
}
#mysqli_close($con);
?>