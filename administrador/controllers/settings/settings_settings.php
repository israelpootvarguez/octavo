<?php

require_once("./models/settings.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$errors = array();

	$datas = $_POST['datas'];

	//FIX: inputss
	//...

	$errors = validate($datas);

	if(count($errors) == 0){
		
		settingsSet("name", $datas['name']);
		settingsSet("description", $datas['description']);

		$_SESSION['success'] = "Los cambios se han guardado correctamente.";
		header("Location: ./index.php?r=settings-settings");
		exit();
	}

} else {
		
	$errors = array();

	$datas = array();
	$datas['name'] = settingsGet("name");
	$datas['description'] = settingsGet("description");
	//...
}

if(isset($_SESSION['success'])){
	$success = $_SESSION['success'];
	unset($_SESSION['success']);
}else{
	$success = "";
}

function validate($datas){

	$errors = array();

	if($datas['name'] == ""){
		$errors[] = "Ingrese el nombre.";
	}
	
	return $errors;
}

require_once("./views/settings/settings_settings.php");
?>