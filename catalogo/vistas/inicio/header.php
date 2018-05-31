
<?php require_once('./catalogo/controladores/inicio/header.php'); ?>


    <nav id="top" class='section1 container-fluid'>
      <div class="container">
        <div class="row">
          <div class="send_free col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <b>PEDIDOS POR TELÉFONO:</b> <?=$telefono?> o <a href="<?= $urlContacto?>"><u>CONTÁCTANOS</u></a>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div id="top-links" class="nav pull-right">
              <ul class="list-inline">
                <li class="dropdown"><a href="<?= $urlMicuenta ?>" title="Mi Cuenta" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md">Mi Cuenta</span> <span class="caret"></span></a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="<?= $urlMicuenta?>">Mi Cuenta</a></li>
                    <li><a href="<?= $urlSalir?>">Salir</a></li>
                  </ul>
                </li>
                <div id="cart" class="btn-group btn-block">
                <button type="button" data-toggle="dropdown" data-loading-text="Cargando..." class="btn btn-inverse btn-block btn-lg dropdown-toggle"><i class="fa fa-shopping-cart"></i> <span id="cart-total"><?php echo $carrito['cantidadTotal']; ?> artículo(s) - $<?php echo $carrito['total']; ?></span></button>

                <ul class="dropdown-menu pull-right">
                      <li>
                    <table class="table table-striped">
                      <?php
                        for ($i=0; $i < count($carrito["productos"]); $i++) {
                        echo "<tr>";
                        echo "<td class='text-center'><img src='./".$carrito["productos"][$i]['carrito_img']."' class='img-thumbnail' /></td>";
                        echo "<td class='text-right'>".$carrito["productos"][$i]['carrito_nombre']."</td>";
                        echo "<td class='text-right'>x ".$carrito["productos"][$i]['carrito_cantidad']."</td>";
                        echo "<td class='text-right'>$".$carrito["productos"][$i]['carrito_precio']."</td>";
                        echo "<td class='text-center'><button type='button' onclick='cart.remove('".$carrito["productos"][$i]['carrito_id']."');' title='Remover' class='btn btn-danger btn-xs'><i class='fa fa-times'></i></button></td>";
                        echo "</tr>";
                        }
                      ?>
                    </table>
                  </li>
                  <li>
                    <div>
                      <table class="table table-bordered">
                        <tr>
                          <td class="text-right"><strong>Total</strong></td>
                          <td class="text-right"><?php echo $carrito['total']; ?></td>
                        </tr>
                      </table>
                      <p class="text-right"><a href="<?=$urlCarrito?>"><strong><i class="fa fa-shopping-cart"></i> Carrito</strong></a>&nbsp;&nbsp;&nbsp;<a href="<?=$urlPagar?>"><strong><i class="fa fa-share"></i> Pagar</strong></a></p>
                    </div>
                  </li>
                    </ul>
              </div>
              </ul>
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
              <a href="index.php"><img src="./img/logo.png" title="Vida Verde" alt="Vida Verde" /></a>
            </div>

            <div class="menu col-lg-8 col-md-8 col-sm-8 col-xs-12">
              <nav id="menu" class="navbar">

                <div class="navbar-header">
                  <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
                </div>

                <div class="collapse navbar-collapse navbar-ex1-collapse">
                  <ul class="nav navbar-nav">
                                                            <li class="dropdown"><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67" class="dropdown-toggle" data-toggle="dropdown">Tienda de productos</a>
                      <div class="dropdown-menu">
                        <div class="dropdown-inner">
                            <ul class="list-unstyled">
                            <?php
                            for ($i=0; $i < count($menu['categorias']); $i++) { 
                            echo "<li><a href='".$menu['categorias'][$i]["url"]."&id=".$menu['categorias'][$i]["url"]."'>" . $menu['categorias'][$i]["nombre"]."</a></li>";
                            }
                            ?>   
                            </ul>
                        </div>
                    <li><a href="#">Diseño a medida</a></li>
                    <li><a href="#">Quiénes somos</a></li>
                    <li><a href="#">Contacto</a></li>
                  </ul>
                </div>

              </nav>
            </div>
            
          </div>
        </div>
      </div>
    
