<?php
require 'conexion.php';

$codigo = $_POST['codigo'];
$nombreinsti = $_POST['nombreinsti'];
$departamentos = $_POST['departamentos'];
$telefonos = $_POST['telefonos'];
$años = $_POST['años'];

$insertar = "INSERT INTO institucion VALUES ('$codigo','$nombreinsti','$departamentos','$telefonos','$años')";

$query = mysqli_query($conectar, $insertar);

if(query){

	echo "<script> alert('Registrado correctamente');
	location.href = '../institution.php';
	</script>";
}else{
	echo "<script> alert('Error al registrar'); 
	location.href = '../institution.php';
	</script>";
}



?>