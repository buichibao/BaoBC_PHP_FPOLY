<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <form class="row g-3 mt-3 mb-3" method="POST" action="./index.php">
        <div class="col-auto">
            <label for="nameStudent" class="visually-hidden">Email</label>
            <input type="text" class="form-control" id="nameStudent" name="email" placeholder="Nhập email cần tìm">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Tìm kiếm</button>
        </div>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên</th>
                <th scope="col">Lớp</th>
                <th scope="col">Email</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($listAllStudent) > 0) {
                while ($row = mysqli_fetch_assoc($listAllStudent)) {
                    echo
                    ' <tr>
                <th scope="col">' . $row['id'] . '</th>
                <th scope="col">' . $row['name'] . '</th>
                <th scope="col">' . $row['class_name'] . '</th>
                <th scope="col">' . $row['email'] . '</th>
                <td><button type="button" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></td>
                <td><button type="button" name="delete" class="btn btn-danger"><i class="bi bi-trash"></i></button></td>
                </tr>';
                }
            }else {
                echo 'Danh sách sinh viên trống';
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
<?php ?>