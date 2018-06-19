<?php

if(($l == "ES") || ($l == "Es") || ($l == "es") ){
  $txt_informacion = array(
    'miga1' =>'paquetes/es',
  );
}else{
  $txt_informacion = array(
    'miga1' =>'paquetes/en',
  );
}

$sql = "SELECT pp.*, ppd.* FROM pacPackages pp
LEFT JOIN pacPackagesDescriptions ppd on(pp.pacPackages_Id = ppd.pacPackages_Id)
LEFT JOIN sysIdioms si on(si.sysIdioms_Id = ppd.sysIdioms_Id)
WHERE (
  si.sysIdioms_Code = '{$l}' 
  and pp.pacPackages_IsPublic = 1
)";

$paquetes = consultarSql($sql);
//print_r('<br>$productos<br>');
//print_r($productos);
//print_r('<br>txt_informacion<br>');
//print_r($txt_informacion);
?>