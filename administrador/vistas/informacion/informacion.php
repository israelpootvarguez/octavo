
<?php require_once('./catalogo/controladores/informacion/informacion.php'); ?>
<div class="background"></div>
<div class="container">
  <ul class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i></a></li>
    <li><a href="#"><?=$txt_informacion["miga2"]?></a></li>
  </ul>
  <div class="row">                

    <div id="content" class="col-sm-9">      
        <h1><?=$txt_informacion["miga2"]?></h1>
      <?=$contenido?>
</div>
    <aside id="column-right" class="col-sm-3 hidden-xs">
        <div class="sidebar">
            <ul class="nav nav-tabs nav-stacked">
                <li><a href="http://www.adpromex.com/?r=informacion-informacion">Quiénes somos</a></li>
                <li><a href="http://www.adpromex.com/?r=informacion-informacion&informacion=6">Aviso de privacidad</a></li>
                <li><a href="http://www.adpromex.com/?r=informacion-informacion&informacion=7">Historia</a></li>
                <li><a href="http://www.adpromex.com/?r=informacion-informacion&informacion=1">Formas de pago</a></li>
                <li><a href="http://www.adpromex.com/?r=informacion-informacion&informacion=2">Tips</a></li>
                <li><a href="http://www.adpromex.com/?r=informacion-informacion&informacion=3">Preguntas frecuentes</a></li>
                <li><a href="http://www.adpromex.com/?r=contacto-contacto">Contacto</a></li>
            </ul>
        </div>  
    </aside>
</div>
</div>

