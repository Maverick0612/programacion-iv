<?php
	EliminarCliente($_GET['idcliente']);

	function EliminarCliente($idcliente)
	{
		include 'conection.php';
		$sentencia="DELETE FROM cliente WHERE idcliente='".$idcliente."' ";
		$conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));

	}
?>

<script type="text/javascript">
	alert("Cliente Eliminado!!");
	window.location.href='listclientes.php';
</script>