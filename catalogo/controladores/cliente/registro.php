<?php



if(($l == "ES") || ($l == "Es") || ($l == "es") ){
  $texto_registro = array(
  'txt_descargar' => 'descargar/es',
  'txt_mensaje'   => 'descargue le programa para contar con un chat, revisar su cuenta entre otros beneficios/es', 
  );

  $Textos_footer = array(
  'sysIdioms_Id'              => 'idioma/es',
  'cusCustomers_Name'         => 'nombre/es',
  'cusCustomers_Address'      => 'direccion/es',
  'cusCustomers_Phone'        => 'telefono/es',
  'cusCustomers_Email'        => 'Email/es',
  'cusCustomers_RFC'          => 'Rfc/es',
  'cusCustomers_FacAddress'   => 'direccion fiscal/es',
  'cusCustomers_FacEmail'     => 'email fiscal/es',
  'cusCustomers_FacPC'        => 'CP fiscal/es',
  'txt_btn'                   => 'suscribirse/es',
  );  
}else{
  $texto_registro = array(
  'txt_descargar' => 'descargar/en',
  'txt_mensaje'   => 'descargue le programa para contar con un chat, revisar su cuenta entre otros beneficios/en', 
);
  $Textos_footer = array(
  'sysIdioms_Id'              => 'idioma/en',
  'cusCustomers_Name'         => 'Tips/en',
  'cusCustomers_Address'      => 'Preguntas frecuentes/en',
  'cusCustomers_Phone'        => 'Contacto/en',
  'cusCustomers_Email'        => 'SOBRE ADPROMEX/en',
  'cusCustomers_RFC'          => 'Quiénes somos/en',
  'cusCustomers_FacAddress'   => 'direccion fiscal/en',
  'cusCustomers_FacEmail'     => 'Email Fiscal/en',
  'cusCustomers_FacPC'        => 'c.p. fiscal/en',
  'txt_btn'                   => 'suscribirse/en',
  );
}

//print_r('<br>$Textos_footer<br>');
//print_r($Textos_footer);
//print_r('<br>$texto_registro<br>');
//print_r($texto_registro);
?>