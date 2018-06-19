<?php require_once('./catalogo/controladores/paquetes/paquetes.php'); ?>
<div class="product-category container">
  <ul class="breadcrumb">
    <li><a href="http://adpromex.com/"><i class="fa fa-home"></i></a></li>
    <li><a href="http://www.adpromex.com/?r=paquetes-paquetes">Paquetes</a></li>
  </ul>
  <div class="row"> 
    <div id="content" class="col-sm-9">
      <div class="row">
        <div class="header col-sm-12">
          <div>
            <h2>Paquetes</h2>
          </div>
        </div>
      </div>
      <hr>
      
      <br />
      
      <?php
      for($i=0; $i < count($paquetes); $i++){?>
      
      <div class="row">
        <div class="product-layout product-list col-xs-12">
          <div class="product-thumb">
            <div class="image"><a href="http://www.adpromex.com/?r=paquetes-detalles&id=<?=$paquetes[$i]['pacPackagesDescriptions_NameSEO']?>"><img src="http://wlapps.net/web/17_wl_vidaverde_tvc/image/cache/catalog/NEGRO-228x228.png" alt="cilindro demo" title="cilindro demo" class="img-responsive" /></a>
            </div>
            <div>
              <div class="caption">
                <h4><a href="http://www.adpromex.com/?r=paquetes-detalles&id=<?=$paquetes[$i]['pacPackagesDescriptions_NameSEO']?>"><?=$paquetes[$i]['pacPackagesDescriptions_Name']?></a></h4>
                <p><?=$paquetes[$i]['pacPackagesDescriptions_Descriptions']?></p>
                <p class="price">$<?=$paquetes[$i]['pacPackages_Price']?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <?php
      }
      ?>
    </div>
  </div>
</div>
