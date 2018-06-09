<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="es" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="es" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="es">
<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>cilindro demo</title>
<base href="http://wlapps.net/web/17_wl_vidaverde_tvc/" />
<script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
<link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
<script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
<link href="catalog/view/theme/default/stylesheet/stylesheet.css" rel="stylesheet">

<!-- custom ************** -->

<link href="catalog/view/theme/default/stylesheet/layout.css" rel="stylesheet">
<link href="catalog/view/theme/default/stylesheet/theme.css" rel="stylesheet">
<link href="catalog/view/theme/default/stylesheet/common-header.css" rel="stylesheet">
<link href="catalog/view/theme/default/stylesheet/common-footer.css" rel="stylesheet">

<link href="catalog/view/theme/default/stylesheet/common-home.css" rel="stylesheet">
<link href="catalog/view/theme/default/stylesheet/product-category.css" rel="stylesheet">
<link href="catalog/view/theme/default/stylesheet/product-product.css" rel="stylesheet">

<!-- ******************** -->

<link href="catalog/view/javascript/jquery/magnific/magnific-popup.css" type="text/css" rel="stylesheet" media="screen" />
<link href="catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />
<script src="catalog/view/javascript/common.js" type="text/javascript"></script>
<link href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/product&amp;product_id=96" rel="canonical" />
<link href="http://wlapps.net/web/17_wl_vidaverde_tvc/image/catalog/favicon.png" rel="icon" />
<script src="catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="catalog/view/javascript/jquery/datetimepicker/moment.js" type="text/javascript"></script>
<script src="catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script>/*alert("x");*/</script></head>
<body class="product-product-96">
  
    
  <!-- debug -->

  
  <script>
      //debug
      $(document).ready(function(){

                        var dev_mode = false;
          
          if(dev_mode){
              $(".tag").css({
                  position: 'absolute',
                  padding:  '3px',
                  backgroundColor: 'red',
                  color: 'white',
                  zIndex: '1000',
                  borderRadius: '5px',
                  opacity: '0.7',
                  fontSize: '10px'
              });
              
              $(".tag").parent().css("outline", "dotted red 1px");
          }else{
              $(".tag").css('display', 'none');
          }
      });
  </script>

  <div class="common-header"><span class='tag'>common-header</span>

    <!--<div class="section1 container-fluid"><span class='tag'>section1</span>
      <div class="container">
        <div class="row">

          <div class="send_free col-lg-6 col-md-6 col-sm-6 col-xs-12"><span class='tag'>send_free</span>
            <b>PEDIDOS POR TELÉFONO:</b> 01 (999) 942-67 89 o  <i class="fa fa-truck" aria-hidden="true"></i>
          </div>

          <div class="schedule col-lg-6 col-md-6 col-sm-6 col-xs-12"><span class='tag'>schedule</span>
            LUNES A VIERNES DE 9AM A 7PM Y SÁBADOS DE 9AM A 2PM          </div>
          
        </div>
      </div>
    </div>-->

    <nav id="top" class='section2 container-fluid'><span class='tag'>section2</span>
      <div class="container">
        <div class="row">
          <div class="send_free col-lg-6 col-md-6 col-sm-6 col-xs-12"><span class='tag'>send_free</span>
              <b>PEDIDOS POR TELÉFONO:</b> 01 (999) 942-67 89 o <a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/contact"><u>CONTÁCTANOS</u></a>
          </div>

                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><span class='tag'>nav</span>
            <div id="top-links" class="nav pull-right">
              <ul class="list-inline">
                <!--<li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/contact"><i class="fa fa-phone"></i></a> <span class="hidden-xs hidden-sm hidden-md">123456789</span></li>-->
                <li class="dropdown"><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/account" title="Mi Cuenta" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md">Mi Cuenta</span> <span class="caret"></span></a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
                  <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/register">Registrarse</a></li>
                    <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/login">Iniciar sesión</a></li>
                                      </ul>
                </li>
                <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/wishlist" id="wishlist-total" title="Lista de deseos"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm hidden-md">Lista de deseos</span></a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=checkout/cart" title="Carrito de Compras"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Carrito de Compras</span></a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=checkout/checkout" title="Pagar"><i class="fa fa-share"></i> <span class="hidden-xs hidden-sm hidden-md">Pagar</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <header>
      <div class="section3 container-fluid"><span class='tag'>section3</span>
        <div class="container">
          <div class="row">
            

            <div class="logo col-lg-7 col-md-6 col-sm-5 col-xs-12"><span class='tag'>logo</span>
              <!--                <a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=common/home"><img src="http://wlapps.net/web/17_wl_vidaverde_tvc/image/catalog/LOGOvidaverde.png" title="Vida Verde" alt="Vida Verde" /></a>
                -->
            </div>
            
            <div class="search col-lg-3 col-md-3 col-sm-4 col-xs-6"><span class='tag'>search</span>
              <div id="search" class="input-group">
  <input type="text" name="search" value="" placeholder="Buscar productos ..." class="form-control input-lg" />
  <span class="input-group-btn">
    <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
  </span>
</div>            </div>

            <div class="cart col-lg-2 col-md-3 col-sm-3 col-xs-6 text-right"><span class='tag'>cart</span>
              <div id="cart" class="btn-group btn-block">
  <button type="button" data-toggle="dropdown" data-loading-text="Cargando..." class="btn btn-inverse btn-block btn-lg dropdown-toggle"><i class="fa fa-shopping-cart"></i> <span id="cart-total">0 artículo(s) - $0.00</span></button>
  <ul class="dropdown-menu pull-right">
        <li>
      <p class="text-center">Tu Carrito de Compras está vacío!</p>
    </li>
      </ul>
