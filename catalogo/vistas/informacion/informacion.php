
<?php require_once('./catalogo/controladores/informacion/informacion.php'); ?>
<div class="background"></div>
<div class="container">
  <ul class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i></a></li>
    <li><a href="#"> <?=$contenido["titulo"]?></a></li>
  </ul>
  <div class="row">                

    <div id="content" class="col-sm-9">      
        <h1><?=$contenido["titulo"]?></h1>
      <?=$contenido["descripcion"]?>
</div>
    <aside id="column-right" class="col-sm-3 hidden-xs">
        <div class="sidebar">
            <ul class="nav nav-tabs nav-stacked">
                <li><a href="#">Quiénes somos</a></li>
                <li><a href="#">Aviso de privacidad</a></li>
                <li><a href="#">Términos y condiciones</a></li>
                <li><a href="#">Formas de pago</a></li>
                <li><a href="#">Tips</a></li>
                <li><a href="#">Preguntas frecuentes</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </div>  
    </aside>
</div>
</div>

