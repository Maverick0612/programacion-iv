<?php
	EditarCaso($_POST['idcaso'], $_POST['idabogado'], $_POST['idcliente'], $_POST['idprotocolo'], $_POST['idproceso'], $_POST['idnotario'], $_POST['nombre'], $_POST['estcaso']);

	function EditarCaso($idcas, $idabo, $idcli, $idpro, $idpros, $idnot, $nom, $est)
	{
		include 'conection.php';
		$sentencia= "UPDATE casos SET idabogado='".$idabo."', idcliente='".$idcli."', idprotocolo='".$idpro."', idproceso='".$idpros."', idnotario='".$idnot."', nombre='".$nom."', estcaso='".$est."' WHERE idcaso='".$idcas."' ";
		$conexion->query($sentencia) or die ("Error al editar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Caso editado correctamente!");
	window.location.href='listcasos.php';
</script>