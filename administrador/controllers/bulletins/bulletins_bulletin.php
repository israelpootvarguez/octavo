<?php

require_once("./models/bulletins.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$errors = array();

	$datas = $_POST['datas'];
	
	//FIX: inputss
	if(!isset($datas['image'])) $datas['image'] = $_POST['image_filename'];
	if(!isset($datas['image_movil'])) $datas['image_movil'] = $_POST['image_movil_filename'];
	if(!isset($datas['image_success'])) $datas['image_success'] = $_POST['image_success_filename'];
	if(!isset($datas['isActive'])) $datas['isActive'] = "0";

	$errors = validate($datas);

	if(count($errors) == 0){
		
		bulletinsSet($datas);
		
		$_SESSION['success'] = "Los cambios se han guardado correctamente.";
		header("Location: ./index.php?r=bulletins-bulletin");
		exit();
	}
	
} else {
		
	$errors = array();
	
	$resp = bulletinsGet(array(
		"id" => "1"
	));

	$datas = $resp[0];

}

function validate($datas){

	$errors = array();

	if($datas['image'] == ""){
		$errors[] = "Ingrese la imagen";
	}

	if($datas['image_movil'] == ""){
		$errors[] = "Ingrese la imagen móvil";
	}

	if($datas['image_success'] == ""){
		$errors[] = "Ingrese la imagen de éxito";
	}
	
	return $errors;
}

require_once("./views/bulletins/bulletins_bulletin.php");
?>