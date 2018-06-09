<?php
print_r("hola mundo"); 
//////////////////////////////////
define("DB_HOST", 	  "localhost");
define("DB_NAME", 	  "adpromex_adpromex");
define("DB_USER", 	  "adpromex_adprome");
define("DB_PASSWORD", "qwerty123*");

// -----------------

function tomarParametro($key, $method = 'GET', $value = null){
	if($method == 'POST'){
		if(isset($_POST[$key])){
			return $_POST[$key];
		}else{
			return $value;
		}
	}else if($method == 'REQUEST'){
		if(isset($_REQUEST[$key])){
			return $_REQUEST[$key];
		}else{
			return $value;
		}
	}else{
		if(isset($_GET[$key])){
			return $_GET[$key];
		}else{
			return $value;
		}
	}
}

function consultarSql($sql){
	
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	
	if(mysqli_connect_errno()){
		printf("Error en la conexion: %s\n", mysqli_connect_error());
		exit();
	}

	if(!$mysqli->set_charset("utf8")){
		printf("Error cargando el conjunto de caracteres utf8: %s\n", $mysqli->error);
	}

	$results = $mysqli->query($sql) or die($mysqli->error . __LINE__);

	if($results instanceof mysqli_result){
		$datas = array();
		while($row = $results->fetch_assoc()){
			$datas[] = $row;
		}
	}else{
		$datas = $mysqli->insert_id;
	}

	return $datas;
}

function toJson($data){
	switch(gettype($data)){
		
		//boolenos
		case 'boolean':
			return $data ? 'true' : 'false';
		
		//enteros
		case 'integer':
			return $data;
		
		//dobles
		case 'double':
			return $data;
		
		//recursos
		case 'resource':
			//no soportado
		
		//cadenas
		case 'string':
			$json = '';
			//escapar caracteres no imprimibles o no ascii
			$string = '"' . addcslashes($data, "\\\"\n\r\t/".chr(8).chr(12)).'"'; 
			for ($i = 0; $i < strlen($string); $i++) { 
				$char = $string[$i]; 
				$c1 = ord($char); 
				
				# Single byte;
				if($c1 < 128){
					$json .= ($c1 > 31) ? $char : sprintf("\\u%04x", $c1);
					continue; 
				}
				
				# Double byte 
				$c2 = ord($string[++$i]); 
				if(($c1 & 32) === 0){
					$json .= sprintf("\\u%04x", ($c1 - 192) * 64 + $c2 - 128); 
					continue;
				}
				
				# Triple 
				$c3 = ord($string[++$i]);
				if (($c1 & 16) === 0){
					$json .= sprintf("\\u%04x", (($c1 - 224) <<12) + (($c2 - 128) << 6) + ($c3 - 128)); 
					continue; 
				} 
				
				# Quadruple 
				$c4 = ord($string[++$i]);
				if (($c1 & 8 ) === 0){
					$u = (($c1 & 15) << 2) + (($c2 >> 4) & 3) - 1;
					$w1 = (54 << 10) + ($u << 6) + (($c2 & 15) << 2) + (($c3 >> 4) & 3); 
					$w2 = (55 << 10) + (($c3 & 15) << 6) + ($c4 - 128); 
					$json .= sprintf("\\u%04x\\u%04x", $w1, $w2); 
				}
				
			}		
			return $json;
		
		//arrays
		case 'array':
			
			//indexados
			if (empty($data) || array_keys($data) === range(0, sizeof($data) - 1)){
				$output = array();
				foreach ($data as $value) {
					$output[] = toJson($value);
				}
				return '['.implode(',',$output).']';
			
			//asosiativos (en javascript los arrays asociativos son en realidad bojetos)
			}else{
				$output = array();
				foreach ($data as $key => $value) {
					$output[] = toJson($key).':'.toJson($value);
				}
				return '{'.implode(',', $output).'}';
			}
		
		//objetos
		case 'object':
			$output = array();
			foreach ($data as $key => $value) {
				$output[] = toJson(strval($key)).':'.toJson($value);
			}
			return '{'.implode(',', $output).'}';
		
		//null
		default:
			return 'null';
		
	}
}


//////////////////////////////////
$l = tomarParametro("l");
if($l == ""){
$l = "ES";
};


$sql = "SELECT * FROM sysIdioms where sysIdioms_Code = '$l'";
$languages = consultarSql($sql);
if(count($languages) ==0){
	$l = "ES";
}

$sql = "SELECT * FROM sysEnterprise se
LEFT JOIN sysIdioms si  on(se.sysIdioms_Id = si.sysIdioms_Id) 
where si.sysIdioms_Code = '$l'";

$DATOS_EMPRESA = consultarSql($sql);
$DATOS_EMPRESA = $DATOS_EMPRESA[0];

if(($l == "ES") || ($l == "Es") || ($l == "es") ){
$textos_heder  = array(
	'txt_telefono' => "PEDIDOS POR TELÉFONO/es", 
	'txt_contactanos' => "CONTÁCTANOS/es",
	'txt_cuenta' => "Mi Cuenta/es",
	'txt_salir' => "Salir/es",

	'txt_salir' => "Paquetes/es",
	'txt_salir' => "Quiénes somos/es",
	'txt_salir' => "Contacto/es",

	'txt_l1' => "Español/es",
	'txt_l2' => "Ingles/es",

	'code_l1' => "ES",
	'code_l2' => "EN",	
);

}else{
$textos_heder  = array(
	'txt_telefono' => "PEDIDOS POR TELÉFONO/en", 
	'txt_contactanos' => "CONTÁCTANOS/en",
	'txt_cuenta' => "Mi Cuenta/en",
	'txt_salir' => "Salir/en",

	'txt_salir' => "Paquetes/en",
	'txt_salir' => "Quiénes somos/en",
	'txt_salir' => "Contacto/en",

	'txt_l1' => "Español/en",
	'txt_l2' => "Ingles/en",

	'code_l1' => "ES",
	'code_l2' => "EN",	
);	
}
//print_r("expression");
print_r($DATOS_EMPRESA);
print_r($textos_heder);

$telefono     = "9999-99-99-99";
$urlContacto  = "www.google.com";
$urlMicuenta  = "www.google.com";
$urlCarrito   = "www.google.com";
$urlPagar     = "www.google.com";

$urlSalir = "www.google.com";

$carrito = array();
$carrito["productos"] = array();
$carrito["productos"][0] = array('carrito_id' => '0','carrito_nombre' => 'producto1','carrito_img' => 'nada.jpg','carrito_cantidad' => '1','carrito_precio'=>'10.00');
$carrito["productos"][1] = array('carrito_id' => '1','carrito_nombre' => 'producto2','carrito_img' => 'nada.jpg','carrito_cantidad' => '2','carrito_precio'=>'20.00');

$carrito["total"] = "50";
$carrito["cantidadTotal"] ="3";


$menu = array();
$menu['categorias'] = array();
$menu['categorias'][] = array('icono' => "XD", 'nombre' => "categoria1", 'url' => "www.google.com1");  
$menu['categorias'][] = array('icono' => "XD", 'nombre' => "categoria2", 'url' => "www.google.com1");
$menu['categorias'][] = array('icono' => "XD", 'nombre' => "categoria3", 'url' => "www.google.com1");
?>