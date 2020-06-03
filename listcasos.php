<?php
require 'header.php';
?>
<div class="container">
    <div class="page-header">
      <h1 class="all-tittles">Sistema bufete <small>Administración de Casos</small></h1>
  </div>
</div>
<div class="container-fluid">
    <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
      <li role="presentation"><a href="institution.html">Institución</a></li>
      <li role="presentation"><a href="clientes.html">Clientes</a></li>
      <li role="presentation"><a href="abogados.html">Abogados</a></li>
      <li role="presentation" class="active"><a href="casos.html">Casos</a></li>
  </ul>
</div>
<div class="container-fluid"  style="margin: 50px 0;">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
            <img src="assets/img/casos.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
            Bienvenido a la sección donde se encuentra el listado de los casos, puedes eliminar casos.
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 lead">
            <ol class="breadcrumb">
              <li><a href="casos.html">Nuevo caso</a></li>
              <li class="active">Listado de casos</li>
          </ol>
      </div>
  </div>
</div>
<div class="container-fluid">
    <h2 class="text-center all-tittles">Lista de casos</h2>
    <div class="div-table">
        <div class="div-table-row div-table-head">
            <div class="div-table-cell">#</div>
            <div class="div-table-cell">#</div>

            <div class="div-table-cell">Acciones</div>
        </div>
        <div class="div-table-row">
            <div class="div-table-cell">#</div>
            <div class="div-table-cell">#</div>
            <div class="div-table-cell">
                <button class="btn btn-success"><i class="zmdi zmdi-refresh"></i></button>
                <button class="btn btn-danger btn-xs"><i class="zmdi zmdi-delete"></i> &nbsp;&nbsp; Eliminar</button>
            </div>      
        </div>
        <div class="div-table-row">
            <div class="div-table-cell">#</div>
            <div class="div-table-cell">#</div>
            <div class="div-table-cell">
                <button class="btn btn-success"><i class="zmdi zmdi-refresh"></i></button>
                <button class="btn btn-danger btn-xs"><i class="zmdi zmdi-delete"></i> &nbsp;&nbsp; Eliminar</button>
            </div>      
        </div>
        <div class="div-table-row">
            <div class="div-table-cell">#</div>
            <div class="div-table-cell">#</div>
            <div class="div-table-cell">
                <button class="btn btn-success"><i class="zmdi zmdi-refresh"></i></button>
                <button class="btn btn-danger btn-xs"><i class="zmdi zmdi-delete"></i> &nbsp;&nbsp; Eliminar</button>
            </div>      
        </div>
        <div class="div-table-row">
            <div class="div-table-cell">#</div>
            <div class="div-table-cell">#</div>
            <div class="div-table-cell">
                <button class="btn btn-success"><i class="zmdi zmdi-refresh"></i></button>
                <button class="btn btn-danger btn-xs"><i class="zmdi zmdi-delete"></i> &nbsp;&nbsp; Eliminar</button>
            </div>      
        </div>
        <div class="div-table-row">
            <div class="div-table-cell">#</div>
            <div class="div-table-cell">#</div>
            <div class="div-table-cell">
                <button class="btn btn-success"><i class="zmdi zmdi-refresh"></i></button>
                <button class="btn btn-danger btn-xs"><i class="zmdi zmdi-delete"></i> &nbsp;&nbsp; Eliminar</button>
            </div>      
        </div>
    </div>
</div>
<?php
require 'footer.php';
?>