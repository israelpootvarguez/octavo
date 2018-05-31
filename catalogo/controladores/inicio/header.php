<?php 
$telefono     = "9999-99-99-99";
$urlContacto  = "www.google.com";
$urlMicuenta  = "www.google.com";
$urlCarrito   = "www.google.com";
$urlPagar     = "www.google.com";

$urlSalir = "www.google.com";

$carrito = array();
$carrito["productos"] = array();
$carrito["productos"][0] = array('carrito_id' => '0','carrito_nombre' => 'producto1','carrito_img' => 'nada.jpg','carrito_cantidad' => '1','carrito_precio'=>'10.00');
$carrito["productos"][1] = array('carrito_id' => '1','carrito_nombre' => 'producto2','carrito_img' => 'nada.jpg','carrito_cantidad' => '2','carrito_precio'=>'20.00');

$carrito["total"] = "50";
$carrito["cantidadTotal"] ="3";


$menu = array();
$menu['categorias'] = array();
$menu['categorias'][] = array('icono' => "XD", 'nombre' => "categoria1", 'url' => "www.google.com1");  
$menu['categorias'][] = array('icono' => "XD", 'nombre' => "categoria2", 'url' => "www.google.com1");
$menu['categorias'][] = array('icono' => "XD", 'nombre' => "categoria3", 'url' => "www.google.com1");

?>