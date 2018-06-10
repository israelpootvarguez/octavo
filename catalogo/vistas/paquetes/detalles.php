<?php require_once('./catalogo/controladores/paquetes/detalles.php'); ?>
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

