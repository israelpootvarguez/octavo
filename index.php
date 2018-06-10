<?php
$urlbase       = "http://localhost/escuela/proyecto%20octavo/";
$nombreEmpresa ="Adpromex";
$route = "";
if(isset($_GET["r"])){
  $parts = explode("-", $_GET["r"]);
  $carpeta = $parts[0];
  $documento = $parts[1];

  
}else{
   $carpeta = "inicio";
  $documento = "home";
}
$route = './catalogo/vistas/'.$carpeta.'/'.$documento.'.php';

$routebol =file_exists ( $route );

if(!$routebol){
$route = './catalogo/vistas/inicio/home.php';
}
//$urlbase = "http://wlapps.net/web/17_wl_vidaverde_tvc/";

?>
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
<title><?= $nombreEmpresa ?></title>
 <!-- jquery -->
  <script src="./lib/jquery/jquery.js" type="text/javascript"></script>
  
  <!-- jquery ui -->
  <script src="./lib/jquery_ui/jquery-ui.min.js" type="text/javascript"></script>
  <link href="./lib/jquery_ui/jquery-ui.css" rel="stylesheet" /> 

  <!-- bootstrap -->
  <script src="./lib/bootstrap/js/bootstrap.js" type="text/javascript"></script>
  <link href="./lib/bootstrap/css/bootstrap.css" rel="stylesheet" />

  <!-- bootbox -->
  <script src="./lib/bootbox/bootbox.js" type="text/javascript"></script>

  <!-- owl carousel-->
  <link rel="stylesheet" href="./lib/owlcarousel2/owl.carousel.css">
  <script src="./lib/owlcarousel2/owl.carousel.min.js" type="text/javascript"></script>
  
  <!-- font-awesome -->
  <link href="./lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  
  <!-- programa -->
  <link href="./css/common.css" rel="stylesheet"/>
  <link href="./css/common-header.css" rel="stylesheet">
  <link href="./css/common-tema.css" rel="stylesheet">
  <link href="./css/common-home.css" rel="stylesheet">
  <link href="./css/information-contact.css" rel="stylesheet">
  <link href="./css/information-information.css" rel="stylesheet">
  <link href="./css/paquetes-paquetes.css" rel="stylesheet">
  <link href="./css/common-footer.css" rel="stylesheet">

</head>
<div class="common-header">
<?php require_once('./catalogo/vistas/inicio/header.php'); ?>
</div>
<div class="common-body">
  <br><br><br><br><br><br><br><br>
  <?php require_once($route); ?>
  
</div>
<div class="common-footer">
  <?php  require_once('./catalogo/vistas/inicio/footer.php'); ?>

</div>
</body>
</html>