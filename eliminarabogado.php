<?php
	EliminarCliente($_GET['idabogado']);

	function EliminarCliente($idabogado)
	{
		include 'conection.php';
		$sentencia="DELETE FROM abogados WHERE idabogado='".$idabogado."' ";
		$conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));

	}
?>

<script type="text/javascript">
	alert("Abogado Eliminado!!");
	window.location.href='listabogados.php';
</script>