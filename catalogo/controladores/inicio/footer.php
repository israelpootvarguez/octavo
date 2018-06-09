<?php 













if(($l == "ES") || ($l == "Es") || ($l == "es") ){
	$Textos_footer = array(
	'titulo1' => 'SERVICIO AL CLIENTE/es',
	'txt1' => 'Formas de pago/es',
	'txt2' => 'Tips/es',
	'txt3' => 'Preguntas frecuentes/es',
	'txt4' => 'Políticas de envio/es',
	'txt5' => 'Contacto/es',
	'titulo2' => 'SOBRE ADPROMEX/es',
	'txt6' => 'Quiénes somos/es',
	'txt7' => 'Aviso de privacidad/es',
	'txt8' => 'Información de envios/es', 
	'txt9' => 'Términos y condiciones/es',
	);	
}else{
	$Textos_footer = array(
	'titulo1' => 'SERVICIO AL CLIENTE/en',
	'txt1' => 'Formas de pago/en',
	'txt2' => 'Tips/en',
	'txt3' => 'Preguntas frecuentes/en',
	'txt4' => 'Políticas de envio/en',
	'txt5' => 'Contacto/en',
	'titulo2' => 'SOBRE ADPROMEX/en',
	'txt6' => 'Quiénes somos/en',
	'txt7' => 'Aviso de privacidad/en',
	'txt8' => 'Información de envios/en', 
	'txt9' => 'Términos y condiciones/en',
	);
}

print_r('<br>$Textos_footer<br>');
print_r($Textos_footer);
;?>