</div>
            </div>

          </div>
        </div>
      </div>
    </header>

          <div class="section4 container-fluid"><span class='tag'>section4</span>
        <div class="container">
          <div class="row">
            <div class="logo col-sm-4"><span class='tag'>logo</span>
                              <a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=common/home"><img src="http://wlapps.net/web/17_wl_vidaverde_tvc/image/catalog/LOGOvidaverde.png" title="Vida Verde" alt="Vida Verde" /></a>
                            </div>

            <div class="menu col-lg-8 col-md-8 col-sm-8 col-xs-12"><span class='tag'>menu</span>
              <nav id="menu" class="navbar">

                <div class="navbar-header"><span id="category" class="visible-xs">Categorías</span>
                  <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
                </div>

                <div class="collapse navbar-collapse navbar-ex1-collapse">
                  <ul class="nav navbar-nav">
                                                            <li class="dropdown"><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67" class="dropdown-toggle" data-toggle="dropdown">Tienda de productos</a>
                      <div class="dropdown-menu">
                        <div class="dropdown-inner">
                                                    <ul class="list-unstyled">
                                                        <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_75">Agendas (0)</a></li>
                                                        <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_72">Camisas (0)</a></li>
                                                        <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_74">Chanclas (0)</a></li>
                                                        <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_69">Cilindros (2)</a></li>
                                                        <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_73">Gorras (0)</a></li>
                                                        <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_68">Novedades (0)</a></li>
                                                        <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_70">Tazas (0)</a></li>
                                                        <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_71">Vasos (0)</a></li>
                                                      </ul>
                                                  </div>
                        <a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67" class="see-all">Ver: Tienda de productos</a> </div>
                    </li>
                                                            <li><a href="./index.php?route=information/information&information_id=4">Diseño a medida</a></li>
                    <li><a href="./index.php?route=information/information&information_id=4">Servicios</a></li>
                    <li><a href="./index.php?route=information/information&information_id=4">Quiénes somos</a></li>
                    <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/contact">Contacto</a></li>
                  </ul>
                </div>

              </nav>
            </div>
            
          </div>
        </div>
      </div>
    
  </div>
  <div class="background">
  </div>
<div class="product-product container"><span class='tag'>product-product</span>

<!-- Button trigger modal -->
<div id="mymodal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <h2 style="text-align: center;">Se agrego un producto a tu carrito</h2>
      <div class="col-sm-6">
        <img id="modalImg" src="http://wlapps.net/web/17_wl_vidaverde_tvc/image/cache/catalog/NEGRO-380x380.png" style="float: right;"/>
      </div>
      <div id="modalInf" class="col-sm-6">
      </div>
      <div style="clear: both;"></div>
      <div style="text-align: center;padding: 20px;">
        <a href="./index.php?route=checkout/cart">
          <button type="button" class="btn btn-primary">Realizar la compra</button>
        </a>
        <a href="#" onclick="location.reload()"  >

        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: dimgray;color: white;">Seguir comprando</button>
        </a>
      </div>
      <div style="clear: both;"></div>
    </div>
  </div>
