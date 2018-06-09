<?php 
$sql = "SELECT pp.pacPackages_ImgBanner , ppd.pacPackagesDescriptions_NameSEO FROM pacPackages pp
LEFT JOIN pacPackagesDescriptions ppd on(pp.pacPackages_Id = ppd.pacPackages_Id)
LEFT JOIN sysIdioms si on(si.sysIdioms_Id = ppd.sysIdioms_Id)
WHERE (
	si.sysIdioms_Code = '{$l}' 
	and pp.pacPackages_IsBanner = 1
    and pp.pacPackages_IsPublic = 1
)";
//
    
$banners = consultarSql($sql);
//si.sysIdioms_Code = $l 
    
$sql = "SELECT pp.pacPackages_ImgNew, ppd.pacPackagesDescriptions_NameSEO FROM pacPackages pp
LEFT JOIN pacPackagesDescriptions ppd on(pp.pacPackages_Id = ppd.pacPackages_Id)
LEFT JOIN sysIdioms si on(si.sysIdioms_Id = ppd.sysIdioms_Id)
WHERE (
	si.sysIdioms_Code = '{$l}' 
	and pp.pacPackages_IsPublic = 1
    and pp.pacPackages_IsNew = 1
)";

$productos = consultarSql($sql);
print_r('<br>$banners<br>');
print_r($banners);
print_r('<br>$productos<br>');
print_r($productos);
?>