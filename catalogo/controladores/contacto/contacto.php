<?php
if(($l == "ES") || ($l == "Es") || ($l == "es") ){
	$txt_Contacto = array(
		'miga1' =>'contacto/es',
		'telefono' => 'Telefono/es', 
		'Horarios' => 'Horarios/es', 
		'Nombre:' => 'Nombre:/es', 
		'Email:' => 'Email:/es', 
		'Pregunta' => 'Pregunta/es', 
	);
}else{
	$txt_Contacto = array(
		'miga1' =>'contacto/en',
		'telefono' => 'Telefono/en', 
		'Horarios' => 'Horarios/en', 
		'Nombre:' => 'Nombre:/en', 
		'Email:' => 'Email:/en', 
		'Pregunta' => 'Pregunta/en', 
	);
}

print_r('<br>$DATOS_EMPRESA<br>');
print_r($DATOS_EMPRESA);
print_r('<br>$txt_Contacto<br>');
print_r($txt_Contacto);
print_r('<br>$Textos_menu_lateral<br>');
print_r($Textos_menu_lateral);
?>