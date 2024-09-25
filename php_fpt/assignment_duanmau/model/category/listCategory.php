<?php
    require '../pdo.php';
    header('Content-Type: application/json');
    function get_all_categoryJS(){
        $sql = "SELECT * FROM category where status = 1 order by id desc";
        return pdo_query($sql);
    }
        $data = get_all_categoryJS();
        echo json_encode($data);

?>