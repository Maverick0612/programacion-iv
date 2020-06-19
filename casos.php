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
        <div class="container-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
              <li role="presentation"><a href="institution.php">Institución</a></li>
              <li role="presentation"><a href="clientes.php">Clientes</a></li>
              <li role="presentation"><a href="abogados.php">Abogados</a></li>
              <li role="presentation" class="active"><a href="casos.php">Casos</a></li>
            </ul>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/casos.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para registrar nuevos casos, debes de seleccionar los datos en el siguiente formulario para registrar un nuevo caso.
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Nuevo Caso</li>
                      <li><a href="listcasos.php">Listado de casos</a></li>
                    </ol>
                </div>
            </div>
        </div>


        <form method="POST" name="container-fluid" action="logica/guardarcasos.php">



        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Agregar un nuevo caso.</div>
                <form>
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                        <div class="group-material">
                            <input type="text" name="idcaso" class="material-control tooltips-general" placeholder="ID del caso" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el id del caso">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>ID Caso</label>
                        </div>
                        <div class="group-material">
                            <input type="text" name="idabo" class="material-control tooltips-general" placeholder="ID del abogado" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el id del abogado">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>ID Abogado</label>
                        </div>
                        <div class="group-material">
                            <input type="text" name="idcliente" class="material-control tooltips-general" placeholder="ID del cliente" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el id del cliente">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>ID Cliente</label>
                        </div>
                        <div class="group-material">
                            <input type="text" name="idproto" class="material-control tooltips-general" placeholder="ID del protocolo" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el id del protocolo">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>ID Protocolo</label>
                        </div>
                        <div class="group-material">
                            <input type="text" name="idproceso" class="material-control tooltips-general" placeholder="ID del proceso" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el id del proceso">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>ID Proceso</label>
                        </div>
                        <div class="group-material">
                            <input type="text" name="idnotario" class="material-control tooltips-general" placeholder="ID del notario" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el id del notario">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>ID Notario</label>
                        </div>
                        <div class="group-material">
                            <input type="text" name="nombresss" class="material-control tooltips-general" placeholder="Nombre del caso" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el nombre del caso">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Nombre</label>
                        </div>
                        <div class="group-material">
                            <input type="text" name="estcaso" class="material-control tooltips-general" placeholder="Estado del caso" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el estado del caso">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Estado Caso</label>
                        </div>
                            <p class="text-center">
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                            </p> 
                       </div>
                   </div>
                </form>
            </div>
        </div>
<?php
require 'footer.php';
?>