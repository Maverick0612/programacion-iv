<?php
    $consulta=EditarCliente($_GET['idcliente']);

    function EditarCliente($idcliente)
    {
        include 'conection.php';
        $sentencia="SELECT * FROM cliente WHERE idcliente= '".$idcliente."' ";
        $resultado= $conexion->query($sentencia) or die ("Error al consultar cliente".mysqli_error($conexion));
        $fila=$resultado->fetch_assoc();

        return [
            $fila['idcliente'],
            $fila['ncliente'],
            $fila['direccion'],
            $fila['telefono'],
            $fila['dui']

        ];
    }

?>




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
      <h1 class="all-tittles">Sistema Bufete <small>Administración Clientes</small></h1>
  </div>
</div>

<div class="container-fluid"  style="margin: 50px 0;">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
            <img src="assets/img/cliente.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
            Bienvenido a la sección para editar un cliente
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 lead">
            <ol class="breadcrumb">
              <li class="active">Editar cliente</li>
              
          </ol>
      </div>
  </div>
</div>





<div class="container-fluid">
    <div class="container-flat-form">
        <div class="title-flat-form title-flat-blue">Editar un nuevo cliente</div>
        <form action="editarcliente2.php" method="POST">
          
            <div class="row">
             <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="group-material">
                    <input type="text" id="idcliente" name="idcliente" value="<?php echo $consulta[0]?>" class="material-control tooltips-general" placeholder="ID Cliente" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el id del cliente">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>IDCliente</label>
                </div>
                <div class="group-material">
                    <input type="text" id="nombress" name="ncliente" value="<?php echo $consulta[1]?>" class="material-control tooltips-general" placeholder="Nombre de cliente" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el nombre del cliente">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Nombre</label>
                </div>
                <div class="group-material">
                    <input type="text" id="direccions" name="direccion" value="<?php echo $consulta[2]?>" class="material-control tooltips-general" placeholder="Dirección de cliente" required="" maxlength="70" data-toggle="tooltip" data-placement="top" title="Escribe la dirección del cliente">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Dirección</label>
                </div>
                <div class="group-material">
                    <input type="text" id="telefonos" name="telefono" value="<?php echo $consulta[3]?>" class="material-control tooltips-general" placeholder="Teléfono de cliente" required="" pattern="[0-9]{8,8}" maxlength="8" data-toggle="tooltip" data-placement="top" title="Solo números, mínimo 8 dígitos">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Teléfono</label>
                </div>
                <div class="group-material">
                    <input type="text" id="duiss" name="dui" value="<?php echo $consulta[4]?>" class="material-control tooltips-general" placeholder="DUI" required="" maxlength="50" data-toggle="tooltip" pattern="[0-9]{9,9}" data-placement="top" title="Ingrese numero de DUI del cliente sin guion...123456789">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>DUI</label>
                </div>
                <p class="text-center">
                    
                    <button type="submit" class="btn btn-succes"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                </p> 
            </div>
        </div>
    </form>
</div>
</div>
<?php
require 'footer.php';
?>