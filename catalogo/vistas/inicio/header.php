<?php require_once('./catalogo/controladores/inicio/header.php'); ?>
<nav id="top" class='section1 container-fluid'>
   <div class="container">
      <div class="row">
         <div class="send_free col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <b><?= $textos_header['txt_telefono']?></b> <?=$DATOS_EMPRESA['sysEnterprise_Phone']?> o <a href="http://www.adpromex.com/?r=contacto-contacto"><u><?= $textos_header['txt_contactanos']?></u></a>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 form-group user-content">
            <div id="top-links" class="nav">
              <ul class="list-inline">
                <li class="dropdown">
                  <a href="<?= $urlMicuenta ?>" title="Mi Cuenta" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md">Mi Cuenta</span> <span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="<?= $urlMicuenta?>">Mi Cuenta</a></li>
                    <li><a href="<?= $urlSalir?>">Salir</a></li>
                  </ul>
                </li>
              </ul>
              <select class="form-control">
                <option>seleccione</option>
                <option value="<?= $textos_header['code_l1']?>"><?= $textos_header['txt_l1']?></option>
                <option value="<?= $textos_header['code_l2']?>"><?= $textos_header['txt_l2']?></option>
              </select>
            </div>
         </div>
      </div>
   </div>
</nav>
<div>
</div>
<div class="section4 container-fluid">
  <div class="container">
    <div class="row">
        <div class="logo col-sm-4">
          <a href="index.php"><img src="./img/logo.png" title="adpromex" alt="adpromex" /></a>
        </div>
        <div class="menu col-lg-8 col-md-8 col-sm-8 col-xs-12">
          <nav id="menu" class="navbar">
              <div class="navbar-header">
                <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
              </div>
              <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="http://www.adpromex.com/?r=paquetes-paquetes"><?= $textos_header['txt_menu1'] ?></a></li>
                    <li><a href="http://www.adpromex.com/?r=informacion-informacion"><?= $textos_header['txt_menu2'] ?></a></li>
                    <li><a href="http://www.adpromex.com/?r=contacto-contacto"><?= $textos_header['txt_menu3'] ?></a></li>
                </ul>
              <div>
          </nav>
          </div>
        </div>
    </div>
  </div>
</div>