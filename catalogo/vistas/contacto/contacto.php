<?php require_once('./catalogo/controladores/contacto/contacto.php'); ?>  
<div class="background"></div>
<div class="container">
  <ul class="breadcrumb">
    <li><a href="index.php"><i class="fa fa-home"></i></a></li>
    <li><a href="#"><?=$txt_Contacto['miga1']?></a></li>
  </ul>
  <div class="row">                
    <div id="content" class="col-sm-9">      
      <h1><?=$txt_Contacto['miga1']?></h1>
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
            <div class="col-sm-3"><strong><?=$DATOS_EMPRESA['sysEnterprise_Name']?></strong><br>
              <address><?=$DATOS_EMPRESA['sysEnterprise_Address']?></address>
            </div>
            <div class="col-sm-3"><strong><?=$txt_Contacto['telefono']?></strong><br>
            <?=$DATOS_EMPRESA['sysEnterprise_Phone']?><br><br>
            </div>
            <div class="col-sm-3"><strong><?=$txt_Contacto['Horarios']?></strong><br>
            <?=$DATOS_EMPRESA['sysEnterprise_Schedules']?><br>
              <br />
            </div>
          </div>
        </div>
      </div>
      <form action="#" class="form-horizontal">
        <fieldset>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-name"><?=$txt_Contacto['Nombre:']?></label>
            <div class="col-sm-10">
              <input type="text" name="name" value="" id="input-name" class="form-control" />
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email"><?=$txt_Contacto['Email:']?></label>
            <div class="col-sm-10">
              <input type="text" name="email" value="" id="input-email" class="form-control" />
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-enquiry"><?=$txt_Contacto['Pregunta']?></label>
            <div class="col-sm-10">
              <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control"></textarea>
            </div>
          </div>
        </fieldset>
        <div class="buttons">
          <div class="pull-right">
            <input class="btn btn-primary" type="submit" value="<?=$txt_Contacto['boton']?>" />
          </div>
        </div>
      </form>
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
<br><br>