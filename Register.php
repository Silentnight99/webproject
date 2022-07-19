<!DOCTYPE HTML>
<html>
<head>
<title>Đăng Ký</title>
<link rel="shortcut icon" href="images\unnamed.jpg"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Play Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Tạo form và các điều khiển</title>
	<style>
		table{
			border-collapse: collapse;
			background-color: #FEFBC4;
			font-size: 20px;
		}
		#m1{
			color: #2A6E9B;
		}
		#m2{
			color: #E57C35;
		}
		form{
			margin-top: 100px;
		}
		body{
		background-color: #808080;
		margin:0;
		}
		.banner{
			height:50px;
			
		}
		.container{
        max-width: 600px;
		color: white;
		}
		body {
			background-image: url('images/background.jpg');
  			background-repeat: no-repeat;
  			background-attachment: fixed;
  			background-size: 100% 100%;
		}
</style>
		
	</style>
</head>
<body>
	<div style="background-image: url('images/background.jpg');">
	<div class="banner">
	<div><h2 align = "center"><font color = "white"><b>Đăng ký Tài Khoản</b></font></h2><hr></hr></div>
	</div>
	<div class="container">
	    <form action="" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label for="tentaikhoan">Tên Tài Khoản:</label>
            <input type="text" class="form-control" id="tentaikhoan"  name="tentaikhoan">
        </div>
        <div class="form-group">
            <label for="matkhau">Mật Khẩu:</label>
            <input type="password" class="form-control" id="matkhau"  name="matkhau">
        </div>
		<div class="form-group">
            <label for="hoten">Họ Tên:</label>
            <input type="text" class="form-control" id="hoten"  name="hoten">
        </div>
		<div class="form-group ">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email"  name="email">
        </div>
		
		<div class="form-group ">
            <label for="sdt">SĐT</label>
            <input type="text" class="form-control" id="sdt" name="sdt">
        </div>
		<div class="form-group">
        	<input type="submit" value="Register" class="btn float-right login_btn" style ="background-color:blue; border-color:blue; color: white">
			<?php
				if (isset($_POST["tentaikhoan"]) && isset($_POST["matkhau"]) && isset($_POST['hoten']) && isset($_POST['email']) && isset($_POST['sdt'])) {
					require_once("conn.php");
					$tentaikhoan = $_POST['tentaikhoan'];
					$matkhau = $_POST['matkhau'];
					$hoten = $_POST['hoten'];
					$email = $_POST['email'];
					$sdt = $_POST['sdt'];
					$sql = "SELECT * FROM user WHERE tentaikhoan = '$tentaikhoan'";
					$result = $conn->query($sql);
				if ($result->num_rows > 0){
				$message = "Your account has existed";
				echo "<script type='text/javascript'>alert('$message');</script>";
				return 0;
				}
				$sql = "INSERT INTO user(tentaikhoan, matkhau, hoten, email, sdt) VALUES ('$tentaikhoan', '$matkhau','$hoten','$email','$sdt')";
				if ($conn->query($sql) === FALSE) {
				die("Error: Failed to register");
				} else {
					header("Location:Index.php");
				}
    			}

			?>
		</div>
        
    </form>
	</div>
	
</body>
</html>