</div>

  <ul class="breadcrumb">
        <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=common/home"><i class="fa fa-home"></i></a></li>
        <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67">Tienda de productos</a></li>
        <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_69">Cilindros</a></li>
        <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/product&amp;path=67_69&amp;product_id=96">cilindro demo</a></li>
      </ul>
  <h1>cilindro demo $50.00</h1>
  <div class="row">                <div id="content" class="col-sm-12">      <div class="row">
        
                                <div class="col-sm-8">
        
        <ul class="thumbnails">
                        <li><a id="a_img_principal" class="thumbnail" href="http://wlapps.net/web/17_wl_vidaverde_tvc/image/cache/catalog/verdecom1uu-500x500.png" title="cilindro demo"><img src="http://wlapps.net/web/17_wl_vidaverde_tvc/image/cache/catalog/verdecom1uu-380x380.png" title="cilindro demo" alt="cilindro demo" /></a></li>
            
                    </ul>
        
        </div>

                        
        <div id="product" class="col-sm-4">
          <form class="form-horizontal" id="form-review">
          
          <input type='hidden' name='product_id' value='96'/>
            <h5 id='titleStage1'>
              <b>Seleccione el color del producto</b>
              <i class='fa fa-check' aria-hidden='true'></i>
            </h5>          
            
            <div id='bodyStage1'>

            <div style="clear: both;"></div>
            
              <div 
                  data-index='0'
                  style='background-color:#008000;' 
                  class='radioColor' 
                  data-value='18'>
                  <i  style='position: absolute; display: block; text-shadow: 0px 0px 6px black' class='fa fa-check' aria-hidden='true'></i>
                </div><div 
                  data-index='1'
                  style='background-color:#ffff00;' 
                  class='radioColor' 
                  data-value='19'>
                  <i style='position: absolute; display: none; text-shadow: 0px 0px 6px black ' class='fa fa-check' aria-hidden='true'></i>
                </div>            
              <input type='hidden' name='productColor' />

              <div style="clear: both;"></div>
              <button id="stage2" type="button"  style="" class="btn btnStage btnStageNex">Guardar y continuar</button>
            </div>
            <div style="clear: both;"></div>
            
            <h5 id='titleStage2'>
              <b>Seleccione el color y tipo de estampado </b>
              <i class='fa fa-check' aria-hidden='true'></i>
            </h5>
            <div style="clear: both;"></div>

            <div id='bodyStage2'>
              <div id='bodyStage2printables2' class="col-sm-12 bodyStage2printables">
                              </div>
              <input type='hidden' name='productPrintable' value='0'>

              <div style="clear: both;"></div>
              <br>
              <span>Precio de estampado por compra </span>
              <b id="product_printables_price">$20.00</b>
              <span> el mínimo de compra es </span>
              <b id="product_printables_piecesMin">1Pzas</b>
              <span> si compra </span>
              <b id="product_printables_piecesMax">15Pzas</b>
              <span> o más el estampado es gratis</span>
              <div style="clear: both;"></div>
              <br>
              <select class="form-control" name="productTagsColor">
              
                            </select>

              <div style="clear: both;"></div>
                            <div  >
              <input id="isPersonalized" type='checkbox' name='isPersonalized'>
              Personalizado con nombres diferentes
              </div>
              <div class="row custom-name-panel div-custom-name" >
                <div class="col-lg-12 col-md-12 col-sm-12 panel-add">
                  <div class="btn btn-add col-lg-3 col-md-3 col-sm-3" ><i class="fa fa-user-plus" aria-hidden="true"></i></div>  
                  <div  class="col-lg-9 col-md-9 col-sm-9"><b>30.00</b> extra por pieza</div>
                </div>
                <br>
                <br>
              </div>

              <textarea 
              name="detail" 
              placeholder="Escriba la lista de nombres que desea imprimir separado por comas, ejemplo: Luis,Jorge,Maria" 
              cols="30" 
              rows="10" 
              style="display:none;"
              ></textarea>

              <div style="clear: both;"></div>
              <button id="stage3" type="button" class="btn btnStage btnStageNex">Guardar y continuar</button>
              <button id="backStage1" type="button" class="btn btnStage backStage">Regresar</button>
              <div style="clear: both;"></div>
            </div>
              
            <div style="clear: both;"></div>
            
            
                  <h5 id='titleStage3' style='display: none;' ><b>Indique El corte y Tamaño</b><i class='fa fa-check' aria-hidden='true'></i></h5><div id='bodyStage3' style='display: none;'><div class='col-sm-12' style='display: none;'><div class='col-sm-6'>Corte:</div><div class='col-sm-6'><select class='form-control' name='product_variant_sexe' ></select></div></div><div class='col-sm-12' style='display: none;'><div class='col-sm-6'>Tamaño:</div><div class='col-sm-6'><select class='form-control' name='product_variant_size' ></select></div></div><div style='clear: both;'></div><button id='stage4' type='button' class='btn btnStage btnStageNex'>Guardar y continuar</button><button id='backStage2' type='button' class='btn btnStage backStage'>Regresar</button><div style='clear: both;'></div></div>                  
              
              
              
              
              
            

            <h5 id='titleStage4'>
              <b>Indique la cantidad y agregue al carrito</b>
              <i class='fa fa-check' aria-hidden='true'></i>
            </h5>
            <input type='hidden' name='productVariant' value='0'>
            <div id='bodyStage4'>
              <div class="col-sm-12">
                <div class="col-sm-6">Cantidad:</div>
                <div class="col-sm-6"><input type='number' name='quantity' value='1'></div>  
              </div>
              <div style="clear: both;"></div>
              <button id="button-cart" type="button" class="btn btnStage"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Agregar al carrito</button>
              <button id="backStage3" type="button" class="btn btnStage backStage">Regresar</button>
              <div style="clear: both;"></div>
            </div>
            
          </form>
        </div>
          
        <!--
                                <div class="col-sm-8">
                    <ul class="thumbnails">
                        <li><a id="a_img_principal" class="thumbnail" href="http://wlapps.net/web/17_wl_vidaverde_tvc/image/cache/catalog/NEGRO-500x500.png" title="cilindro demo"><img id="img_principal" src="http://wlapps.net/web/17_wl_vidaverde_tvc/image/cache/catalog/NEGRO-380x380.png" title="cilindro demo" alt="cilindro demo" /></a></li>
                                  </ul>
                    <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-description" data-toggle="tab">Descripción</a></li>
                                  </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab-description"><p>loremloremloremloremloremloremloremloremloremloremloremloremloremloremloremlorem<br></p></div>
            
                      </div>
        </div>
        
                                <div class="col-sm-4 detail"><span class='tag'>detail</span>
          
          <div class="btn-group">
            <button type="button" data-toggle="tooltip" class="btn btn-default" title="Favoritos" onclick="wishlist.add('96');"><i class="fa fa-heart"></i></button>
            <button type="button" data-toggle="tooltip" class="btn btn-default" title="Comparar" onclick="compare.add('96');"><i class="fa fa-exchange"></i></button>
          </div>
          
          <h1>cilindro demo</h1>
          
          <ul class="list-unstyled">
                        <li>Fabricante: <a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/manufacturer/info&amp;manufacturer_id=11">lorem</a></li>
                        <li>Código de Producto: 1234</li>
                        <li>Existencia: Disponible</li>
          </ul>
          
                    <ul class="list-unstyled">
                        <li>
              <h2>$50.00</h2>
            </li>
                                                            <li>
              <hr>
            </li>
                        <li>15 o más $45.00</li>
                                  </ul>
                   
          <div id="product">
                         
                                  </div>

                  </div>
        -->

      </div>
      <!--tab-->


      <ul class="nav nav-tabs">
      <li class='active'><a data-toggle='tab' href='#menu0'>Descripción</a></li><li ><a data-toggle='tab' href='#menu1'>Descuentos</a></li><li ><a data-toggle='tab' href='#menu2'>Característcas</a></li><li ><a data-toggle='tab' href='#menu3'>Video</a></li><li ><a data-toggle='tab' href='#menu4'>Condiciones de compra</a></li><li ><a data-toggle='tab' href='#menu5'>Opinioes</a></li>    </ul>
    <div class="tab-content">
    <div id='menu0' class='tab-pane fade in active'><p>loremloremloremloremloremloremloremloremloremloremloremloremloremloremloremlorem<br></p></div><div id='menu1' class='tab-pane fade '><p>loremloremloremloremloremloremloremloremloremloremloremloremloremloremloremlorem<br></p></div><div id='menu2' class='tab-pane fade '><p>loremloremloremloremloremloremloremloremloremloremloremloremloremloremloremlorem<br></p></div><div id='menu3' class='tab-pane fade '><p>loremloremloremloremloremloremloremloremloremloremloremloremloremloremloremlorem<br></p></div><div id='menu4' class='tab-pane fade '><p>loremloremloremloremloremloremloremloremloremloremloremloremloremloremloremlorem<br></p></div><div id='menu5' class='tab-pane fade '><p>loremloremloremloremloremloremloremloremloremloremloremloremloremloremloremlorem<br></p></div>    </div>
      <!--imagenes relaconadas-->
            <h3>Productos relacionados</h3>
      <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="product-thumb transition">
            <div class="image"><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/product&amp;product_id=74"><img src="http://wlapps.net/web/17_wl_vidaverde_tvc/image/cache/catalog/anillo.-80x80.JPG" alt="Cilindro Naolis" title="Cilindro Naolis" class="img-responsive" /></a></div>
            <div class="caption">
              <h4><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/product&amp;product_id=74">Cilindro Naolis</a></h4>
              <p></p>
                                          <p class="price">
                                $20.00                                              </p>
                          </div>
            <div class="button-group">
              <button type="button" onclick="cart.add('74', '1');"><span class="hidden-xs hidden-sm hidden-md">Comprar</span> <i class="fa fa-shopping-cart"></i></button>
              <button type="button" data-toggle="tooltip" title="Favoritos" onclick="wishlist.add('74');"><i class="fa fa-heart"></i></button>
              <button type="button" data-toggle="tooltip" title="Comparar" onclick="compare.add('74');"><i class="fa fa-exchange"></i></button>
            </div>
          </div>
        </div>
                <div class="clearfix visible-md"></div>
                                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="product-thumb transition">
            <div class="image"><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/product&amp;product_id=96"><img src="http://wlapps.net/web/17_wl_vidaverde_tvc/image/cache/catalog/bote rojo brindes-80x80.png" alt="cilindro demo" title="cilindro demo" class="img-responsive" /></a></div>
            <div class="caption">
              <h4><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/product&amp;product_id=96">cilindro demo</a></h4>
              <p>loremloremloremloremloremloremloremloremloremloremloremloremloremloremloremlorem</p>
                                          <p class="price">
                                $50.00                                              </p>
                          </div>
            <div class="button-group">
              <button type="button" onclick="cart.add('96', '1');"><span class="hidden-xs hidden-sm hidden-md">Comprar</span> <i class="fa fa-shopping-cart"></i></button>
              <button type="button" data-toggle="tooltip" title="Favoritos" onclick="wishlist.add('96');"><i class="fa fa-heart"></i></button>
              <button type="button" data-toggle="tooltip" title="Comparar" onclick="compare.add('96');"><i class="fa fa-exchange"></i></button>
            </div>
          </div>
        </div>
                              </div>
                  </div>
    </div>
    <br>

    
