<?php

$field = $_POST["hidden_filename"];
	
$path     = PATH_TMP;
$new_name = date("Ymdhis");
$ext      = pathinfo($_FILES[$field]['name'], PATHINFO_EXTENSION);

move_uploaded_file($_FILES[$field]["tmp_name"], $path . "/" . $new_name . "." . $ext);

$response = array(
    "status"   => "OK",
    "messages" => array(),
    "datas"    => $path . "/" . $new_name . "." . $ext
);

echo json_encode($response);
exit();
?>