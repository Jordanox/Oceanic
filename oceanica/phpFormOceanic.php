<?php

$dia = $_POST['dia'];
$mes = $_POST['mes'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$dni = $_POST['dni'];
$numeropersonas = $_POST['numeropersonas'];
$anio = $_POST['anio'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "oceanic";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "insert into tabla1 (dia, mes, anio, nombre, apellidos, dni, numeropersonas) values('$dia', '$mes', '$anio', '$nombre', '$apellidos','$dni','$numeropersonas')";

if ($conn->query($sql) === TRUE) {
	echo "añadido: ".$dia.", ".$mes.", ".$anio.", ".$nombre.", ".$apellidos.", ".$dni.", ".$numeropersonas;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>