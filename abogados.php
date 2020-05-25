<?php
//entry.php
session_start();
if(!isset($_SESSION["username"]))
{
     header("location:index.php?action=login");
}
require 'header.php';
?>
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema bufete <small>Administración de abogados</small></h1>
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
                    Bienvenido a la sección para registrar nuevos abogados, debes de llenar el siguiente formulario para registrar un abogado.
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Nuevo Abogado</li>
                      <li><a href="listabogados.php">Listado de Abogados</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Agregar un Abogado</div>
                <form autocomplete="off">
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el ID de Abogado"  required="" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="20" data-toggle="tooltip" data-placement="top" title="Escribe aquí el ID de Abogado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>ID Abogado</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el ID de Protocolo" required="" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe aquí el ID de Protocolo">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>ID Protocolo</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el ID de Procesos" required="" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe aquí el ID de Procesos">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>ID Procesos</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el ID de Documento" required="" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe aquí el ID de Documento">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>ID Documento</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí ID de Notariales" required="" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe aquí ID de Notariales">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>ID Notariales</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el nombre del abogado" required="" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe aquí el nombre del abogado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre </label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el telefono del abogado" required="" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe aquí el telefono del abogado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Telefono </label>
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