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
    <a href="./index.php?chucnang=add"><button type="button" class="btn btn-outline-secondary" name="addStudent">Thêm mới sinh viên</button></a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên</th>
                <th scope="col">Lớp</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php 
              if(mysqli_num_rows($listAllStudent)>0){
                while ($row = mysqli_fetch_assoc($listAllStudent)) {
                 echo '<tr>
                       <td>'.$row['id'].'</td>
                       <td>'.$row['name'].'</td>
                       <td>'.$row['class_name'].'</td>
                       <td><button type="button" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></td>
                       <td><a href="index.php?chucnang=delete&id='.$row['id'].'"><button type="button" name="delete" class="btn btn-danger"><i class="bi bi-trash"></i></button></a></td>
                       </tr>';
              }
              }else {
                echo "Danh sách trống";
              }
              
            ?>
           
            
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>