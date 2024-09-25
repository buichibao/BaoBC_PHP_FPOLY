<?php
    require '../pdo.php';
     function deleteCategory($id) {
        $sql = "UPDATE product SET status = 0 WHERE id = '$id'";
        pdo_execute($sql);
        echo json_encode($id);
    }
    header('Content-Type: application/json');
    deleteCategory($_POST['id']);
?>