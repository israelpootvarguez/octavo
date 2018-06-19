<?php require_once('./catalogo/controladores/paquetes/detalles.php'); ?>
<div class="product-product container">

  <ul class="breadcrumb">
        <li><a href="http://www.adpromex.com/index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="http://www.adpromex.com/?r=paquetes-paquetes">Paquetes</a></li>
        <li><a href="#"><?= $paquete['pacPackagesDescriptions_Name'];?></a></li>
      </ul>
  <h1><?= $paquete['pacPackagesDescriptions_Name'];?> <?= $paquete['pacPackages_Price'];?></h1>
  <div class="row">
    <div id="content" class="col-sm-12">      
      <div class="row">
        <div class="col-sm-8">
          <ul class="thumbnails">
            <li>
              <a id="a_img_principal" class="thumbnail" href="#" title="cilindro demo"><img src="http://wlapps.net/web/17_wl_vidaverde_tvc/image/cache/catalog/verdecom1uu-380x380.png" title="cilindro demo" alt="cilindro demo" />
              </a>
            </li>
          </ul>
        </div>
      </div>
    <ul class="nav nav-tabs">
      <li class='active'><a data-toggle='tab' href='#menu0'>Video</a></li>
      <li ><a data-toggle='tab' href='#menu1'>Descripcion</a></li>
      </ul>
    <div class="tab-content">
      <div id='menu0' class='tab-pane fade in active'>
        <iframe width="854" height="480" src="https://www.youtube.com/embed/LFvMwss251c?list=RDP9gjJzA4JeM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </p>
      </div>
      <div id='menu1' class='tab-pane fade '>
        <p><?= $paquete['pacPackagesDescriptions_Descriptions'];?><br></p>
      </div>  
    </div>
      </div>
    </div>

<br><br>
</div>

