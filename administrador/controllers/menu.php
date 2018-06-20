<?php

require_once("./models/auth.php");

$logued = authGetLogued();

if(isset($_GET['logout']) && $_GET['logout'] == "1"){
	
    authLogout();
    
	header("Location: ./index.php");
	exit();
}

require_once("./views/menu.php");
?>