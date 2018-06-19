<?php require_once('./catalogo/controladores/inicio/home.php'); ?>
<div class="section1 container-fluid">
    <div class="slider">
        <?php foreach ($banners as $banner) { ?>
            <div class="owl-item item-carousel">
                <!-- <img src="<?=$banner['pacPackages_ImgBanner']?>"> -->
                <img src="http://wlapps.net/web/17_wl_vidaverde_tvc/image/cache/catalog/Slider/slider1-1900x604.jpg">
                <div class="info-content">
                    <p><?= $banner['pacPackagesDescriptions_NameSEO'] ?></p>
                </div>
            </div>
        <?php
            }
        ?>
    </div>
</div>
<div class="section2 container-fluid">
    <div class="container">
        <div class="row">
            <h1><?=$textosHome['title']?></h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 content-packages">
                <a href="http://www.adpromex.com/?r=paquetes-detalles&id=paquete1/es">
                    <!--<img src="<?=$productos[0]['pacPackages_ImgNew']?>"-->
                    <img src="http://wlapps.net/web/17_wl_vidaverde_tvc/catalog/view/theme/default/image/common-home/categories/1.jpg">
                    <div class="info-content">
                        <h3><?=$productos[0]['pacPackagesDescriptions_NameSEO']?></h3>
                        <button><?=$textosHome['boton']?></button>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 content-packages">
                <a href="http://www.adpromex.com/?r=paquetes-detalles&id=paquete2/es">
                    <!--<img src="<?=$productos[1]['pacPackages_ImgNew']?>"-->
                    <img src="http://wlapps.net/web/17_wl_vidaverde_tvc/catalog/view/theme/default/image/common-home/categories/1.jpg">
                    <div class="info-content">
                        <h3><?=$productos[1]['pacPackagesDescriptions_NameSEO']?></h3>
                        <button><?=$textosHome['boton']?></button>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 content-packages">
                <a href="http://www.adpromex.com/?r=paquetes-detalles&id=paquete3/es">
                    <!--<img src="<?=$productos[2]['pacPackages_ImgNew']?>"-->
                    <img src="http://wlapps.net/web/17_wl_vidaverde_tvc/catalog/view/theme/default/image/common-home/categories/1.jpg">
                    <div class="info-content">
                        <h3><?=$productos[2]['pacPackagesDescriptions_NameSEO']?></h3>
                        <button><?=$textosHome['boton']?></button>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<script>
    (function($){
		$(document).ready(function(){
			var options={
					items: 1,
					lazyLoad: true,
					autoplay: true,
					autoplayTimeout: 8000,
					animateOut: 'fadeOut',
					loop: true,
					dots: false,
					nav: false
                };
			if($('.common-body .section1 .slider .owl-item').length>1){
				options.loop=true;
			}
			$('.common-body .section1 .slider').owlCarousel(options);
		});
	})(jQuery);
</script>