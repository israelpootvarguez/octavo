<?php require_once('./catalogo/controladores/paquetes/paquetes.php'); ?>
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
<title>cilindros</title>
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

<script src="catalog/view/javascript/common.js" type="text/javascript"></script>
<link href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=69" rel="canonical" />
<link href="http://wlapps.net/web/17_wl_vidaverde_tvc/image/catalog/favicon.png" rel="icon" />
<script>/*alert("x");*/</script></head>
<body class="product-category-67_69">
  
    
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
            <b>PEDIDOS POR TEL�FONO:</b> 01 (999) 942-67 89 o  <i class="fa fa-truck" aria-hidden="true"></i>
          </div>

          <div class="schedule col-lg-6 col-md-6 col-sm-6 col-xs-12"><span class='tag'>schedule</span>
            LUNES A VIERNES DE 9AM A 7PM Y S�BADOS DE 9AM A 2PM          </div>
          
        </div>
      </div>
    </div>-->

    <nav id="top" class='section2 container-fluid'><span class='tag'>section2</span>
      <div class="container">
        <div class="row">
          <div class="send_free col-lg-6 col-md-6 col-sm-6 col-xs-12"><span class='tag'>send_free</span>
              <b>PEDIDOS POR TEL�FONO:</b> 01 (999) 942-67 89 o <a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/contact"><u>CONT�CTANOS</u></a>
          </div>

                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><span class='tag'>nav</span>
            <div id="top-links" class="nav pull-right">
              <ul class="list-inline">
                <!--<li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/contact"><i class="fa fa-phone"></i></a> <span class="hidden-xs hidden-sm hidden-md">123456789</span></li>-->
                <li class="dropdown"><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/account" title="Mi Cuenta" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md">Mi Cuenta</span> <span class="caret"></span></a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
                  <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/register">Registrarse</a></li>
                    <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/login">Iniciar sesi�n</a></li>
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
  <button type="button" data-toggle="dropdown" data-loading-text="Cargando..." class="btn btn-inverse btn-block btn-lg dropdown-toggle"><i class="fa fa-shopping-cart"></i> <span id="cart-total">0 art�culo(s) - $0.00</span></button>
  <ul class="dropdown-menu pull-right">
        <li>
      <p class="text-center">Tu Carrito de Compras est� vac�o!</p>
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

                <div class="navbar-header"><span id="category" class="visible-xs">Categor�as</span>
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
                                                            <li><a href="./index.php?route=information/information&information_id=4">Dise�o a medida</a></li>
                    <li><a href="./index.php?route=information/information&information_id=4">Servicios</a></li>
                    <li><a href="./index.php?route=information/information&information_id=4">Qui�nes somos</a></li>
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
<div class="product-category container"><span class='tag'>product-category</span>

  <ul class="breadcrumb">
        <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=common/home"><i class="fa fa-home"></i></a></li>
        <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67">Tienda de productos</a></li>
        <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_69">Cilindros</a></li>
      </ul>

  <div class="row">
    
    <aside id="column-left" class="col-sm-3 hidden-xs">
    <div class="list-group">
      <a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67" class="list-group-item active">Tienda de productos (2)</a>
        <a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_75" class="list-group-item">&nbsp;&nbsp;&nbsp;- Agendas (0)</a>
        <a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_72" class="list-group-item">&nbsp;&nbsp;&nbsp;- Camisas (0)</a>
        <a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_74" class="list-group-item">&nbsp;&nbsp;&nbsp;- Chanclas (0)</a>
        <a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_69" class="list-group-item active">&nbsp;&nbsp;&nbsp;- Cilindros (2)</a>
        <a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_73" class="list-group-item">&nbsp;&nbsp;&nbsp;- Gorras (0)</a>
        <a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_68" class="list-group-item">&nbsp;&nbsp;&nbsp;- Novedades (0)</a>
        <a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_70" class="list-group-item">&nbsp;&nbsp;&nbsp;- Tazas (0)</a>
        <a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_71" class="list-group-item">&nbsp;&nbsp;&nbsp;- Vasos (0)</a>
          </div>
    <div class="panel panel-default">
  <div class="panel-heading">Refine Search</div>
  <div class="list-group">
        <a class="list-group-item">Temas</a>
    <div class="list-group-item">
      <div id="filter-group1">
                <div class="checkbox">
          <label>
                        <input type="checkbox" name="filter[]" value="1" />
            De animales (0)                      </label>
        </div>
                <div class="checkbox">
          <label>
                        <input type="checkbox" name="filter[]" value="2" />
            Temas graciosos (0)                      </label>
        </div>
                <div class="checkbox">
          <label>
                        <input type="checkbox" name="filter[]" value="3" />
            Temas de fiestas (1)                      </label>
        </div>
                <div class="checkbox">
          <label>
                        <input type="checkbox" name="filter[]" value="4" />
            Tem�ticos (0)                      </label>
        </div>
                <div class="checkbox">
          <label>
                        <input type="checkbox" name="filter[]" value="5" />
            Temas de pel�culas  (0)                      </label>
        </div>
                <div class="checkbox">
          <label>
                        <input type="checkbox" name="filter[]" value="6" />
            Mexicanos  (0)                      </label>
        </div>
                <div class="checkbox">
          <label>
                        <input type="checkbox" name="filter[]" value="7" />
            Bodas (0)                      </label>
        </div>
                <div class="checkbox">
          <label>
                        <input type="checkbox" name="filter[]" value="8" />
            Oficina (0)                      </label>
        </div>
                <div class="checkbox">
          <label>
                        <input type="checkbox" name="filter[]" value="9" />
            Varios (0)                      </label>
        </div>
              </div>
    </div>
      </div>
  <div class="panel-footer text-right">
    <button type="button" id="button-filter" class="btn btn-primary">Refinar B�squeda</button>
  </div>
