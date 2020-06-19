<?php
require 'conexion.php';

$idcaso = $_POST['idcaso'];
$idabo = $_POST['idabo'];
$idcliente = $_POST['idcliente'];
$idproto = $_POST['idproto'];
$idproceso = $_POST['idproceso'];
$idnotario = $_POST['idnotario'];
$nombresss = $_POST['nombresss'];
$estcaso = $_POST['estcaso'];

$insertar = "INSERT INTO casos VALUES ('$idcaso','$idabo','$idcliente','$idproto','$idproceso','$idnotario','$nombresss','$estcaso')";

$query = mysqli_query($conectar, $insertar);

if(query){

	echo "<script> alert('Registrado correctamente');
	location.href = '../casos.php';
	</script>";
}else{
	echo "<script> alert('Error al registrar'); 
	location.href = '../casos.php';
	</script>";
}



?>