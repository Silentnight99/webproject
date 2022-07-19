<!DOCTYPE HTML>
<html>
<head>
<title>Search</title>
<link rel="shortcut icon" href="images\unnamed.jpg"/>
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
</head>
  <body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><h1><img src="images/PLPlay.png" alt="" style="height: 80px;margin-left:40px;width:130px; padding-bottom:20px;"/></h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<div class="top-search">
				<form class="navbar-form navbar-right" action="timkiem.php" method="POST" enctype="multipart/form-data">
					<input type="text" class="form-control" name="search" placeholder="Search">
					<input type="submit" name="submit" value="">
				</form>
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
						<br></br>
							<h3><font color="yellow">Kết Quả Tìm Kiếm </font></h3>
						</div>
						<br></br>
						<?php
						require_once('conn.php');
						if(isset($_POST['search'])){
						  $timkiem = $_POST['search'];
						  $sql = "SELECT * FROM theloai where ten LIKE '%$timkiem%' or theloai LIKE '%$timkiem%'";
						  $result = $conn->query($sql);
						}
						  if ($result->num_rows > 0) {
							  while ($row = $result->fetch_assoc()) {
						?>
						
						<div class="col-md-2 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="Index.php?id=<?= $row['id'] ?>"><img src="<?= $row['hinhanh'] ?> "alt="" /></a>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="Index.php?id=<?= $row['id'] ?>" class="title"><?= $row['ten']?></a></h5>
							</div>
							<br></br>
						</div>
						<?php }
						} else{
							echo "<h3 align='center' ><font color='yellow'>Không Tìm Thấy Kết Quả Bạn Yêu Cầu</font></h3>";
						}?>
								
						
						<div class="clearfix"> </div>
					</div>

				</div>
				
			</div>
	</div>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  </body>
</html>