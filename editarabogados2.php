<?php
	EditarAbogado($_POST['idabogado'], $_POST['idprotocolo'], $_POST['idproceso'], $_POST['iddocumento'], $_POST['idnotariales'], $_POST['nombre'], $_POST['telefono']);

	function EditarAbogado($idabog, $idproto, $idproce, $iddocu, $idnota, $nombe, $telefo)
	{
		include 'conection.php';
		$sentencia= "UPDATE abogados SET idprotocolo='".$idproto."', idproceso='".$idproce."', iddocumento='".$iddocu."', idnotariales='".$idnota."', nombre='".$nombe."', telefono='".$telefo."' WHERE idabogado='".$idabog."' ";
		$conexion->query($sentencia) or die ("Error al editar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Abogado editado correctamente!");
	window.location.href='listabogados.php';
</script>