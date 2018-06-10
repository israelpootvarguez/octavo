
<?php require_once('./catalogo/controladores/informacion/informacion.php'); ?>
<div class="background"></div>
<div class="container">
  <ul class="breadcrumb">
    <li><a href="index.php"><i class="fa fa-home"></i></a></li>
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
                <li><a href="http://www.adpromex.com/?r=informacion-informacion&informacion=5"><?=$Textos_menu_lateral['txt5']?></a></li>
                <li><a href="http://www.adpromex.com/?r=informacion-informacion&informacion=6"><?=$Textos_menu_lateral['txt6']?></a></li>
                <li><a href="http://www.adpromex.com/?r=informacion-informacion&informacion=1"><?=$Textos_menu_lateral['txt1']?></a></li>
                <li><a href="http://www.adpromex.com/?r=informacion-informacion&informacion=2"><?=$Textos_menu_lateral['txt2']?></a></li>
                <li><a href="http://www.adpromex.com/?r=informacion-informacion&informacion=3"><?=$Textos_menu_lateral['txt3']?></a></li>
                <li><a href="http://www.adpromex.com/?r=contacto-contacto"><?=$Textos_menu_lateral['txt4']?></a></li>
            </ul>
        </div>  
    </aside>
</div>
</div>

