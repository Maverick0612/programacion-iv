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
      <h1 class="all-tittles">Sistema bufete <small>Inicio</small></h1>
  </div>
</div>
<section class="full-reset text-center" style="padding: 40px 0;">
    <article class="tile">
        <div class="tile-icon full-reset"><i class="zmdi zmdi-face"></i></div>
        <div class="tile-name all-tittles">INSTITUCIONES</div>
        <div class="tile-num full-reset">0</div>
    </article>
    <article class="tile">
        <div class="tile-icon full-reset"><i class="zmdi zmdi-accounts"></i></div>
        <div class="tile-name all-tittles">CLIENTES</div>
        <div class="tile-num full-reset">0</div>
    </article>
    <article class="tile">
        <div class="tile-icon full-reset"><i class="zmdi zmdi-male-alt"></i></div>
        <div class="tile-name all-tittles">ABOGADOS</div>
        <div class="tile-num full-reset">0</div>
    </article>
    <article class="tile">
        <div class="tile-icon full-reset"><i class="zmdi zmdi-male-female"></i></div>
        <div class="tile-name all-tittles" style="width: 90%;">CASOS</div>
        <div class="tile-num full-reset">0</div>
    </article>

</section>

<?php
require 'footer.php';
?>