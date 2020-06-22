<?php
	EliminarCliente($_GET['idcaso']);

	function EliminarCliente($idcaso)
	{
		include 'conection.php';
		$sentencia="DELETE FROM casos WHERE idcaso='".$idcaso."' ";
		$conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));

	}
?>

<script type="text/javascript">
	alert("Caso Eliminado!!");
	window.location.href='listcasos.php';
</script>