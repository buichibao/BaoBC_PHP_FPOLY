<?php
    require '../pdo.php';
    header('Content-Type: application/json');
    function get_all_productJS(){
        $sql = "SELECT * FROM product where status = 1 order by id desc";
        return pdo_query($sql);
    }
        $data = get_all_productJS();
        echo json_encode($data);

?>