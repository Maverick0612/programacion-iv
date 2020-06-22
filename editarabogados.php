<?php
    $consulta=EditarAbogado($_GET['idabogado']);

    function EditarAbogado($idabogado)
    {
        include 'conection.php';
        $sentencia="SELECT * FROM abogados WHERE idabogado= '".$idabogado."' ";
        $resultado= $conexion->query($sentencia) or die ("Error al consultar abogado".mysqli_error($conexion));
        $fila=$resultado->fetch_assoc();

        return [
            $fila['idabogado'],
            $fila['idprotocolo'],
            $fila['idproceso'],
            $fila['iddocumento'],
            $fila['idnotariales'],
            $fila['nombre'],
            $fila['telefono']
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
              <h1 class="all-tittles">Sistema bufete <small>Administración de abogados</small></h1>
            </div>
        </div>
        
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/abogado.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para editar registros de abogados
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Editar Abogado</li>
                      
                    </ol>
                </div>
            </div>
        </div>


     



        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Editar un Abogado</div>
                <form action="editarabogados2.php" method="POST">
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <div class="group-material">
                                <input type="text" id="idabogado" name="idabogado" value="<?php echo $consulta[0]?>" class="material-control tooltips-general" placeholder="Escribe aquí el ID de Abogado"  required="" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="20" data-toggle="tooltip" data-placement="top" title="Escribe aquí el ID de Abogado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>ID Abogado</label>
                            </div>
                            <div class="group-material">
                                <input type="text" id="idprotocolo" name="idprotocolo" value="<?php echo $consulta[1]?>" class="material-control tooltips-general" placeholder="Escribe aquí el ID de Protocolo" required="" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe aquí el ID de Protocolo">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>ID Protocolo</label>
                            </div>
                            <div class="group-material">
                                <input type="text" id="idproceso" name="idproceso" value="<?php echo $consulta[2]?>" class="material-control tooltips-general" placeholder="Escribe aquí el ID de Procesos" required="" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe aquí el ID de Procesos">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>ID Procesos</label>
                            </div>
                            <div class="group-material">
                                <input type="text" id="iddocumento" name="iddocumento" value="<?php echo $consulta[3]?>" class="material-control tooltips-general" placeholder="Escribe aquí el ID de Documento" required="" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe aquí el ID de Documento">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>ID Documento</label>
                            </div>
                            <div class="group-material">
                                <input type="text" id="idnotariales" name="idnotariales" value="<?php echo $consulta[4]?>" class="material-control tooltips-general" placeholder="Escribe aquí ID de Notariales" required="" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe aquí ID de Notariales">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>ID Notariales</label>
                            </div>
                            <div class="group-material">
                                <input type="text" id="nombre" name="nombre" value="<?php echo $consulta[5]?>" class="material-control tooltips-general" placeholder="Escribe aquí el nombre del abogado" required="" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe aquí el nombre del abogado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre </label>
                            </div>
                            <div class="group-material">
                                <input type="text" id="telefono" name="telefono" value="<?php echo $consulta[6]?>" class="material-control tooltips-general" placeholder="Escribe aquí el telefono del abogado" required="" pattern="[0-9]{8,8}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe aquí el telefono del abogado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Telefono </label>
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