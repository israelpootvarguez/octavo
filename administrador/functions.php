<?php

session_start();

function query($sql){
	
	$mysqli = new mysqli(BD_HOST, BD_USER, BD_PASSWORD, BD_NAME);
	
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

function render_pagination($params){

	extract($params);
	
	$html = "";
	$html .= "<nav>";
	$html .= "<ul class='pagination'>";
	
	if($page > 1){
		$html .= "<li><a href='javascript:void(0);' id='pagination_back'><span>&laquo;</span></a></li>";
	}
	
	for($i=1; $i<=$pages; $i++){
		if($i == $page){
			$html .= "<li class='active'><a href='javascript:void(0);'>" . $i . "</a></li>";
		}else{
			$html .= "<li><a href='javascript:void(0);' class='pagination_page'>" . $i . "</a></li>";
		}
	}
	
	if($page < $pages){
		$html .= "<li><a href='javascript:void(0);' id='pagination_next'><span>&raquo;</span></a></li>";
	}
	
	$html .= "</ul>";
	$html .= "</nav>";
	
	return $html;
}

function render_filter($field, $value){
	if($value == ''){
		echo "<a href='#' class='sorts' data-field='{$field}' data-value='DESC'><i class='fa fa-caret-down'></i></a>";
		echo "<a href='#' class='sorts' data-field='{$field}' data-value='ASC'><i class='fa fa-caret-up'></i></a>";
	}else{
		if($value == 'ASC'){
			echo "<a href='#' class='sorts' data-field='{$field}' data-value='DESC'><i class='fa fa-caret-down'></i></a>";
			echo "<i class='sort fa fa-caret-up' data-field='{$field}' data-value='ASC'></i>";
		}else{
			echo "<i class='sort fa fa-caret-down' data-field='{$field}' data-value='DESC'></i>";
			echo "<a href='#' class='sorts' data-field='{$field}' data-value='ASC'><i class='fa fa-caret-up'></i></a>";
		}
	}
}
?>