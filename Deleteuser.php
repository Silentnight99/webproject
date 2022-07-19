<?php 
	require_once("conn.php");
		$id = $_GET['id'];
		$sql = "DELETE FROM theloai WHERE id = '$id'";	
		$result = $conn->query($sql);
		if($sql){
			header("Location: ListProgram.php");
		}
?>