<?php
$listStudent = array(
    'student1' => ['id' => 1, 'name' => 'Bùi Chí Bảo'],
    'student2' => ['id' => 2, "name" => 'Trần Đình Nam'],
    'student3' => ['id' => 3, "name" => 'Trần Đình Phú'],
    'student4' => ['id' => 4, "name" => 'Trần Đức Thành'],
);

$listHobbies = array("Đábóng","Dulịch","ChơiGame");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <?php
        foreach ($listHobbies as $key => $value) {
            echo '<input type="checkbox" name="list[]" value=' . $value . '>' . $value. '<br>';
        }
        ?>
        <input type="submit" name="btn" value="Gửi danh sách">
    </form>

    <div >
        <button onclick="hienthi()">Hiển thị</button>
        <table class="table" id="chitiet">
            <thead>
                <tr>
                
                    <th scope="col">Tên</th>
                </tr>
            </thead>
            <?php
            if (isset($_POST['btn']) && ($_POST['btn'])) {
                $list = $_POST['list'] ?? [];
                // var_dump($list);
                foreach ($list as $key => $value) {
                    echo '<tbody>
        <tr>
        <td>' . $value. '</td>

       
        </tr>
        </tbody>';
                }
            }

            ?>
        </table>
        <script>
            function hienthi(){
                let chitiet = document.getElementById('chitiet');
                // chitiet.style.display = "none";

                if(chitiet.style.display == "block"){
                    chitiet.style.display = "none";
                }else {
                    chitiet.style.display = "block";
                }
            }
        </script>
    </div>
</body>

</html>