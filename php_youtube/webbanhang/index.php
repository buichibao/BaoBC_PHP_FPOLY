<?php

include 'connect.php';

$sql = "INSERT INTO iphone (id ,name , image , price , warranty	)
values ('','Iphone 11' ,'iphone11.png',100000000,'12 tháng'),
       ('','Iphone 12' ,'iphone12.png',100000000,'12 tháng'),
       ('','Iphone 13' ,'iphone13.png',100000000,'12 tháng'),
       ('','Iphone 14' ,'iphone14.png',100000000,'12 tháng'),
       ('','Iphone 15' ,'iphone15.png',100000000,'12 tháng')
";


mysqli_query($connect,$sql);



?>