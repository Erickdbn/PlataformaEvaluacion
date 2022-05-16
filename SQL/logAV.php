<?php

$dbhost = "localhost";
$dbuser = "CHECA-LAS-TABLAS-DE-LA-BD";
$dbpass = "uvFEI2022";
$dbname = "CHECAelNombreDeUSUARIOdelaBD";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn)
{
	die("No hay conexión: ".mysqli_connect_error());
}

$nombre = $_POST["nombre"];
$password = $_POST["password"];

$query = mysqli_query($conn, "SELECT * FROM usuarios WHERE nombre =('$nombre') and contrasena =('$password')");
if (!mysqli_query($conn, "SELECT * FROM usuarios WHERE nombre =('$nombre') and contrasena =('$password')")){
	echo("Error Description: " . mysqli_error($conn));
}
$nr = mysqli_num_rows($query);

if ($nr !=0)
{
	
	echo "Bienvenido: Puede consultar los datos de sus empleados aquí estimado: " .$nombre;
	echo "<br>";
	echo ' <a href="loginAV2.html">Empleados actualmente laborando</a>';
}
else
{
	//header ("Location: login.html")
	echo "No ingreso";
	echo "<br>";
	echo ' <a href="logAV.html">Volver al login</a>';
}

?>