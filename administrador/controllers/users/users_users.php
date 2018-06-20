<?php

require_once("./models/users.php");
require_once("./models/settings.php");

if(isset($_GET['del'])){
	
    usersDelete($_GET['id']);
    
	header("Location: ./index.php?r=users-users");
	exit();
}

//filters
$filters = array();
$filters['id']   = (isset($_GET['filters']['id']))? $_GET['filters']['id'] : "";
$filters['name'] = (isset($_GET['filters']['name']))? $_GET['filters']['name'] : "";

//sorts
$sorts = array();
$sorts['id']   = (isset($_GET['sorts']['id']))? $_GET['sorts']['id'] : "";
$sorts['name'] = (isset($_GET['sorts']['name']))? $_GET['sorts']['name'] : "";

//pagination
$quantity = LIMIT;                                       // Cantidad de registros por página.
$page     = (isset($_GET['page']))? $_GET['page'] : "1"; // Página actual.
$start    = (($page - 1) * $quantity);                   // Primer registro de la página.
$end      = $start + ($quantity);                        // Último registro de la página.
$total    = -1;                                          // Cantidad total de registros.
$pages    = -1;                                          // Cantidad de páginas para recorrer todos los registros.

$total = count(usersGet(array(
	"filters" => $filters
)));

$pages = ceil($total/$quantity);

//datas
$datas = usersGet(array(
	"filters"  => $filters,
	"sorts"    => $sorts,
	"start"    => $start,
	"quantity" => $quantity
));

if(isset($_SESSION['success'])){
	$success = $_SESSION['success'];
	unset($_SESSION['success']);
}else{
	$success = "";
}

require_once("./views/users/users_users.php");
?>