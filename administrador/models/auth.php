<?php

require_once("./models/users.php");

function authIsLogued(){
    
    return isset($_SESSION['_USER_']);
}

function authLogin($datas){

    $resp = usersGet(array(
        'user'     => $datas['user'],
        'password' => $datas['password']
    ));
    
    if(count($resp) == 0){
        return false;
    } else {

        $_SESSION['_USER_'] = $resp[0];

        return true;
    }
}

function authGetLogued(){

    if(isset($_SESSION['_USER_'])){
        return $_SESSION['_USER_'];
    }else{
        return false;
    }
}

function authLogout(){
    
    unset($_SESSION['_USER_']);
}

?>