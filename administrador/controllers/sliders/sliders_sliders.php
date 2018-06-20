<?php

require_once("./models/sliders.php");

if(isset($_GET['del'])){
	
    slidersDelete($_GET['id']);
    
	header("Location: ./index.php?r=sliders-sliders");
	exit();
}

$list = slidersGet(array('language_id' => LANGUAGE));

if(isset($_SESSION['success'])){
	$success = $_SESSION['success'];
	unset($_SESSION['success']);
}else{
	$success = "";
}

require_once("./views/sliders/sliders_sliders.php");

?>