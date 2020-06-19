<?php
require 'conexion.php';

$idcliente = $_POST['idcliente'];
$nombress = $_POST['nombress'];
$direccions = $_POST['direccions'];
$telefonos = $_POST['telefonos'];
$duiss = $_POST['duiss'];

$insertar = "INSERT INTO cliente VALUES ('$idcliente','$nombress','$direccions','$telefonos','$duiss')";

$query = mysqli_query($conectar, $insertar);

if(query){

	echo "<script> alert('Registrado correctamente');
	location.href = '../clientes.php';
	</script>";
}else{
	echo "<script> alert('Error al registrar'); 
	location.href = '../clientes.php';
	</script>";
}



?>