<br><br>
</div>

<script type="text/javascript">
var piecesMin = 1;
$('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){
	$.ajax({
		url: 'index.php?route=product/product/getRecurringDescription',
		type: 'post',
		data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),
		dataType: 'json',
		beforeSend: function() {
			$('#recurring-description').html('');
		},
		success: function(json) {
			$('.alert, .text-danger').remove();

			if (json['success']) {
				$('#recurring-description').html(json['success']);
			}
		}
	});
});
//--></script>
<script type="text/javascript"><!--
$('#button-cart').on('click', function() {
  
	$.ajax({
		url: 'index.php?route=checkout/cart/add',
		type: 'post',
		data: $('#product input[type=\'text\'],#product input[type=\'number\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),
		dataType: 'json',
		beforeSend: function() {
			$('#button-cart').button('loading');
		},
		complete: function() {
			$('#button-cart').button('reset');
		},
		success: function(json) {
			$('.alert, .text-danger').remove();
			$('.form-group').removeClass('has-error');

			if (json['error']) {
				if (json['error']['option']) {
					for (i in json['error']['option']) {
						var element = $('#input-option' + i.replace('_', '-'));

						if (element.parent().hasClass('input-group')) {
							element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
						} else {
							element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
						}
					}
				}

				if (json['error']['recurring']) {
					$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
				}

				// Highlight any found errors
				$('.text-danger').parent().addClass('has-error');
			}

			if (json) {
        var html = "";
        html += "<h4><b> " + json.product.name + " </b></h4>";
        html += "<span>Color del producto: " + json.product.product_color_title + "</span><br>";
        html += "<span>Estampado: " + json.product.product_printable_title + " color " + json.product.productTagsColor + "</span><br>";
        html += "<span>Cantidad: " + json.product.quantity + "</span><br>";
        html += "<span>Precio: $" + json.product.total + "</span><br><br>";
        html += "<span>¿Que deseas hacer?</span><br>";

        $("#modalImg").attr("src",json.product.product_variant_image_thump);
        $("#modalInf").html(html);

        $('#mymodal').modal("show")
      }
		},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
	});
});
//--></script>
<script type="text/javascript"><!--
$('.date').datetimepicker({
	pickTime: false
});

$('.datetime').datetimepicker({
	pickDate: true,
	pickTime: true
});

$('.time').datetimepicker({
	pickDate: false
});



$('button[id^=\'button-upload\']').on('click', function() {
	var node = this;

	$('#form-upload').remove();

	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

	$('#form-upload input[name=\'file\']').trigger('click');

	if (typeof timer != 'undefined') {
    	clearInterval(timer);
	}

	timer = setInterval(function() {
		if ($('#form-upload input[name=\'file\']').val() != '') {
			clearInterval(timer);

			$.ajax({
				url: 'index.php?route=tool/upload',
				type: 'post',
				dataType: 'json',
				data: new FormData($('#form-upload')[0]),
				cache: false,
				contentType: false,
				processData: false,
				beforeSend: function() {
					$(node).button('loading');
				},
				complete: function() {
					$(node).button('reset');
				},
				success: function(json) {
					$('.text-danger').remove();

					if (json['error']) {
						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
					}

					if (json['success']) {
						alert(json['success']);

						$(node).parent().find('input').attr('value', json['code']);
					}
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				}
			});
		}
	}, 500);
});
//--></script>
<script type="text/javascript"><!--
$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    $('#review').fadeOut('slow');

    $('#review').load(this.href);

    $('#review').fadeIn('slow');
});

$('#review').load('index.php?route=product/product/review&product_id=96');

