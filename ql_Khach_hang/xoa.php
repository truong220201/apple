<?php
	$id = $_GET['id'];
	$sql = "DELETE FROM khachhang WHERE id = $id";
	$query = mysqli_query($conn,$sql);
	header('location: http://localhost/apple/quan_tri.php');
?>