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
      <h1 class="all-tittles">Sistema Bufete <small>Administración Institución</small></h1>
  </div>
</div>
<div class="container-fluid">
    <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
      <li role="presentation" class="active"><a href="institution.php">Institución</a></li>
      <li role="presentation"><a href="clientes.php">Clientes</a></li>
      <li role="presentation"><a href="abogados.php">Abogados</a></li>
      <li role="presentation"><a href="casos.php">Casos</a></li>
  </ul>
</div>
<div class="container-fluid"  style="margin: 50px 0;">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
            <img src="assets/img/institution.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
            Guarda los datos de tu institución, una vez almacenados los datos no podrás hacer más registros.
            Puedes actualizar la información actual, o eliminar el registro completamente y añadir uno nuevo, siempre
            y cuando no hayas registrado Instituciones.
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container-flat-form">
        <div class="title-flat-form title-flat-blue">Guardar datos de la institución</div>
        <form>
            <div class="row">
             <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="group-material">
                    <input type="text" class="material-control tooltips-general" placeholder="Código de infraestructura" required="" pattern="[0-9]{1,10}" maxlength="10" data-toggle="tooltip" data-placement="top" title="Solo números, máximo 10 caracteres">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Código infraestructura</label>
                </div>
                <div class="group-material">
                    <input type="text" class="material-control tooltips-general" placeholder="Nombre de la institución" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de la institución">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Nombre de la institución</label>
                </div>
                <div class="group-material">
                    <input type="text" class="material-control tooltips-general" placeholder="Departamento de la institución" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="20" data-toggle="tooltip" data-placement="top" title="Escriba el departamento">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Departamento</label>
                </div>
                <div class="group-material">
                    <input type="text" class="material-control tooltips-general" placeholder="Teléfono de la institución" required="" pattern="[0-9]{8,8}" maxlength="8" data-toggle="tooltip" data-placement="top" title="Solo 8 números">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Teléfono</label>
                </div>
                <div class="group-material">
                    <input type="text" class="material-control tooltips-general" placeholder="Año" required="" pattern="[0-9]{1,4}" maxlength="4" data-toggle="tooltip" data-placement="top" title="Solo números, máximo 4 caracteres">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Año</label>
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