<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Change Pass</title>
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
	  padding-top: 100px;
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
          <a class="navbar-brand" href="index.php"><h1><img src="images/PLPlay.png" alt="" style="height:80px;margin-left:40px;width:130px; padding-bottom:20px;"/></h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<div class="top-search">	
			</div>  
			<div class="header-top-right">	
			</div>
	    </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-primary">Đổi mật khẩu</h3>
                <div><?php if(isset($message)) { echo $message; } ?></div>
                <form  name="chngpwd" method="POST" onsubmit="return valid();" action ="" id="formChangePass">
                    <div class="form-group">
                    </div>
                    <div class="form-group">
                        <label for="user_signin">Mật khẩu cũ</label>
                        <input type="password" class="form-control" id="old_pass">
                    </div>
                    <div class="form-group">
                        <label for="user_signin">Mật khẩu mới</label>
                        <input type="password" class="form-control" id="new_pass">
                    </div>
                    <div class="form-group">
                        <label for="user_signin">Nhập lại mật khẩu mới</label>
                        <input type="password" class="form-control" id="re_new_pass">
                    </div>
                    <a href="index.php" class="btn btn-default">
                        <span class="glyphicon glyphicon-arrow-left"></span> Trở về
                    </a>
                    <button class="btn btn-primary" id="submit_change_pass" name="Submit" value="Change Password">
                        <span class="glyphicon glyphicon-ok"></span> Thay đổi
                    </button>
                    <br><br>
                    <div class="alert alert-danger hidden"></div>
                </form>
            </div>
        </div>

        <?php
            $username = $_SESSION["tentaikhoan"];
            $password = "SELECT matkhau FROM user WHERE tentaikhoan = '$username'";
            $con = mysqli_connect('localhost','root','','plplay') or die('Unable To connect');
            if(count($_POST)>0) {
            $result = mysqli_query($con,"SELECT *from user WHERE tentaikhoan='$username'");
            $row=mysqli_fetch_array($result);
            if($_POST["old_pass"] == $row["matkhau"] && $_POST["new_pass"] == $row["re_new_pass"] ) {
            mysqli_query($con,"UPDATE user set matkhau='" . $_POST["new_pass"] . "' WHERE tentaikhoan='$username'");
            $message = "Password Changed Sucessfully";
            } else{
            $message = "Password is not correct";
            }
            }
        ?>
    </div>
        <script >
        function valid()
        {
        if(document.chngpwd.old_pass.value=="")
        {
        alert("Mật khẩu cũ không được để trống!");
        document.chngpwd.old_pass.focus();
        return false;
        }
        else if(document.chngpwd.new_pass.value=="")
        {
        alert("Mật khẩu mới không được để trống!");
        document.chngpwd.new_pass.focus();
        return false;
        }
        else if(document.chngpwd.re_new_pass.value=="")
        {
        alert("Xác nhận mật khẩu không được để trống!");
        document.chngpwd.re_new_pass.focus();
        return false;
        }
        else if(document.chngpwd.new_pass.value!= document.chngpwd.re_new_pass.value)
        {
        alert("Mật khẩu mới và xác nhận mật khẩu không khớp");
        document.chngpwd.re_new_pass.focus();
        return false;
        }
        return true;
        }
        </script>
            <script src="js/bootstrap.min.js"></script>

</body>
</html>