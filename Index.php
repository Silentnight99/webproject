<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Home Page</title>
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
.title{
	background-color:red;
	font-size: 12pt;
	vertical-align: top;
    display: inline-block;
    text-align: center;
	color: blue;
}
</style>
</head>
  <body> 
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><h1><img src="images/PLPlay.png" alt="" style="height: 80px;margin-left:40px;width:130px; padding-bottom:20px;"/></h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<div class="top-search">
				<form class="navbar-form navbar-right" action="Search.php" method="POST" enctype="multipart/form-data">
					<input type="text" class="form-control" name="search" placeholder="Search">
					<input type="submit" name="submit" value="">
				</form>
            </div>
            <div class="signin">
				<?php if( isset($_SESSION['tentaikhoan']) && !empty($_SESSION['tentaikhoan']) )
					{
				
				echo '<a class ="nav-link">'.$_SESSION["tentaikhoan"].'</a>';
      			echo '<a href="Logout.php" class="play-icon popup-with-zoom-anim">Logout</a>';
				echo '<a href="ChangePass.php" class="play-icon popup-with-zoom-anim">Chage password</a>';
				?>
				<?php }else{ ?>
     			<a href="Login.php" class="play-icon popup-with-zoom-anim">Login</a>
     			<a href="Register.php" class="play-icon popup-with-zoom-anim">Register</a>
				<?php } ?>


			</div>  
        </div>
    </div>
    </nav>
    <div class="col-sm-3 col-md-2 sidebar">
		<div class="top-navigation">
			<div class="t-menu">MENU</div>
			<div class="t-img">
				<img src="images/lines.png" alt="" />
			</div>
			<div class="clearfix"> </div>
		</div>
			<div class="drop-navigation drop-navigation">
				<ul class="nav nav-sidebar">
				<li class="active"><a href="Index.php" class="home-icon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home Page</a></li>
					
                    <!--Cat-->
				<li><a href="#" class="menu1"><span class="glyphicon glyphicon-film glyphicon-th-large" aria-hidden="true"></span>Category <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></li>
					<ul class="cl-effect-1">
							<li><a href="Games.php">Games</a></li>                                             
							<li><a href="Movies.php">Movies</a></li>
							<li><a href="Books.php">Books</a></li> 
                            <li><a href="Educations.php">Educations</a></li> 
					</ul>
						<!-- script-for-menu -->
					<script>
						$( "li a.menu1" ).click(function() {
						$( "ul.cl-effect-1" ).slideToggle( 300, function() {
							// Animation complete.
						});
						});
					</script>
					<!-- End Cat-->
            </div>
        </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<div class="main-grids">
			<div class="recommended">
				<div class="recommended-grids">
					<div class="recommended-info">
						<h3><font color="yellow"> </font></h3>
					</div>
					<script src="js/responsiveslides.min.js"></script>
					<script>
							// You can also use "$(window).load(function() {"
						$(function () {
							  // Slideshow 4
							$("#slider3").responsiveSlides({
								auto: true,
								pager: false,
								nav: true,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });
						
							});
					</script>
					
					<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li>
								<div class="animated-grids">
									<div class="col-md-3 resent-grid recommended-grid slider-first">
										<div class="resent-grid-img recommended-grid-img">
											<img src="images/sell/bietdoisieuanhhunghoiket.jpg" alt="" />
										</div>
										<div class="user-info">
											<span class="title"> Avengers</span>
										</div>
									</div>
									<div class="col-md-3 resent-grid recommended-grid slider-first">
										<div class="resent-grid-img recommended-grid-img">
											<img src="images/sell/avatar.jpg" alt="" />
										</div>
										<div class="user-info">
											<span class="title"> Avatar</span>
										</div>
									</div>
									<div class="col-md-3 resent-grid recommended-grid slider-first">
										<div class="resent-grid-img recommended-grid-img">
											<img src="images/sell/bietdoisieuanhhung2.jpg" alt="" />
										</div>
										<div class="user-info">
											<span class="title"> Avengers Age Of Ultron</span>
										</div>	
									</div>
									<div class="col-md-3 resent-grid recommended-grid slider-first">
										<div class="resent-grid-img recommended-grid-img">
											<img src="images/sell/daihongthuy.jpg" alt="" />
										</div>
										<div class="user-info">
											<span class="title"> Noah</span>
										</div>	
									</div>
										
									<div class="clearfix"> </div>
								</div>
							</li>
							<li>
								<div class="animated-grids">
									<div class="col-md-3 resent-grid recommended-grid slider-first">
										<div class="resent-grid-img recommended-grid-img">
											<img src="images/sell/ReaderPro.png" alt="" />
										</div>	
										<div class="user-info">
											<span class="title"> ReaderPro</span>
										</div>	
									</div>
									<div class="col-md-3 resent-grid recommended-grid slider-first">
										<div class="resent-grid-img recommended-grid-img">
											<img src="images/sell/Classroom.png" alt="" />
										</div>
										<div class="user-info">
											<span class="title"> Classroom</span>
										</div>
									</div>
										
									<div class="col-md-3 resent-grid recommended-grid slider-first">
										<div class="resent-grid-img recommended-grid-img">
											<img src="images/sell/elsa.png" alt="" />
										</div>
										<div class="user-info">
											<span class="title"> ELSA Speak</span>
										</div>
									</div>
									<div class="col-md-3 resent-grid recommended-grid slider-first">
										<div class="resent-grid-img recommended-grid-img">
											<img src="images/sell/KidsUP.png" alt="" />
										</div>
										<div class="user-info">
											<span class="title"> KidsUP</span>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</li>
								
								
								
						</ul>
					</div>
				</div>
			</div>
			<div class="recommended">
				<div class="recommended-grids">	
					<div class="recommended-info">
						<h3><font color="yellow">  </font></h3>
					</div>
				</div>
					
			</div>
				
		</div>
   </div>
  </body>
</html>