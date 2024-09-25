<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="bai3.php" method="post">
        <input type="text" id="name" name="name" placeholder="Nhập tên"><br>
        <p id="error_name"></p>
        <input type="text" id="age"  name="age" placeholder="Nhập tuổi"><br>
        <p id="error_age"></p>
        <input type="submit" name="submit" onclick="return check()" value="Gửi">
    </form>
    <?php
    if (isset($_POST['submit']) && ($_POST['submit'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $result = '<p> Hello , xin chào '.$name.', '.$age.'</p>';
        echo $result;
    }
   
    ?>

    <script>
     
        function check(){
            age = document.getElementById('age');
            if(age.value === ""){
                document.getElementById('error_age').innerHTML = "Tuổi được bỏ trống";
                age.focus();
                return false;
            }else if(!Number.isInteger(parseFloat(age.value))){
                document.getElementById('error_age').innerHTML = "Năm sinh không đúng định dạng";
                age.focus();
                return false;
            }
            return true;
        }
    </script>
</body>

</html>