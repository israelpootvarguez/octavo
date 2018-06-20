<?php

function bulletinsGet($filters){

    $sql = "SELECT * FROM bulletins";
    
    $where = "";

    if(isset($filters['id']) && $filters['id'] !== ""){
        $where .= (($where == "")? " WHERE (" : " AND");
        $where .= " id = '{$filters['id']}'";
    }

    if($where !== "") $where .= ")";
    
    $sql .= $where;
    
    return query($sql);
}

function bulletinsSet($datas){

    //clear path
    $image = str_replace(PATH_TMP . "/", "", $datas['image']);
    $image = str_replace(PATH_FILES . "/bulletins/", "", $image);

    //clear path
    $image_movil = str_replace(PATH_TMP . "/", "", $datas['image_movil']);
    $image_movil = str_replace(PATH_FILES . "/bulletins/", "", $image_movil);

    //clear path
    $image_success = str_replace(PATH_TMP . "/", "", $datas['image_success']);
    $image_success = str_replace(PATH_FILES . "/bulletins/", "", $image_success);

    //FIX: from tmp to files/bulletins.
    $sql = "UPDATE bulletins SET
            image         = '" . PATH_FILES . "/bulletins/" . $image . "',
            image_movil       = '" . PATH_FILES . "/bulletins/" . $image_movil . "',
            image_success     = '" . PATH_FILES . "/bulletins/" . $image_success . "',
            message_error     = '{$datas['message_error']}',
            message_existence = '{$datas['message_existence']}',
            message_content   = '{$datas['message_content']}',
            isActive          = '{$datas['isActive']}'
            WHERE (id = '1')";
    
    @rename($datas['image'], PATH_FILES . "/bulletins/" . $image);
    @rename($datas['image_movil'], PATH_FILES . "/bulletins/" . $image_movil);
    @rename($datas['image_success'], PATH_FILES . "/bulletins/" . $image_success);
    
    return query($sql);
}
?>