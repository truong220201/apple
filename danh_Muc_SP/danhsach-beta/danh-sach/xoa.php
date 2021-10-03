<?php
	$id = $_GET['id'];
	$sql = "DELETE FROM ipad WHERE id = $id";
	$query = mysqli_query($conn,$sql);
	header('Location: http://localhost/apple/danh_Muc_SP/danh-sach/index.php?page_layout=danhsach');
?>