<?php
	$id = $_GET['id'];
	$sql = "DELETE FROM ipad WHERE id = $id";
	$query = mysqli_query($conn,$sql);
	header('location: http://localhost/apple/quan_tri.php');
?>