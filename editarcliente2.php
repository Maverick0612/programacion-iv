<?php
	EditarCliente($_POST['idcliente'], $_POST['ncliente'], $_POST['direccion'], $_POST['telefono'], $_POST['dui']);

	function EditarCliente($idclient, $nclient, $direc, $telef, $duiii)
	{
		include 'conection.php';
		$sentencia= "UPDATE cliente SET ncliente='".$nclient."', direccion='".$direc."', telefono='".$telef."', dui='".$duiii."' WHERE idcliente='".$idclient."' ";
		$conexion->query($sentencia) or die ("Error al editar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Cliente editado correctamente!");
	window.location.href='listclientes.php';
</script>