<?php

require_once("./models/languages.php");

function slidersGet($filters){

    $languages = languagesGet(array());

    $sql = "SELECT
            s.id,
            sl.language_id,
            #sl.title, #No son necesarios
            #sl.image, #No son necesarios
            s.link,
            s.isExternal,
            s.sort,
            s.isActive
            FROM sliders s
            LEFT JOIN sliders_languages sl ON (sl.slider_id = s.id)";
    
    $where = "";

    if(isset($filters['id']) && $filters['id'] !== ""){
        $where .= (($where == "")? " WHERE (" : " AND");
        $where .= " s.id = '{$filters['id']}'";
    }

    if(isset($filters['language_id']) && $filters['language_id'] !== ""){
        $where .= (($where == "")? " WHERE (" : " AND");
        $where .= " sl.language_id = '{$filters['language_id']}'";
    }

    if($where !== "") $where .= ")";
    
    $sql .= $where;
    
    $resp = query($sql);
    
    foreach($resp as &$row){
        foreach($languages as $language){
            $sql = "SELECT title, image FROM sliders_languages WHERE(language_id='{$language['id']}' AND slider_id='{$row['id']}')";
            $resp2 = query($sql);
            $row['languages'][$language['id']] = $resp2[0];
        }
    }
    
    return $resp;
}

function slidersSet($datas){
    
    $languages = languagesGet(array());

    //FIX: from tmp to files/sliders.
    if($datas['id'] == ""){

        $sql = "INSERT INTO sliders SET
                link       = '{$datas['link']}',
                isExternal = '{$datas['isExternal']}',
                sort       = '{$datas['sort']}',
                isActive   = '{$datas['isActive']}'";
        $last_id = query($sql);

        foreach($languages as $language){
            $image = str_replace(PATH_TMP . "/", "", $datas['languages'][$language['id']]['image']);
            $image = str_replace(PATH_FILES . "/sliders/", "", $image);

            $sql = "INSERT INTO sliders_languages SET
                    language_id = '{$language['id']}',
                    slider_id   = '{$last_id}',
                    title       = '{$datas['languages'][$language['id']]['title']}',
                    image       = '" . PATH_FILES . "/sliders/" . $image . "'";
            query($sql);

            @rename($datas['languages'][$language['id']]['image'], PATH_FILES . "/sliders/" . $image);
        }

    } else {
        
        $sql = "UPDATE sliders SET
                link       = '{$datas['link']}',
                isExternal = '{$datas['isExternal']}',
                sort       = '{$datas['sort']}',
                isActive   = '{$datas['isActive']}'
                WHERE (id = '{$datas['id']}')";
        query($sql);

        foreach($languages as $language){
            $image = str_replace(PATH_TMP . "/", "", $datas['languages'][$language['id']]['image']);
            $image = str_replace(PATH_FILES . "/sliders/", "", $image);

            $sql = "UPDATE sliders_languages SET
                    title       = '{$datas['languages'][$language['id']]['title']}',
                    image       = '" . PATH_FILES . "/sliders/" . $image . "'
                    WHERE(language_id='{$language['id']}' AND slider_id='{$datas['id']}')";
            query($sql);

            @rename($datas['languages'][$language['id']]['image'], PATH_FILES . "/sliders/" . $image);
        }
    }

    return true;
}

function slidersDelete($id){
    
    $sql = "DELETE FROM sliders WHERE (id = '$id')";
    query($sql);
    
    $sql = "DELETE FROM sliders_languages WHERE (slider_id = '$id')";
    query($sql);
    
    @unlink(PATH_FILES . "/sliders/{$id}.jpg");
    return true;
}

?>