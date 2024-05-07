<?php
$thanhcong = null;
$thatbai = null;
use PHPMailer\PHPMailer\PHPMailer;

require_once "connect.php";
if (isset($_POST['sendmail'])) {
	$email = $_POST['email_forgot'];
	$sql = "SELECT * from users WHERE email = '$email'";
	$result = mysqli_query($connect,$sql);
	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_array($result);
		$email = $row['email'];
		$password = $row['password'];
        require_once "./PHPMailer/src/Exception.php";
		require_once "./PHPMailer/src/PHPMailer.php";
		require_once "./PHPMailer/src/SMTP.php";
 
			$mail = new PHPMailer(true);
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = "hoangnlpd09770@fpt.edu.vn";
			$mail->Password = "tttv fmok txsh ivae";
			$mail->SMTPSecure = 'ssl';
			$mail->Port = 465;
			// $mail->setFrom('aztenderio7146@gmail.com');
			$mail->addAddress($email);
			$mail->isHTML(true);
			$mail->Subject ="Your request to retrieve your password has been approved by Bui Chi Bao";
			$mail->Body = "Your password is: " . $password;
			$mail->send();
			$thanhcong = "Successful, return to login";
			$thatbai = "";
	    //     sleep(2);
		// header('location:login.php');
			
	} else {

		$thanhcong = "";
		$thatbai = "Failure";
	}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng Nhập</title>
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="../assignment/css/style.css">
    <link rel="stylesheet" href="../assignment/css/login.css">
	
</head>
<body>
<main>

<header>
    <a href="#" class="logo"><i class="fas-fa-untensils"></i>BuiChiBao.</a>
    
    <!-- <nav class="navbar">
        <a class="active" href="#home">home</a>
        <a href="#dishes">dishes</a>
        <a href="#about">about</a>
        <a href="#menu">menu</a>
        <a href="#review">review</a>
        <a href="#order">oder</a>
    </nav> -->

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
    </div>
</header>




<!-- Form đăng kí đăng nhập -->
<section class="order" id="order" style="margin-top: 100px;">

   
    <h1 class="sub-heading">Login</h1>

    <form action="" method="post">
        <div>
            <a href="#" class="logo" id ="logo_login">BuiChiBao.</a>
        </div>

        <div class="inputBox">
            <div class="input">
                <span>Email</span>
                <input type="email" name="email_forgot" placeholder="Email or my phone">
				<p style="color:green;font-weight: bold;"><?php echo $thanhcong ?></p>
				<p style="color:red;font-weight: bold;"><?php echo $thatbai ?></p>
            </div>
        </div>
  
        <!-- Quên mật khẩu -->

      <div style="margin-top:50px ;">
        <input type="submit" value="Continue" class="btn" name="sendmail">   
		 <a href="login.php" class="btn">Login</a>
      </div>
        
    </form>
</section>

<!--footer-->
<section class="footer">
    <div class="box-container">

       <div class="box">
           <h3>locations</h3>
           <a href="#">india</a>
           <a href="#">japan</a>
           <a href="#">russia</a>
           <a href="#">USA</a>
           <a href="#">france</a>
       </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">dishes</a>
            <a href="#">about</a>
            <a href="#">review</a>
            <a href="#">order</a>
        </div>

        <div class="box">
            <h3>contact infor</h3>
            <a href="#">+123-456-7890</a>
            <a href="#">+111-222-3333</a>
            <a href="#">about</a>
            <a href="#">shaikhanas@gmail.com</a>
            <a href="#">anasbhai@gmail.com</a>
            <a href="#">mumbai,india - 400104</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linkedin</a>
        </div>

    </div>
    <div class="credit">copyright @ 2023 by <span>Mr.Bui Chi Bao</span></div>
</section>

</main>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>