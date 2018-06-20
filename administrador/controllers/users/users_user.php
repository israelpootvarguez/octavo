<?php

require_once("./models/users.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	$errors = array();

	$datas = $_POST['datas'];
	
	if(isset($_GET['edit'])){
		$errors = validate_edit($datas);
	} else {
		$errors = validate_add($datas);
	}

	if(count($errors) == 0){
		
		usersSet($datas);
		
		$_SESSION['success'] = "Los cambios se han guardado correctamente.";
		header("Location: ./index.php?r=users-users");
		exit();
	}
	
} else {

	$errors = array();
	
	if(isset($_GET['edit'])){
		
		$users = usersGet(array(
			"id" => $_GET['id']
		));

		$datas = $users[0];

		//FIX: reset values
		$datas['password']         = '';
		$datas['password_confirm'] = '';

	} else {
		
		$datas = array();
		$datas['id']               = '';
		$datas['name']             = '';
		$datas['user']             = '';
		$datas['password']         = '';
		$datas['password_confirm'] = '';
	}
}

function validate_add($datas){

	$errors = array();

	if($datas['name'] == ""){
		$errors[] = "Ingrese el nombre";
	}

	if ($datas['user'] == "") {
		$errors[] = "Ingrese el usuario";
	} else {

		$users = usersGet(array(
			"user" => $datas['user']
		));
		
		if(count($users) > 0){
			$errors[] = "El nombre de usuario ya existe.";
		}
	}

	if($datas['password'] == ""){
		$errors[] = "Ingrese la contraseña";
	}else{
		if($datas['password'] !== $datas['password_confirm']){
			$errors[] = "La confirmación del correo no es correcta.";
		}
	}
	
	return $errors;
}

function validate_edit($datas){

	$errors = array();

	if($datas['id'] == "1"){
		$errors[] = "El super usuario no puede editarse.";
	}
	
	if($datas['name'] == ""){
		$errors[] = "Ingrese el nombre";
	}

	if($datas['password'] !== ""){
		if($datas['password'] !== $datas['password_confirm']){
			$errors[] = "La confirmación del correo no es correcta.";
		}
	}

	return $errors;
}

require_once("./views/users/users_user.php");
?>