<?php
print_r("expression");
if(($l == "ES") || ($l == "Es") || ($l == "es") ){
  $txt_informacion = array(
    'miga1' =>'paquetes/es',
    'miga2' =>'paquetes/es',
  );
}else{
  $txt_informacion = array(
    'miga1' =>'paquetes/en',
    'miga2' =>'paquetes/en',
  );
}

$sql = "SELECT pp.*, ppd.* FROM pacPackages pp
LEFT JOIN pacPackagesDescriptions ppd on(pp.pacPackages_Id = ppd.pacPackages_Id)
LEFT JOIN sysIdioms si on(si.sysIdioms_Id = ppd.sysIdioms_Id)
WHERE (
  si.sysIdioms_Code = '{$l}' 
  and pp.pacPackages_IsPublic = 1
)";

$productos = consultarSql($sql);

print_r($productos);
?>