$('#button-review').on('click', function() {
	$.ajax({
		url: 'index.php?route=product/product/write&product_id=96',
		type: 'post',
		dataType: 'json',
		data: $("#form-review").serialize(),
		beforeSend: function() {
			$('#button-review').button('loading');
		},
		complete: function() {
			$('#button-review').button('reset');
		},
		success: function(json) {
			$('.alert-success, .alert-danger').remove();

			if (json['error']) {
				$('#review').after('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
			}

			if (json['success']) {
				$('#review').after('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

				$('input[name=\'name\']').val('');
				$('textarea[name=\'text\']').val('');
				$('input[name=\'rating\']:checked').prop('checked', false);
			}
		}
	});
});

$(document).ready(function() {  

	$('.thumbnails').magnificPopup({
		type:'image',
		delegate: 'a',
		gallery: {
			enabled:true
		}
	});
});

$(document).ready(function() {
  $( ".radioColor" ).click(function() {
    $(".radioColor > .fa").hide();
    $(this).find(".fa").show();
    $( "input[name='productColor']" ).val($(this).attr('data-value'));
    
        var product_colors = jQuery.parseJSON( '[{"product_variant_image":"catalog\/verdecom1uu.png","product_color_id":"18","product_id":"96","title":"verde","color":"#008000","color2":"#008000","sort_order":"1","thumb":"http:\/\/wlapps.net\/web\/17_wl_vidaverde_tvc\/image\/cache\/catalog\/verdecom1uu-380x380.png","popup":"http:\/\/wlapps.net\/web\/17_wl_vidaverde_tvc\/image\/cache\/catalog\/verdecom1uu-500x500.png"},{"product_variant_image":"catalog\/amarillocom1.png","product_color_id":"19","product_id":"96","title":"amarillo","color":"#ffff00","color2":"#ffff00","sort_order":"2","thumb":"http:\/\/wlapps.net\/web\/17_wl_vidaverde_tvc\/image\/cache\/catalog\/amarillocom1-380x380.png","popup":"http:\/\/wlapps.net\/web\/17_wl_vidaverde_tvc\/image\/cache\/catalog\/amarillocom1-500x500.png"}]'  );
    var popup = product_colors[$(this).attr('data-index')]["popup"];
    var thumb = product_colors[$(this).attr('data-index')]["thumb"];
    $("#a_img_principal").attr("href",popup);
    $("#a_img_principal img").attr("src",thumb);
  });

  
  

  var custonName = [];
  $(".btn-add").click(function() {
    custonName.push({name:"",quantity:"1"});
    refreshDivCustom();
  });
  
  function refreshDivCustom(){
    $(".div-custom").remove();
    var html=""
    for(var i=0;i<custonName.length;i++){
      html+='<div class="col-lg-12 col-md-12 col-sm-12  div-custom ">';
      html+='<div class="row">';
      
      html+='<div  class="col-lg-6 col-md-6 col-sm-6 panel-name">';
      html+='<div class="btn btn-trash col-lg-3 col-md-3 col-sm-3" id="' + i + '" ><i class="fa fa-user-times" aria-hidden="true"></i></div>';
      html+='<div class="col-lg-9 col-md-9 col-sm-9 div-name"><input id="name' + i + '" data-index="' + i + '" value="'+custonName[i]["name"]+'" class="form-control name" type ="text" placeholder="nombre"></div> ';
      html+='</div>';

      html+='<div class="col-lg-6 col-md-6 col-sm-6 panel-number">';
      html+='<div id="min' + i + '" data-index="' + i + '" class="btn btn-min col-lg-3 col-md-3 col-sm-3"><i class="fa fa-minus" aria-hidden="true"></i></div>';
      html+='<div class="col-lg-6 col-md-6 col-sm-6 div-num"><input id="quiantity' + i + '" data-index="' + i + '" value="'+custonName[i]["quantity"]+'" class="form-control quantity" min="1"  type ="number" placeholder="cantidad"></div>';
      html+='<div id="max' + i + '" data-index="' + i + '" class="btn btn-plus col-lg-3 col-md-3 col-sm-3"><i class="fa fa-plus" aria-hidden="true"></i></div>';
      html+='</div>';

      html+='</div>';
      html+='</div>';
      
    }
    refreshTextBox();
    $(".custom-name-panel").append(html);

    $(".btn-trash").click(function() {
      custonName.splice(parseInt(this.id),1);
      refreshDivCustom();
      refreshTextBox();
    });

    $(".btn-min").click(function() {
      var index = $("#"+this.id).attr("data-index");
      var val = parseInt($("#quiantity"+index).val()) -1 ;
      $("#quiantity"+index).val(val);
      changeQuantity("quiantity"+index);
    });

    $(".btn-plus").click(function() {
      var index = $("#"+this.id).attr("data-index");
      var val = parseInt($("#quiantity"+index).val()) +1 ;
      $("#quiantity"+index).val(val);
      changeQuantity("quiantity"+index);
    });

    $( ".name" ).change(function() {
      changeName(this.id)
    });

    $( ".quantity" ).change(function() {
      changeQuantity(this.id)
    }); 
    
    function changeName(id){
      var index = $("#"+id).attr("data-index");
      custonName[index]["name"]= $("#"+id).val();
      refreshTextBox();
    }
    function changeQuantity(id){
      var index = $("#"+id).attr("data-index");
      if($("#"+id).val()<=0){
        $("#"+id).val("1");
      }
      custonName[index]["quantity"]= $("#"+id).val();  
      refreshTextBox();
    }

    function refreshTextBox(){
      var val = "";
      for(var i=0;i<custonName.length;i++){
        val+=""+custonName[i]["name"]+"("+custonName[i]["quantity"]+"), ";
      }
      $("textarea[name=detail]").val(val);
    }
  }

  $( "input[name=isPersonalized]" ).change(function() {
    
    if( $("input[name=isPersonalized]").prop('checked') ) {
      
      $(".div-custom-name").show();
      //$( "textarea[name=detail]" ).removeClass( "active" )

    }else{
      $(".div-custom-name").hide();
      //$("textarea[name=detail]").attr("readonly");
      //$( "textarea[name=detail]" ).addClass( "active");
    }
  });

  
  //botones de stage2
  
  $("#stage2").click(function() {
    var productColor_id = $("input[name='productColor']").val();
    var product_id = '96';

    if( productColor_id == "" ){
      productColor_id = '18'    }
    
    $.ajax({
      url: 'index.php?route=product/product/getProductPrintables&product_id=' + product_id + '&productColor_id=' + productColor_id,
      type: 'post',
      dataType: 'json',
      cache: false,
      contentType: false,
      processData: false,
      success: function(json) {
        refreshStage2(json.datas);
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
      }
		});
  });
  
  function refreshStage2(datas){
    /////////
    var ban  = false;
    var html = "";
    for(var i =0;i < datas.length;i++){
      if(ban == false){
        html +=  "<img data-index='" + i + "' style='border: 3px solid rgb(0, 197, 180);' data-value='" + datas[i]['product_printable_id'] + "'  data-piecesMin='" + datas[i]['piecesMin'] + "' src='" + datas[i]['thumb_image'] + "' class='radioPrintable' />";
        ban = true;
        $("#a_img_principal").attr("href",datas[i]["popup"]);
        $("#a_img_principal img").attr("src",datas[i]["thumb"]);
        $("input[name='productPrintable']").val(datas[i]['product_printable_id']);
        $("#product_printables_price").html("$"+datas[i]['price']);
        $("#product_printables_piecesMin").html(datas[i]['piecesMin']+"Pzas");
        $("#product_printables_piecesMax").html(datas[i]['piecesMax']+"Pzas");
      }else{
        html += "<img data-index='" + i + "' data-value='" + datas[i]['product_printable_id'] +"' " + " data-piecesMin='" + datas[i]['piecesMin'] + "' src='" + datas[i]['thumb_image'] + "' class='radioPrintable' />";
      }
    }
    //console.log(html);
    //$("#bodyStage2Printables").append("hatldldkdkdkd");

    $( "#bodyStage2printables2" ).html( html );

    //////
    var html="";
      var printable_colors = datas[0]["printableColor"];
      
      for(var i=0; i < printable_colors.length ; i++){
        if(i==0){
          var popup = printable_colors[0]["popup"];
          var thumb = printable_colors[0]["thumb"];
          $("#a_img_principal").attr("href",popup);
          $("#a_img_principal img").attr("src",thumb);
        }
        html += "<option data-indexPrintable='" + 0 + "' data-index='"+i+"' value='" + printable_colors[i]["printable_color_id"] + "'>" + printable_colors[i]["title"] + "</option>";
      }
      $( "select[name='productTagsColor']" ).html(html);
    //////////////////////////
      var dataIndex = 0;
      var popup = datas[dataIndex]["popup"];
      var thumb = datas[dataIndex]["thumb"];
      $("#a_img_principal").attr("href",popup);
      $("#a_img_principal img").attr("src",thumb);
      $("#product_printables_price").html("$"+datas[dataIndex]['price']);
      $("#product_printables_piecesMin").html(datas[dataIndex]['piecesMin']+"Pzas");
      $("#product_printables_piecesMax").html(datas[dataIndex]['piecesMax']+"Pzas");
      piecesMin = datas[dataIndex]['piecesMin'];
      $(this).css("border","3px solid #00C5B4");
      $( "input[name='productPrintable']" ).val($(this).attr('data-value'));
      //cargar los colores de los estampados
      var html="";
      var printable_colors = datas[dataIndex]["printableColor"];
      
      for(var i=0; i < printable_colors.length ; i++){
        if(i==0){
          var popup = printable_colors[0]["popup"];
          var thumb = printable_colors[0]["thumb"];
          $("#a_img_principal").attr("href",popup);
          $("#a_img_principal img").attr("src",thumb);
        }
        html += "<option data-indexPrintable='" + dataIndex + "' data-index='"+i+"' value='" + printable_colors[i]["printable_color_id"] + "'>" + printable_colors[i]["title"] + "</option>";
      }
    /////////////////////////

    $( ".radioPrintable" ).click(function() {
      $(".radioPrintable").css("border","3px solid transparent");
      var dataIndex = $(this).attr('data-index');
      var popup = datas[dataIndex]["popup"];
      var thumb = datas[dataIndex]["thumb"];
      $("#a_img_principal").attr("href",popup);
      $("#a_img_principal img").attr("src",thumb);
      $("#product_printables_price").html("$"+datas[dataIndex]['price']);
      $("#product_printables_piecesMin").html(datas[dataIndex]['piecesMin']+"Pzas");
      $("#product_printables_piecesMax").html(datas[dataIndex]['piecesMax']+"Pzas");
      piecesMin = datas[dataIndex]['piecesMin'];
      $(this).css("border","3px solid #00C5B4");
      $( "input[name='productPrintable']" ).val($(this).attr('data-value'));
      //cargar los colores de los estampados
      var html="";
      var printable_colors = datas[dataIndex]["printableColor"];
      
      for(var i=0; i < printable_colors.length ; i++){
        if(i==0){
          var popup = printable_colors[0]["popup"];
          var thumb = printable_colors[0]["thumb"];
          $("#a_img_principal").attr("href",popup);
          $("#a_img_principal img").attr("src",thumb);
        }
        html += "<option data-indexPrintable='" + dataIndex + "' data-index='"+i+"' value='" + printable_colors[i]["printable_color_id"] + "'>" + printable_colors[i]["title"] + "</option>";
      }
      $( "select[name='productTagsColor']" ).html(html);
      
      $( "select[name='productTagsColor']" ).change(function() {
        
        var printableColors   = $('option:selected', this).attr('data-indexPrintable');
        var dataIndex         = $('option:selected', this).attr('data-index');
        var popup = datas[printableColors]["printableColor"][dataIndex]["popup"];
        var thumb = datas[printableColors]["printableColor"][dataIndex]["thumb"];
        $("#a_img_principal").attr("href",popup);
        $("#a_img_principal img").attr("src",thumb);
      });

    });

    $("#titleStage1 .fa").show();
    $("#bodyStage1").hide();
    $("#bodyStage2").show();

  }


  //botones de stage2
  $("#backStage1").click(function() {
    $("#titleStage1 .fa").hide();
    $("#bodyStage1").show();
    $("#bodyStage2").hide();
  });

  $("#stage3").click(function() {
    var product_id        = '96';
    
    var product_color_id      = $("input[name='productColor']").val();
    var product_printable_id  = $("input[name='productPrintable']").val();
    var printable_color_id  = $( 'option:selected', "select[name='productTagsColor']" ).val();
    
    
    if( product_color_id == "" ){
      product_color_id = '18'    }
    
    if(product_printable_id == ""){
      product_printable_id = '19'    }
    
    $.ajax({
          url: 'index.php?route=product/product/getProductVariantSexe&'+
          'product_id='             + product_id + 
          '&product_color_id='       + product_color_id +
          '&product_printable_id='  + product_printable_id +
          '&printable_color_id='      + printable_color_id ,
          type: 'post',
          dataType: 'json',
          cache: false,
          contentType: false,
          processData: false,
          success: function(json) {
            refreshStage3(json.datas);
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
          }
        });
    return;
////////
    $("#titleStage2 .fa").show();
    $("#bodyStage2").hide();
    $("#bodyStage3").show();
  });
  ////////////////////////////////

    function refreshStage3(datas){
      //alert("hola mundo");
      /////////
      var html="";
      var product_variant_sexe = datas;
      
      for(var i=0; i < product_variant_sexe.length; i++){
        if(i==0){
          var popup = product_variant_sexe[0]["popup"];
          var thumb = product_variant_sexe[0]["thumb"];
          $("#a_img_principal").attr("href",popup);
          $("#a_img_principal img").attr("src",thumb);
        }
        html += "<option data-index='"+i+"' value='" + product_variant_sexe[i]["product_variant_sexe_id"] + "'>" + product_variant_sexe[i]["product_variant_sexe_name"] + "</option>";
      }
      //();
      $( "select[name='product_variant_sexe']" ).html(html);

//////
      html = "";
      var dataIndex               = 0;
      console.log(datas);
      var product_variant_size    = datas[dataIndex]["productVariantSize"];

      
      //console.log(product_variant_size);
      //product_variant_id
      for(var i=0; i < product_variant_size.length ; i++){
        if(i==0){
          var popup = product_variant_size[0]["popup"];
          var thumb = product_variant_size[0]["thumb"];
          $("#a_img_principal").attr("href",popup);
          $("#a_img_principal img").attr("src",thumb);
          $("input[name='productVariant']").val(product_variant_size[0]["product_variant_id"])

        }
        html += "<option data-indexPrintable='" + dataIndex + "' data-index='"+i+"' value='" + product_variant_size[i]["product_variant_size_id"] + "'>" + product_variant_size[i]["product_variant_size_name"] + "</option>";
      }
      
      $( "select[name='product_variant_size']" ).html(html);
//////
      
      $( "select[name='product_variant_sexe']" ).change(function() {
        var html="";
        var dataIndex               = $('option:selected', this).attr('data-index');
        //var indexPrintable               = $('option:selected', this).attr('data-indexPrintable');
        var product_variant_size = datas[dataIndex]["productVariantSize"];
        for(var i=0; i < product_variant_size.length ; i++){
          if(i==0){
            var popup = product_variant_size[0]["popup"];
            var thumb = product_variant_size[0]["thumb"];
            $("#a_img_principal").attr("href",popup);
            $("#a_img_principal img").attr("src",thumb);
            $("input[name='productVariant']").val(product_variant_size[0]["product_variant_id"]);
          }
          html += "<option data-indexPrintable='" + dataIndex + "' data-index='"+i+"' value='" + product_variant_size[i]["product_variant_size_id"] + "'>" + product_variant_size[i]["product_variant_size_name"] + "</option>";
        }
        //console.log(html);
        $( "select[name='product_variant_size']" ).html(html);
        
        $( "select[name='product_variant_size']" ).change(function() {
          
          var indexPrintable    = $('option:selected', this).attr('data-indexPrintable');
          var dataIndex               = $('option:selected', this).attr('data-index');
          var popup                   = datas[indexPrintable]["productVariantSize"][dataIndex]["popup"];
          var thumb                   = datas[indexPrintable]["productVariantSize"][dataIndex]["thumb"];
          $("input[name='productVariant']").val(datas[indexPrintable]["productVariantSize"][dataIndex]["product_variant_id"]);
          
          $("#a_img_principal").attr("href",popup);
          $("#a_img_principal img").attr("src",thumb);
          
        });
        

      });
      var product_id      = '96';
      var haveCut         = '0';
      var haveSize        = '0';
      $("#titleStage2 .fa").show();
      $("#bodyStage2").hide();
      $("#bodyStage3").show();

      if(haveCut == 0 && haveSize == 0){
        stage4()
      }
      return;
  }
  //botones de stage3
  $("#backStage2").click(function() {
    $("#titleStage2 .fa").hide();
    $("#bodyStage2").show();
    $("#bodyStage3").hide();
  });
  
  $("#stage4").click(function() {
    stage4();
  });
  function stage4(){
    custonNameCount=0;
    if( $("input[name='isPersonalized']").prop('checked') ) {
      for(var i=0;i<custonName.length;i++){
        custonNameCount += parseInt(custonName[i]["quantity"], 10);
      }
    }

    if(piecesMin > custonNameCount){
      $("input[name='quantity']").attr("min", piecesMin);
      $("input[name='quantity']").val(piecesMin);
    }else{
      $("input[name='quantity']").attr("min", custonNameCount);
      $("input[name='quantity']").val(custonNameCount);
    }
    
    var productPrintable  = $("input[name='productPrintable']").val();
    var productColor      = $("input[name='productColor']").val();
    
    if( productColor == "" ){
      productColor = '18'    }

    if(productPrintable == "0"){
      productPrintable = '19'    }

    $("#titleStage3 .fa").show();
    $("#bodyStage3").hide();
    $("#bodyStage4").show();
  }
  //botones de stage4
    $("#backStage3").click(function() {
      var haveCut         = '0';
      var haveSize        = '0';
      
      $("#titleStage3 .fa").hide();
      $("#bodyStage3").show();
      $("#bodyStage4").hide();

      if(haveCut == 0 && haveSize == 0){
        $("#titleStage2 .fa").hide();
        $("#bodyStage2").show();
        $("#bodyStage3").hide();
      }
    });
    
    $( "input[name='quantity']").change(function() {
      var quantity =  $("input[name='quantity']").val();
      //custonName
      //alert(quantity);
    });
});

//--></script>

<div class="common-footer"><span class='tag'>common-footer</span>
  
  <footer>
    
    <div class="section1 container-fluid"><span class='tag'>section1</span>
      <div class="container">
        <div class="row">

          <div class="newsletter_movil col-sm-4 visible-xs"><span class='tag'>newsletter_movil</span>
            <h3>BOLETÍN DE PROMOCIONES</h3>
            <p>Registra tu email y obtén un 5% de descuento en toda la tienda al instante.</p>
            
<div id="common_newsletter_758">
  <div class="alert alert-success"></div>
  <div class="alert alert-danger"></div>
  <form class="form-inline">
    <div>
      <i class="fa fa-envelope" aria-hidden="true"></i>
      <input type="text" class="form-control" placeholder="Ingresa tu e-mail">
      <input type="button" value='AGREGAR' class="btn btn-primary">
    </div>
  </form>
</div>

<script>
  $(document).ready(function(){
    
    var pnlSuccess = $("#common_newsletter_758 .alert-success");
    var pnlError   = $("#common_newsletter_758 .alert-danger");
    var txtEmail   = $("#common_newsletter_758 input[type='text']");
    var btnSend    = $("#common_newsletter_758 input[type='button']");
    
    pnlSuccess.css("display", "none");
    pnlError.css("display", "none");

    btnSend.click(function(){
      
      $.ajax({
        type:     'POST',
        url:      "http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=common/newsletter/newsletter",
        data:     'email=' + encodeURIComponent(txtEmail.val()),
        dataType: 'json',
        beforeSend: function(){
          pnlSuccess.css("display", "none");
          pnlError.css("display", "none");
          btnSend.css("display", "none");
        },
        success: function(response){
          if(response.status == "OK"){
            pnlSuccess.css("display", "block").html(response.datas);
            txtEmail.val("");
          }else{
            pnlError.css("display", "block").html(response.messages[0]);
          }
          btnSend.css("display", "inline");
        },
        error: function(){
          alert("ERROR: Error en la comunicación con el servidor.");
          btnSend.css("display", "inline");
        }
      });
    });
    
  });
</script>          </div>
          
          <div class="col-sm-8">
            <div class="row">

              <!--
              <b>Notice</b>: Undefined variable: informations in <b>/home2/bweuemja/public_html/web/17_wl_vidaverde_tvc/catalog/view/theme/default/template/common/footer.php</b> on line <b>20</b>              -->
              <div class="information col-sm-3"><span class='tag'>information</span>
                <h5>MI CUENTA</h5>
                <ul class="list-unstyled">
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/account">Iniciar sesión</a></li>
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/order">Historial de pedidos</a></li>
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/wishlist">Lista de deseos</a></li>
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/address">Libreta de direcciones</a></li>
                </ul>
              </div>

              <div class="information col-sm-3"><span class='tag'>information</span>
                <h5>SERVICIO AL CLIENTE</h5>
                <ul class="list-unstyled">
                                      <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/information&amp;information_id=8">Formas de pago</a></li>
                                      <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/information&amp;information_id=10">Tips</a></li>
                                      <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/information&amp;information_id=12">Preguntas frecuentes</a></li>
                                      <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/information&amp;information_id=14">Políticas de envio</a></li>
                                    <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/contact">Contacto</a></li>
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/return/add">Devoluciones</a></li>
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/sitemap">Mapa del Sitio</a></li>
                </ul>
              </div>
              
              <div class="information col-sm-3"><span class='tag'>information</span> 
                <h5>SOBRE VIDA VERDE</h5>
                <ul class="list-unstyled">
                                      <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/information&amp;information_id=4">Quiénes somos</a></li>
                                      <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/information&amp;information_id=3">Aviso de privacidad</a></li>
                                      <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/information&amp;information_id=6">Información de envios</a></li>
                                      <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/information&amp;information_id=5">Términos y condiciones</a></li>
                                  </ul>
              </div>
             

              <!--
              <div class="information col-sm-3"><span class='tag'>information</span>
                <h5>EXTRAS PARA COMPRAR</h5>
                <ul class="list-unstyled">
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/voucher">Tarjetas de Regalo</a></li>
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/reward">Puntos de recompensa</a></li>
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=affiliate/account">Afiliados</a></li>
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/special">Ofertas</a></li>
                </ul>
              </div>
              -->

               <!--
              <div class="information col-sm-3"><span class='tag'>information</span>
                <h5>Servicio al Cliente</h5>
                <ul class="list-unstyled">
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/contact">Contacto</a></li>
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/return/add">Devoluciones</a></li>
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/sitemap">Mapa del Sitio</a></li>
                </ul>
              </div>
              -->
              
            </div>
          </div>
          
          <div class="newsletter_desktop col-sm-4 hidden-xs"><span class='tag'>newsletter_desktop</span>
            <!--<h3>BOLETÍN DE PROMOCIONES</h3>-->
            <p>Registra tu email y obtén un 5% de descuento en toda la tienda al instante.</p>
            
<div id="common_newsletter_957">
  <div class="alert alert-success"></div>
  <div class="alert alert-danger"></div>
  <form class="form-inline">
    <div>
      <i class="fa fa-envelope" aria-hidden="true"></i>
      <input type="text" class="form-control" placeholder="Ingresa tu e-mail">
      <input type="button" value='AGREGAR' class="btn btn-primary">
    </div>
  </form>
</div>

<script>
  $(document).ready(function(){
    
    var pnlSuccess = $("#common_newsletter_957 .alert-success");
    var pnlError   = $("#common_newsletter_957 .alert-danger");
    var txtEmail   = $("#common_newsletter_957 input[type='text']");
    var btnSend    = $("#common_newsletter_957 input[type='button']");
    
    pnlSuccess.css("display", "none");
    pnlError.css("display", "none");

    btnSend.click(function(){
      
      $.ajax({
        type:     'POST',
        url:      "http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=common/newsletter/newsletter",
        data:     'email=' + encodeURIComponent(txtEmail.val()),
        dataType: 'json',
        beforeSend: function(){
          pnlSuccess.css("display", "none");
          pnlError.css("display", "none");
          btnSend.css("display", "none");
        },
        success: function(response){
          if(response.status == "OK"){
            pnlSuccess.css("display", "block").html(response.datas);
            txtEmail.val("");
          }else{
            pnlError.css("display", "block").html(response.messages[0]);
          }
          btnSend.css("display", "inline");
        },
        error: function(){
          alert("ERROR: Error en la comunicación con el servidor.");
          btnSend.css("display", "inline");
        }
      });
    });
    
  });
</script>            <div class="social col-lg-12 col-md-12 col-sm-12 col-xs-12"><span class='tag'>social</span>
              <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
              </span>
              <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
              </span>
              <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-pinterest-p fa-stack-1x fa-inverse"></i>
              </span>
              <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
              </span>
           </div>
          </div>

        </div>
      </div>
    </div>
    
    <!--
    <div class="section2 container-fluid"><span class='tag'>section2</span>
      <div class="container">
        <div class="row">

          <div class="social col-lg-12 col-md-12 col-sm-12 col-xs-12"><span class='tag'>social</span>
            <h5>Síguenos en las redes sociales</h5>
            <a href=''><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
            <a href=''><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
            <a href=''><i class="fa fa-instagram" aria-hidden="true"></i></a>
          </div>

        </div>
      </div>
    </div>
    -->

    <div class="section3 container-fluid"><span class='tag'>section3</span>
      <div class="container">
        <div class="row">

          <div class="logos col-lg-12 col-md-12 col-sm-12 col-xs-12"><span class='tag'>logos</span>
            <img src='./catalog/view/theme/default/image/common-footer/payments/1.jpg' />
            <img src='./catalog/view/theme/default/image/common-footer/payments/2.jpg' />
            <img src='./catalog/view/theme/default/image/common-footer/payments/3.jpg' />
            <img src='./catalog/view/theme/default/image/common-footer/payments/4.jpg' />
            <img src='./catalog/view/theme/default/image/common-footer/payments/5.jpg' />
            <img src='./catalog/view/theme/default/image/common-footer/payments/6.jpg' />
          </div>

        </div>
      </div>
    </div>

    <div class="section4 container-fluid"><span class='tag'>section4</span>
      <div class="container">
        <div class="row">

          <div class="copy col-lg-12 col-md-12 col-sm-12 col-xs-12"><span class='tag'>copy</span>
            <p>&copy Vida Verde 2018 | Sitio desarrollado por <a href='http://weblogica.mx'>weblogica.mx</a></p>
          </div>
          
        </div>
      </div>
    </div>
    
  </footer>
</div>

</body>
</html>