</div>
<script type="text/javascript"><!--
$('#button-filter').on('click', function() {
	filter = [];

	$('input[name^=\'filter\']:checked').each(function(element) {
		filter.push(this.value);
	});

	location = 'http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&path=67_69&filter=' + filter.join(',');
});
//--></script>
  </aside>

            
    <div id="content" class="col-sm-9">
      
            
            <div class="row">
        <div class="header col-sm-12"><span class='tag'>header</span>
          
          <div>
            <h2>Cilindros</h2>

                          <p><br></p>                      </div>

          
        </div>
      </div>
      <hr>
      
                  <p><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/compare" id="compare-total">Comparaci�n de Productos: (0)</a></p>
      <div class="row">
        <div class="col-md-4">
          <div class="btn-group hidden-xs">
            <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="Lista"><i class="fa fa-th-list"></i></button>
            <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="Cuadr�cula"><i class="fa fa-th"></i></button>
          </div>
        </div>
        <div class="col-md-2 text-right">
          <label class="control-label" for="input-sort">Orden:</label>
        </div>
        <div class="col-md-3 text-right">
          <select id="input-sort" class="form-control" onchange="location = this.value;">
                                    <option value="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_69&amp;sort=p.sort_order&amp;order=ASC" selected="selected">Predeterminado</option>
                                                <option value="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_69&amp;sort=pd.name&amp;order=ASC">Nombre (A - Z)</option>
                                                <option value="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_69&amp;sort=pd.name&amp;order=DESC">Nombre (Z - A)</option>
                                                <option value="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_69&amp;sort=p.price&amp;order=ASC">Precio (Bajo &gt; Alto)</option>
                                                <option value="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_69&amp;sort=p.price&amp;order=DESC">Precio (Alto &gt; Bajo)</option>
                                                <option value="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_69&amp;sort=p.model&amp;order=ASC">Modelo (A - Z)</option>
                                                <option value="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_69&amp;sort=p.model&amp;order=DESC">Modelo (Z - A)</option>
                                  </select>
        </div>
        <div class="col-md-1 text-right">
          <label class="control-label" for="input-limit">Mostrar:</label>
        </div>
        <div class="col-md-2 text-right">
          <select id="input-limit" class="form-control" onchange="location = this.value;">
                                    <option value="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_69&amp;limit=15" selected="selected">15</option>
                                                <option value="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_69&amp;limit=25">25</option>
                                                <option value="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_69&amp;limit=50">50</option>
                                                <option value="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_69&amp;limit=75">75</option>
                                                <option value="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_69&amp;limit=100">100</option>
                                  </select>
        </div>
      </div>
      <br />
      <div class="row">
                <div class="product-layout product-list col-xs-12">
          <div class="product-thumb">
            <div class="image"><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/product&amp;path=67_69&amp;product_id=96"><img src="http://wlapps.net/web/17_wl_vidaverde_tvc/image/cache/catalog/NEGRO-228x228.png" alt="cilindro demo" title="cilindro demo" class="img-responsive" /></a></div>
            <div>
              <div class="caption">
                <h4><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/product&amp;path=67_69&amp;product_id=96">cilindro demo</a></h4>
                <p>loremloremloremloremloremloremloremloremloremloremloremloremloremloremloremlorem</p>
                                                <p class="price">
                                    $50.00                                                    </p>
                              </div>
              <div class="button-group">
                <button type="button" onclick="cart.add('96', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Comprar</span></button>
                <button type="button" data-toggle="tooltip" title="Favoritos" onclick="wishlist.add('96');"><i class="fa fa-heart"></i></button>
                <button type="button" data-toggle="tooltip" title="Comparar" onclick="compare.add('96');"><i class="fa fa-exchange"></i></button>
              </div>
            </div>
          </div>
        </div>
                <div class="product-layout product-list col-xs-12">
          <div class="product-thumb">
            <div class="image"><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/product&amp;path=67_69&amp;product_id=74"><img src="http://wlapps.net/web/17_wl_vidaverde_tvc/image/cache/catalog/NEGRO-228x228.png" alt="Cilindro Naolis" title="Cilindro Naolis" class="img-responsive" /></a></div>
            <div>
              <div class="caption">
                <h4><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/product&amp;path=67_69&amp;product_id=74">Cilindro Naolis</a></h4>
                <p></p>
                                                <p class="price">
                                    $20.00                                                    </p>
                              </div>
              <div class="button-group">
                <button type="button" onclick="cart.add('74', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Comprar</span></button>
                <button type="button" data-toggle="tooltip" title="Favoritos" onclick="wishlist.add('74');"><i class="fa fa-heart"></i></button>
                <button type="button" data-toggle="tooltip" title="Comparar" onclick="compare.add('74');"><i class="fa fa-exchange"></i></button>
              </div>
            </div>
          </div>
        </div>
              </div>
      <div class="row">
        <div class="col-sm-6 text-left"></div>
        <div class="col-sm-6 text-right">Mostrando 1 a 2 de 2 (1 P�ginas)</div>
      </div>
                  </div>
    </div>
