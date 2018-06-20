<?php

require_once("./models/sliders.php");
require_once("./models/languages.php");

$languages = languagesGet(array());

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$errors = array();

	$datas = $_POST['datas'];

	//FIX: inputs
	if(!isset($datas['isExternal'])) $datas['isExternal'] = "0";
	if(!isset($datas['isActive'])) $datas['isActive'] = "0";
	foreach($languages as $language){
		if(!isset($datas['image' . $language['id']])) $datas['languages'][$language['id']]['image'] = $_POST["image" . $language['id'] . "_filename"];
	}

	$errors = validate($datas);
	
	if(count($errors) == 0){
		
		slidersSet($datas);
		
		$_SESSION['success'] = "Los cambios se han guardado correctamente.";
		header("Location: ./index.php?r=sliders-sliders");
		exit();
	}
	
} else {

	$errors = array();
	
	if(isset($_GET['edit'])){
		
		$resp = slidersGet(array(
			"id" => $_GET['id']
		));

		$datas = $resp[0];

	} else {
		
		$datas = array();
		$datas['id']         = '';//new
		$datas['languages']  = array();
		foreach($languages as $language){
			$datas['languages'][$language['id']]['title'] = "";
			$datas['languages'][$language['id']]['image'] = "";
		}
		$datas['link']       = 'http://';
		$datas['isExternal'] = '0';
		$datas['sort']       = '';
		$datas['isActive']   = '1';
		
	}
}

function validate($datas){

	$languages = languagesGet(array());

	$errors = array();

	foreach($languages as $language){
		if($datas['languages'][$language['id']]['image'] == ""){
			$errors[] = "Ingrese la imagen en " . $language['name'];
		}
	}
	
	if($datas['sort'] == ""){
		$errors[] = "Ingrese el orden";
	}
	
	return $errors;
}

require_once("./views/sliders/sliders_slider.php");
?>