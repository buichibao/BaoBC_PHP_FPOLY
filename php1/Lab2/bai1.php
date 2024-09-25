<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>THÔNG TIN</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="id"  id="id" placeholder="Mã số sinh viên"><br>
        <p id="error_id"></p>
        <input type="text" name="name" id="name" placeholder="Họ tên"><br>
        <p id="error_name"></p>
        <input type="text" name="toan" id="toan" placeholder="Điểm Văn"><br>
        <p id="error_toan"></p>
        <input type="text" name="van" id="van" placeholder="Điểm Toán"><br>
        <p id="error_van"></p>
        <input type="submit" name="btn" onclick="return check()" value="Hiển thị kết quả"><br>
    </form>
    <?php
    if (isset($_POST['btn']) && ($_POST['btn'])) {
        $stt = 1;
        $id = $_POST['id'];
        $name = $_POST['name'];
        $toan = $_POST['toan'];
        $van = $_POST['van'];

        $dtb = ($toan + $van) / 2;
        if ($dtb >= 9) {
            $xl = "Xuất sắc";
        } else if ($dtb >= 8) {
            $xl = "Giỏi";
        } else if ($dtb >= 7) {
            $xl = "Khá";
        } else if ($dtb >= 5) {
            $xl = "Trung bình";
        } else {
            $xl = "Yếu";
        }

        if ($dtb >= 5) {
            $kq = "Đậu";
            $tb = "Chúc mừng bạn pass môn";
        } else {
            $kq = "Trượt";
            $tb = "Rất tiếc, bạn không qua môn";
        }
        $tr = '<tr>
                <td>' . $stt . '</td>
                <td>' . $id . '</td>
                <td>' . $name . '</td>
                <td>' . $toan . '</td>
                <td>' . $van . '</td>
                <td>' . $dtb . '</td>
                <td><button onclick="showchitiet()">Chi tiết</button></td>
             </tr>';
        $ct = '<p>STT : ' . $stt . '</p>
               <p>ID : ' . $id . '</p>
               <p>Họ tên : ' . $name . '</p>
               <p>Điểm trung bình : ' . $dtb . '</p>
               <p>Kết quả : ' . $kq . '</p>';
    }
    ?>
    <div>
        <?php if (isset($tr)) { ?>

            <table>
                <tr>
                    <th>STT</th>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Điểm toán</th>
                    <th>Điểm văn</th>
                    <th>Điểm trung bình</th>
                    <th>Chi tiết kết quả</th>
                </tr>
                <?= $tr ?>
            </table>

        <?php } ?>
    </div>
    <div class="boxchitiet" id="chitiet">
        <?php if (isset($ct)) { ?>
            <?= $ct ?>;
        <?php } ?>
    </div>
    <script>
        let chitiet = document.getElementById('chitiet');
        chitiet.style.display = "none";

        function showchitiet() {
            if (chitiet.style.display == "none") {
                chitiet.style.display = "block";
            } else {
                chitiet.style.display = "none"
            }
        }

        function check(){
          let id = document.getElementById('id');
          let name = document.getElementById('name');
          let toan = document.getElementById('toan');
          let van = document.getElementById('van');
          document.getElementById("error_id").innerHTML="";
          document.getElementById("error_name").innerHTML="";
          document.getElementById("error_toan").innerHTML="";
          document.getElementById("error_van").innerHTML="";

          if(id.value === ""){
            document.getElementById("error_id").innerHTML = "ID không được bỏ trống";
            id.focus();
            return false;
          }
          if(name.value == ""){
            document.getElementById("error_name").innerHTML ="Tên không được để trống";
            name.focus();
            return false;
          }
          if(toan.value == ""){
            document.getElementById("error_toan").innerHTML ="Điểm toán không được để trống";
            toan.focus();
            return false;
          }
          if(van.value == ""){
            document.getElementById("error_van").innerHTML ="Điểm văn không được để trống";
            van.focus();
            return false;
          }
          return true;
        }
    </script>
</body>

</html>