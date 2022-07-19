<?php
	session_start();
	if(isset($_SESSION['nguyenhongphuc']) || isset($_SESSION['phamhoangphuc'])){
		echo '<h1>Bạn không có quyền truy cập vào trang này </h1>';
        
        header("Location: Index.php");
	}else{
        echo '<script type="text/javascript">';
        echo ' alert("Chào mừng quản trị viên")';  //not showing an alert box.
        echo '</script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<style>
    tr.header{
        font-weight: bold;
        color: white;
        background-color: #00cc00;
    }
	tr.control1{
		background-color: #006600;
	}

    td{
        padding: 10px;
    }

	</style>
</head>
<body>
<table border="1" cellpadding="5" cellspacing="5"  style="text-align: center; border-collapse: collapse; margin: auto; margin-top: 10px">

    <tr class="control1" style="text-align: center; font-weight: bold; font-size: 20px">
		<td colspan="1">
            <button>List</button>
        </td>
		<td colspan="1">
            <button><a href="Index.php">>>Home Page</a></button>
        </td>
		<td colspan="2">
            <button><a href="Listuser.php">>>List User</a></button>
        </td>
		 <td colspan="1">
            <button><a href="Logout.php">>>Logout</a></button>
        </td>
        <td colspan="2">
            <button><a href="AddSoftware.php">>>Upload Software</a></button>
        </td>
        <td colspan="1">
            <button><a href="ListProgram.php">>>List Program</a></button>
        </td>
    </tr>
	<?php 
	require_once('conn.php');
		  
    $sql = "SELECT id, ten, hinhanh, theloai FROM plplay";
    $result = $conn->query($sql);
	?>

</table>

</body>
</html>