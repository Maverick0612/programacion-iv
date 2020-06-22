<?php
    $consulta=EditarCaso($_GET['idcaso']);

    function EditarCaso($idcaso)
    {
        include 'conection.php';
        $sentencia="SELECT * FROM casos WHERE idcaso= '".$idcaso."' ";
        $resultado= $conexion->query($sentencia) or die ("Error al consultar caso".mysqli_error($conexion));
        $fila=$resultado->fetch_assoc();

        return [
            $fila['idcaso'],
            $fila['idabogado'],
            $fila['idcliente'],
            $fila['idprotocolo'],
            $fila['idproceso'],
            $fila['idnotario'],
            $fila['nombre'],
            $fila['estcaso']

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
              <h1 class="all-tittles">Sistema bufete <small>Administración Casos</small></h1>
            </div>
        </div>
        
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/casos.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para editar casos
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Editar Caso</li>
                      
                    </ol>
                </div>
            </div>
        </div>


      



        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Editar un nuevo caso.</div>
                <form action="editarcaso2.php" method="POST">
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                        <div class="group-material">
                            <input type="text" id="idcaso" name="idcaso" value="<?php echo $consulta[0]?>" class="material-control tooltips-general" placeholder="ID del caso" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el id del caso">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>ID Caso</label>
                        </div>
                        <div class="group-material">
                            <input type="text" id="idabogado" name="idabogado" value="<?php echo $consulta[1]?>" class="material-control tooltips-general" placeholder="ID del abogado" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el id del abogado">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>ID Abogado</label>
                        </div>
                        <div class="group-material">
                            <input type="text" id="idcliente" name="idcliente" value="<?php echo $consulta[2]?>" class="material-control tooltips-general" placeholder="ID del cliente" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el id del cliente">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>ID Cliente</label>
                        </div>
                        <div class="group-material">
                            <input type="text" id="idprotocolo" name="idprotocolo" value="<?php echo $consulta[3]?>" class="material-control tooltips-general" placeholder="ID del protocolo" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el id del protocolo">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>ID Protocolo</label>
                        </div>
                        <div class="group-material">
                            <input type="text" id="idproceso" name="idproceso" value="<?php echo $consulta[4]?>" class="material-control tooltips-general" placeholder="ID del proceso" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el id del proceso">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>ID Proceso</label>
                        </div>
                        <div class="group-material">
                            <input type="text" id="idnotario" name="idnotario" value="<?php echo $consulta[5]?>" class="material-control tooltips-general" placeholder="ID del notario" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el id del notario">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>ID Notario</label>
                        </div>
                        <div class="group-material">
                            <input type="text" id="nombre" name="nombre" value="<?php echo $consulta[6]?>" class="material-control tooltips-general" placeholder="Nombre del caso" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el nombre del caso">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Nombre</label>
                        </div>
                        <div class="group-material">
                            <input type="text" id="estcaso" name="estcaso" value="<?php echo $consulta[7]?>" class="material-control tooltips-general" placeholder="Estado del caso" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el estado del caso">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Estado Caso</label>
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