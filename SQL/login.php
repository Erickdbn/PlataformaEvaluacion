<?php

$dbhost = "localhost";
$dbuser = "dbretos";
$dbpass = "uvFEI2022";
$dbname = "test1";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn)
{
	die("No hay conexión: ".mysqli_connect_error());
}

$nombre = $_POST["nombre"];
$password = $_POST["password"];

$query = mysqli_query($conn, "SELECT * FROM usuarios WHERE nombre = '$nombre' and contrasena = '$password'");
if (!mysqli_query($conn, "SELECT * FROM usuarios WHERE nombre = '$nombre' and contrasena = '$password'")){
	echo("Error Description: " . mysqli_error($conn));
}
$nr = mysqli_num_rows($query);

if ($nr !=0)
{
	//header ("Location: login.html")
	echo "Bienvenido: LA clave esta aquí " .$nombre;
}
else
{
	//header ("Location: login.html")
	echo "No ingreso";
	echo "<br>";
	echo ' <a href="login.html">Volver al login</a>';
}

?>