</div>

<div class="common-footer"><span class='tag'>common-footer</span>
  
  <footer>
    
    <div class="section1 container-fluid"><span class='tag'>section1</span>
      <div class="container">
        <div class="row">

          <div class="newsletter_movil col-sm-4 visible-xs"><span class='tag'>newsletter_movil</span>
            <h3>BOLET�N DE PROMOCIONES</h3>
            <p>Registra tu email y obt�n un 5% de descuento en toda la tienda al instante.</p>
            
<div id="common_newsletter_969">
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
    
    var pnlSuccess = $("#common_newsletter_969 .alert-success");
    var pnlError   = $("#common_newsletter_969 .alert-danger");
    var txtEmail   = $("#common_newsletter_969 input[type='text']");
    var btnSend    = $("#common_newsletter_969 input[type='button']");
    
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
          alert("ERROR: Error en la comunicaci�n con el servidor.");
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
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/account">Iniciar sesi�n</a></li>
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
                                      <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/information&amp;information_id=14">Pol�ticas de envio</a></li>
                                    <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/contact">Contacto</a></li>
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/return/add">Devoluciones</a></li>
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/sitemap">Mapa del Sitio</a></li>
                </ul>
              </div>
              
              <div class="information col-sm-3"><span class='tag'>information</span> 
                <h5>SOBRE VIDA VERDE</h5>
                <ul class="list-unstyled">
                                      <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/information&amp;information_id=4">Qui�nes somos</a></li>
                                      <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/information&amp;information_id=3">Aviso de privacidad</a></li>
                                      <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/information&amp;information_id=6">Informaci�n de envios</a></li>
                                      <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/information&amp;information_id=5">T�rminos y condiciones</a></li>
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
            <!--<h3>BOLET�N DE PROMOCIONES</h3>-->
            <p>Registra tu email y obt�n un 5% de descuento en toda la tienda al instante.</p>
            
<div id="common_newsletter_608">
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
    
    var pnlSuccess = $("#common_newsletter_608 .alert-success");
    var pnlError   = $("#common_newsletter_608 .alert-danger");
    var txtEmail   = $("#common_newsletter_608 input[type='text']");
    var btnSend    = $("#common_newsletter_608 input[type='button']");
    
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
          alert("ERROR: Error en la comunicaci�n con el servidor.");
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
            <h5>S�guenos en las redes sociales</h5>
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