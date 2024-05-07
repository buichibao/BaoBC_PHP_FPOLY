<?php

include 'connect.php';

$sql="INSERT INTO user (id , username, password ,level)
values ('','admin','123123',2),
       ('','baobc','123123',2)";

    mysqli_query($connect,$sql);

?>