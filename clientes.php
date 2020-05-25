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
      <h1 class="all-tittles">Sistema Bufete <small>Administración Clientes</small></h1>
  </div>
</div>
<div class="container-fluid">
    <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
      <li role="presentation"><a href="institution.php">Institución</a></li>
      <li role="presentation" class="active"><a href="clientes.php">Clientes</a></li>
      <li role="presentation"><a href="abogados.php">Abogados</a></li>
      <li role="presentation"><a href="casos.php">Casos</a></li>
  </ul>
</div>
<div class="container-fluid"  style="margin: 50px 0;">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
            <img src="assets/img/cliente.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
            Bienvenido a la sección para registrar un nuevo cliente, debes de llenar todos los campos del siguiente formulario para poder registrar un cliente.
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 lead">
            <ol class="breadcrumb">
              <li class="active">Nuevo cliente</li>
              <li><a href="listclientes.php">Listado de clientes</a></li>
          </ol>
      </div>
  </div>
</div>
<div class="container-fluid">
    <div class="container-flat-form">
        <div class="title-flat-form title-flat-blue">Agregar un nuevo cliente</div>
        <form autocomplete="off">
            <div class="row">
             <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="group-material">
                    <input type="text" class="material-control tooltips-general" placeholder="ID Cliente" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el id del cliente">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>IDCliente</label>
                </div>
                <div class="group-material">
                    <input type="text" class="material-control tooltips-general" placeholder="Nombre de cliente" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el nombre del cliente">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Nombre</label>
                </div>
                <div class="group-material">
                    <input type="text" class="material-control tooltips-general" placeholder="Dirección de cliente" required="" maxlength="70" data-toggle="tooltip" data-placement="top" title="Escribe la dirección del cliente">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Dirección</label>
                </div>
                <div class="group-material">
                    <input type="text" class="material-control tooltips-general" placeholder="Teléfono de cliente" required="" pattern="[0-9]{8,8}" maxlength="8" data-toggle="tooltip" data-placement="top" title="Solo números, mínimo 8 dígitos">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Teléfono</label>
                </div>
                <div class="group-material">
                    <input type="text" class="material-control tooltips-general" placeholder="DUI" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Ingrese numero de DUI del cliente">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>DUI</label>
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