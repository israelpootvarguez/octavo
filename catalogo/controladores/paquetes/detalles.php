<?php

$id = tomarParametro("id","GET",NULL);
//pacPackagesDescriptions_NameSEO

if(($l == "ES") || ($l == "Es") || ($l == "es") ){
  $txt_detalles = array(
    'miga1' =>'paquetes/es',
    'miga2' =>'paquetes/es',
  );
}else{
  $txt_detalles = array(
    'miga1' =>'paquetes/en',
    'miga2' =>'paquetes/en',
  );
}

$sql = "SELECT pp.*, ppd.* FROM pacPackages pp
LEFT JOIN pacPackagesDescriptions ppd on(pp.pacPackages_Id = ppd.pacPackages_Id)
LEFT JOIN sysIdioms si on(si.sysIdioms_Id = ppd.sysIdioms_Id)
WHERE (
  ppd.pacPackagesDescriptions_NameSEO = '{$id}' 
  and pp.pacPackages_IsPublic = 1
)";

$productos = consultarSql($sql);
$paquete = $productos[0];
?>