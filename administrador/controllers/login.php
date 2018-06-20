<?php

require_once("./models/auth.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	$errors = array();

	$datas = $_POST['datas'];
	
	$errors = validate($datas);
	
	if(count($errors) == 0){
		
		$resp = authLogin($datas);

		if($resp == false){

			$errors[] = "Usuario no encontrado";
		}else{

			header("Location: ./index.php");
			exit();
		}
	}
	
} else {

	$errors = array();

	$datas = array();
	$datas['user'] ='admin';
	$datas['password'] ='qwerty123*';
}

function validate($datas){

	$errors = array();

	if($datas['user'] == ""){
		$errors[] = "Ingrese el usuario";
	}

	if($datas['password'] == ""){
		$errors[] = "Ingrese la contraseña";
	}
	
	return $errors;
}

require_once("./views/login.php");
?>