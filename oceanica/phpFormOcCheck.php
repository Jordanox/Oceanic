<?php

$fechaentrada = $_POST['fechaentrada'];
$fechasalida = $_POST['fechasalida'];
$adultos = $_POST['adultos'];
$ninios = $_POST['ninios'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "oceanic";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "insert into reservas (fechaentrada, fechasalida, adultos, ninios) values('$fechaentrada', '$fechasalida', '$adultos', '$ninios')";

if ($conn->query($sql) === TRUE) {
	echo "añadido: ".$fechaentrada.", ".$fechasalida.", ".$adultos.", ".$ninios;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>