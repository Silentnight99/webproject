<?php
	session_start();
	if(isset($_SESSION['nguyenhongphuc']) || isset($_SESSION['phamhoangphuc'])){
		echo '<h1>Bạn không có quyền truy cập vào trang này </h1>';
        
        header("Location: Index.php");
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Upload software</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body{
        background-image: url("images/background.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%
    }
  </style>
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="images/PLPlay.png" alt="" width="100" height="100">
        <h2 style="color: #00ff00">Thêm ứng dụng</h2>
      </div>

      <div class="row">
        <div class="col-md order-md-1">
          <form action="UploadSoft.php" method="POST" enctype="multipart/form-data">

            <div class="mb-3">
              <label for="name" style="color: #00ff00">Tên ứng dụng</label>
              <div class="input-group">
                <input type="text" class="form-control" id="ten" name="ten" required>
              </div>
            </div>
			<div class="mb-3">
      <label for="fileUpload" style="color: #00ff00">Tải hình ảnh lên</label>
              <div class="input-group">
                <input type="file" id="ImgUpload" name="ImgUpload" required>
              </div>
      </div>

			<div class="mb-3">
              <label for="name" style="color: #00ff00">Thể loại</label>
              <div class="input-group">
                <select class="input-group" name="theloai">
					<option value="Games">Games</option>
					<option value="Books">Books</option>
					<option value="Education">Education</option>
          <option value="Movies">Movies</option>
				</select>
              </div>
            </div>
			
			<div class="mb-3">
              <label for="fileUpload" style="color: #00ff00">Tải lên</label>
              <div class="input-group">
                <input type="file" id="fileUpload" name="fileUpload" required>
              </div>
            </div>
			
            <hr class="mb-4">
            <button class="btn btn-primary " type="submit">Thêm vào</button>
          </form>
          <br></br>
          <button style="color: black; background-color:blue"> <a href="Index.php">Quay trở về trang chính</a></button>
        </div>
      </div>

    </div>

  </body>
</html>