<?php
	require_once("conn.php");
	
	$ten = $_POST["ten"];
  $theloai = $_POST["theloai"];
	
	$target_dir = "upload/";
  $target_dirimg = "images/";
	$file_name = basename($_FILES["fileUpload"]["name"]);
  $img_name = basename($_FILES["ImgUpload"]["name"]);
	$target_file = $target_dir . $file_name;
  $target_img = $target_dirimg . $img_name;
	
	if (!move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
        die("Sorry, there was an error uploading your file.");
    }
    if(!empty($_POST["id"]))
    {
    	//Update
    	$sql = "";
    }else{
    	//Add
    	$sql = "SELECT * FROM theloai WHERE ungdung = '$file_name'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0){
			$message = "Ứng dụng đã tồn tại";
			echo "<script type='text/javascript'>alert('$message');</script>";
			return 0;
		}
    	$sql = "INSERT INTO theloai (ten, hinhanh, theloai, ungdung) VALUES ('$ten', '$img_name', '$theloai', '$file_name')";
    	}	
    $sql = "INSERT INTO theloai (ten, hinhanh, theloai, ungdung) VALUES ('$ten', '$img_name', '$theloai', '$file_name')";
			
	if ($conn->query($sql) === FALSE) {
		die("Error: " . $sql . $conn->error);
	} else {
    echo '<script type="text/javascript">';
    echo ' alert("Upload thành công")';  //not showing an alert box.
    echo '</script>';
		header("Location:AddSoftware.php");
	}
?>