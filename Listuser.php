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
        background-color: blue;
    }
	tr.control1{
		background-color: Darkblue;
	}

    td{
        padding: 10px;
    }

	</style>
</head>
<body>
	
<table border="1" cellpadding="10" cellspacing="10"  style="text-align: center; border-collapse: collapse; margin: auto; margin-top: 10px">

    <tr class="control1" style="text-align: center; font-weight: bold; font-size: 20px">
		<td colspan="4">
            <button>List User</button>
        </td>
		 <td colspan="1">
            <button><a href="Logout.php">Logout</a></button>
        </td>
    </tr>
    <tr class="header">
        <td>Họ Tên</td>
        <td>Tài Khoản</td>
        <td>Email</td>
		<td>SĐT</td>
		<td>Edit</td>
    </tr>
	<?php 
	require_once('conn.php');
		  
    $sql = "SELECT id, tentaikhoan, hoten, email, sdt FROM user";
  
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
	?>
    <tr class="item">
        <td><?=$row['hoten']?></td>
        <td><?=$row['tentaikhoan']?></td>
		<td><?=$row['email']?></td>
		<td><?=$row['sdt']?></td>
        <td><a href="deleteuser.php?id=<?= $row['id']?>" class="delete">Delete</a></td>
    </tr>
	<?php }
    } ?>
    <tr class="control" style="text-align: center; font-weight: bold; font-size: 17px">
        <td colspan="7">
            <p>Số Lượng User: <?= $result->num_rows ?></p>
        </td>
    </tr>
</table>

</body>
</html>