<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Play Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->
<link href="css/dashboard.css" rel="stylesheet">
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<script src="js/jquery-1.11.1.min.js"></script>
<!--start-smoth-scrolling-->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- //fonts -->
<style>

<style>
	html,
	body {
	  height: 100%;
	}

	body {
	  display: -ms-flexbox;
	  display: -webkit-box;
	  display: flex;
	  -ms-flex-align: center;
	  -ms-flex-pack: center;
	  -webkit-box-align: center;
	  align-items: center;
	  -webkit-box-pack: center;
	  justify-content: center;
	  padding-top: 40px;
	  padding-bottom: 40px;
	  background-color: #f5f5f5;
	}

	.form-signin {
	  width: 100%;
	  max-width: 330px;
	  padding: 15px;
	  margin: 0 auto;
	}
	.form-signin .checkbox {
	  font-weight: 400;
	}
	.form-signin .form-control {
	  position: relative;
	  box-sizing: border-box;
	  height: auto;
	  padding: 10px;
	  font-size: 16px;
	}
	.form-signin .form-control:focus {
	  z-index: 2;
	}
	.form-signin input[type="name"] {
	  margin-bottom: -1px;
	  border-bottom-right-radius: 0;
	  border-bottom-left-radius: 0;
	  width: 300px;
	}
	.form-signin input[type="password"] {
	  margin-bottom: 10px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	  width: 300px;
	}
	</style>
</head>
<!--//-->
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><h1><img src="images/PLPlay.png" alt="" style="height:80px;margin-left:40px;width:130px; padding-bottom:20px;"/></h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<div class="top-search">	
			</div>  
			<div class="header-top-right">	
			</div>
	    </div>
    </nav>
	<!--//-->
	<div>
	<form action="" method="POST" class="form-signin">
      
      <h1 align="center" class="h3 mb-3 font-weight-normal"><b>Đăng Nhập</b></h1><br></br>
      <label for="tentaikhoan" class="sr-only">Tên tài khoản</label>
	  <input type="text" id="tentaikhoan" name = "tentaikhoan" class="form-control" placeholder="Tên tài khoản" required autofocus>
      <br></br>
	  
	  <label for="matkhau" class="sr-only">Mật khẩu</label>
	  <input type="password" id="matkhau" name="matkhau" class="form-control" placeholder="Mật khẩu" required>
      <br></br>
	  
	  <?php
							if (isset($_POST["tentaikhoan"]) && isset($_POST["matkhau"])) {
								require_once("conn.php");
								$tentaikhoan = $_POST["tentaikhoan"];
								$username = $_POST["tentaikhoan"];
								$matkhau = $_POST["matkhau"];
								$password = $_POST["matkhau"];

								$sqluser = "SELECT * FROM user WHERE tentaikhoan = '$tentaikhoan' AND matkhau = '$matkhau'";
								 
								$sqladmin = "SELECT * FROM useradmin WHERE username = '$username' AND  pass = '$password'";
								
								$result1 = $conn->query($sqluser);
								$result2  = $conn->query($sqladmin);

								if ($result1->num_rows > 0) {
									$_SESSION["tentaikhoan"] = $tentaikhoan;
									header("Location: Index.php");

								} if ($result2->num_rows > 0) {
									$_SESSION["tentaikhoan"] = $username;
									header("Location: Admin.php");

								}else {
									echo "Login failed";
								}
							}
						?>
	  
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      <br></br>
    </form>
    </div>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>