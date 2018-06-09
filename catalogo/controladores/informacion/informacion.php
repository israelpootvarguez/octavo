<?php 
if(($l == "ES") || ($l == "Es") || ($l == "es") ){
  $txt_informacion = array(
    'miga1' =>'informacion/es',
    'miga2' => '',
  );
}else{
  $txt_informacion = array(
    'miga1' =>'informacion/en',
    'miga2' => '', 
  );
}

$informacion = array();

if(isset($_GET["informacion"])){

  if($_GET["informacion"] == 1){
    $contenido = $DATOS_EMPRESA['sysEnterprise_PaymentMethods'];
    if(($l == "ES") || ($l == "Es") || ($l == "es") ){$txt_informacion['miga2'] = "Formas de pago/es";}else{$txt_informacion['miga2'] = "Formas de pago/en";}
  }
  if($_GET["informacion"] == 2){
    $contenido = $DATOS_EMPRESA['sysEnterprise_Tips'];
    if(($l == "ES") || ($l == "Es") || ($l == "es") ){$txt_informacion['miga2'] = "Tips/es";}else{$txt_informacion['miga2'] = "Tips/en";}
  }
  if($_GET["informacion"] == 3){
    $contenido = $DATOS_EMPRESA['sysEnterprise_Questions'];
    if(($l == "ES") || ($l == "Es") || ($l == "es") ){$txt_informacion['miga2'] = "Preguntas frecuentes/es";}else{$txt_informacion['miga2'] = "Preguntas frecuentes/en";}
  }
  if($_GET["informacion"] == 5){
    $contenido = $DATOS_EMPRESA['sysEnterprise_AboutUs'];
    if(($l == "ES") || ($l == "Es") || ($l == "es") ){$txt_informacion['miga2'] = "Quiénes somos/es";}else{$txt_informacion['miga2'] = "Quiénes somos/en";}
  }
  if($_GET["informacion"] == 6){
    $contenido = $DATOS_EMPRESA['sysEnterprise_NoticePrivacy'];
    if(($l == "ES") || ($l == "Es") || ($l == "es") ){$txt_informacion['miga2'] = "Aviso de privacidad/es";}else{$txt_informacion['miga2'] = "Aviso de privacidad/en";}
  }
  if($_GET["informacion"] == 7){
    $contenido = $DATOS_EMPRESA['sysEnterprise_History'];
    if(($l == "ES") || ($l == "Es") || ($l == "es") ){$txt_informacion['miga2'] = "Historia/es";}else{$txt_informacion['miga2'] = "Historia/en";}
  } 
}else{
    $contenido = $DATOS_EMPRESA['sysEnterprise_MissionVision'];
    if(($l == "ES") || ($l == "Es") || ($l == "es") ){$txt_informacion['miga2'] = "mision y vision/es";}else{$txt_informacion['miga2'] = "mision y vision/en";}
}

print_r('<br>$txt_informacion<br>');
print_r($txt_informacion);
print_r('<br>$Textos_menu_lateral<br>');
print_r($Textos_menu_lateral);
print_r('<br>$contenido<br>');
print_r($contenido);
?> 