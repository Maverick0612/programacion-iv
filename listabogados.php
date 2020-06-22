<?php
ob_start();
session_start();
require_once 'config.php'; 
if(!isset($_SESSION['logged_in'])){
	header('Location: index.php');
}
require 'header.php';
?>
<div class="container">
    <div class="page-header">
      <h1 class="all-tittles">Sistema bufete <small>Administración Abogados</small></h1>
  </div>
</div>
<div class="container-fluid">
    <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
      <li role="presentation"><a href="institution.php">Institución</a></li>
      <li role="presentation"><a href="clientes.php">Clientes</a></li>
      <li role="presentation" class="active"><a href="abogados.php">Abogados</a></li>
      <li role="presentation"><a href="casos.php">Casos</a></li>
  </ul>
</div>
<div class="container-fluid"  style="margin: 50px 0;">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
            <img src="assets/img/abogado.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
            Bienvenido a la sección donde se encuentra el listado de abogados. Puedes actualizar o eliminar los datos de los abogados.
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 lead">
            <ol class="breadcrumb">
              <li><a href="abogados.php">Nuevo Abogado</a></li>
              <li class="active">Listado de abogados</li>
          </ol>
      </div>
  </div>
</div>
<div id="contenido">
    <h2 class="text-center all-tittles">listado de abogados</h2>
    <table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px; border: 1">
        <thead>
            <th>ID ABOGADO</th>
            <th>ID PROTOCOLO</th>
            <th>ID PROCESO</th>
            <th>ID DOCUMENTO</th>
            <th>ID NOTARIALES</th>
            <th>NOMBRE</th>
            <th>TELEFONO</th>
        </thead>

       <?php
        include "conection.php";
        $sentecia="SELECT * FROM abogados";
        $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
        while($fila=$resultado->fetch_assoc())
        {
            echo "<tr>";
            echo "<td>"; echo $fila['idabogado']; echo "</td>";
            echo "<td>"; echo $fila['idprotocolo']; echo "</td>";
            echo "<td>"; echo $fila['idproceso']; echo "</td>";
            echo "<td>"; echo $fila['iddocumento']; echo "</td>";
            echo "<td>"; echo $fila['idnotariales']; echo "</td>";
            echo "<td>"; echo $fila['nombre']; echo "</td>";
            echo "<td>"; echo $fila['telefono']; echo "</td>";
            echo "<td><a href= 'editarabogados.php?idabogado=".$fila['idabogado']."'><button type='button' class='btn btn-success'>Modificar</button> </a></td>";
            echo "<td><a href= 'eliminarabogado.php?idabogado=".$fila['idabogado']."'><button type='button' class='btn btn-danger'>Eliminar</button> </a></td>";
            echo "</tr>";
        }
       ?>
    </table>
</div>
<?php
require 'footer.php';
?>