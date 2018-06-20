<?php

function usersGet($params){
    
    $filters  = (isset($params['filters']))? $params['filters'] : array();
    $sorts    = (isset($params['sorts']))?   $params['sorts'] : array();
    $start    = (isset($params['start']))?   $params['start'] : "";
    $quantity = (isset($params['quantity']))?   $params['quantity'] : "";

    //--------------

    $sql = "SELECT * FROM users";

    //--------------

    $where = "";

    //Example: search on multiples fields with LIKE.
    /*
    if(isset($filters['search']) && $filters['search'] !== ""){
        $where .= (($where == "")? " WHERE (" : " AND");
        $where .= " name LIKE '%{$filters['search']}%' OR user LIKE '%{$filters['search']}%'";
    }
    */

    if(isset($filters['id']) && $filters['id'] !== ""){
        $where .= (($where == "")? " WHERE (" : " AND");
        $where .= " id = '{$filters['id']}'";
    }

    if(isset($filters['name']) && $filters['name'] !== ""){
        $where .= (($where == "")? " WHERE (" : " AND");
        $where .= " name LIKE '%{$filters['name']}%'";
    }
    
    //Example: search by name with LIKE
    /*
    if(isset($filters['search_name']) && $filters['search_name'] !== ""){
        $where .= (($where == "")? " WHERE (" : " AND");
        $where .= " name LIKE '%{$filters['search_name']}%'";
    }
    */

    if(isset($filters['user']) && $filters['user'] !== ""){
        $where .= (($where == "")? " WHERE (" : " AND");
        $where .= " user = '{$filters['user']}'";
    }

    if(isset($filters['password']) && $filters['password'] !== ""){
        $where .= (($where == "")? " WHERE (" : " AND");
        $where .= " password = '" . md5($filters['password']) . "'";
    }

    if($where !== "") $where .= ")";
    
    // --------------

    $sort = "";

    if(isset($sorts['id']) && $sorts['id'] !== ""){
        $sort .= (($sort == "")? " ORDER BY" : " ,");
        $sort .= " id " . $sorts['id'];
    }
    
    if(isset($sorts['name']) && $sorts['name'] !== ""){
        $sort .= (($sort == "")? " ORDER BY" : " ,");
        $sort .= " name " . $sorts['name'];
    }

    // --------------

    $sql .= $where;
    $sql .= $sort;

    // --------------

    if($start !== "" && $quantity !== ""){
        $sql .= " LIMIT $start, $quantity";
    }
    
    return query($sql);
}

function usersSet($datas){

    if($datas['id'] == ""){

        $sql = "INSERT INTO users SET
                name     = '{$datas['name']}',
                user     = '{$datas['user']}',
                password = '" . md5($datas['password']) . "'";
        
    } else {

        $sql = "UPDATE users SET name = '{$datas['name']}'";
        
        if($datas['password'] !== ""){
            $sql .= ", password = '" . md5($datas['password']) . "'";
        }
        
        $sql .= " WHERE (id = '{$datas['id']}')";
    }
    
    return query($sql);
}

function usersDelete($id){
    
    if($id !== "1"){
        $sql = "DELETE FROM users WHERE (id = '$id')";
        query($sql);
    }
    
    return true;
}

?>