<?php

function languagesGet($filters){

    $sql = "SELECT * FROM languages";

    $where = "";

    if(isset($filters['id']) && $filters['id'] !== ""){
        $where .= (($where == "")? " WHERE (" : " AND");
        $where .= " id = '{$filters['id']}'";
    }

    if(isset($filters['name']) && $filters['name'] !== ""){
        $where .= (($where == "")? " WHERE (" : " AND");
        $where .= " name = '{$filters['name']}'";
    }

    if(isset($filters['code']) && $filters['code'] !== ""){
        $where .= (($where == "")? " WHERE (" : " AND");
        $where .= " code = '{$filters['code']}'";
    }
    
    if($where !== "") $where .= ")";
    
    $sql .= $where;
    
    return query($sql);
}

?>