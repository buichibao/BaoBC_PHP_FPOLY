<?php
include 'connect.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
}   
    $sql = "SELECT * FROM products WHERE id ='$id'";
    $result = mysqli_query($connect,$sql);

    $row = mysqli_fetch_assoc($result);



if(isset($_POST['delete'])){

        $sql = "UPDATE products SET status = 0 WHERE id = '$id'";
        mysqli_query($connect,$sql);
        header('location:product.php');
}

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
	body{
		height: 100vh;
		display: flex;
		justify-content:center;
		align-items: center;
	}
	body::-webkit-scrollbar{
		display: none;
	}
	.controls{
		display: flex;
		gap: 20px;
		justify-content: center;	
	}
	.controls input:first-child{
		background-color: #1DBA53;
	}
	.controls input:last-child{
		background-color:  #D44A4A;;
	}
	input{
		border-radius: 4px;
		display: block;
		text-decoration: none;
		padding: 10px 20px;
		color: white;
		outline: none;
		box-shadow: 5px 5px 0px 1px gray;
		transition:all .15s ease-in-out;
		&:hover{
			box-shadow: 0px 0px 0px 0px gray;
			transform: translate(2px,2px);
		}
	}
</style>
<body>
	<div class="wrapper">
		<h1>Bạn có chắc chắn muốn xoá : <?php echo $row['productname']?></h1>
		

        <form action="" method="post">
            <div class="controls">
            <a href="product.php"><input type="button" value="Cancle"></a>
            <input type="submit" value="Delete" name="delete">
		   </div>
        </form>
	</div>
</body>
</html>










