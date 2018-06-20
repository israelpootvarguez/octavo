<?php

function settingsGet($name){

    $sql = "SELECT value FROM settings WHERE name = '$name'";
    $resp = query($sql);

    if(count($resp) == 0){

        $sql = "INSERT INTO settings SET name = '$name', value = ''";
        query($sql);

        return "";
    }else{
        return $resp[0]['value'];
    }
}

function settingsSet($name, $value){
    
    $sql = "UPDATE settings SET value = '$value' WHERE(name='$name')";
    query($sql);
    
    return true;
}
?>