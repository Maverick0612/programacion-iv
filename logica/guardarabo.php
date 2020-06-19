<?php
require 'conexion.php';

$idabo = $_POST['idabo'];
$idproto = $_POST['idproto'];
$idproceso = $_POST['idproceso'];
$iddoc = $_POST['iddoc'];
$idnotar = $_POST['idnotar'];
$nombresss = $_POST['nombresss'];
$telefonoo = $_POST['telefonoo'];

$insertar = "INSERT INTO abogados VALUES ('$idabo','$idproto','$idproceso','$iddoc','$idnotar','$nombresss','$telefonoo')";

$query = mysqli_query($conectar, $insertar);

if(query){

	echo "<script> alert('Registrado correctamente');
	location.href = '../abogados.php';
	</script>";
}else{
	echo "<script> alert('Error al registrar'); 
	location.href = '../abogados.php';
	</script>";
}



?>