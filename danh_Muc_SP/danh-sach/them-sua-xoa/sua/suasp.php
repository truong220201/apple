<?php
	$id = $_GET['id'];
	$sql = "SELECT * FROM ipad";
	$query = mysqli_query($conn, $sql);

	$sql_up = "SELECT * FROM ipad WHERE id = $id";
	$query_up = mysqli_query($conn, $sql_up);
	$row_up = mysqli_fetch_assoc($query_up);

	if(isset($_POST["submit"])) {
		$id = $_POST["id"];
		$maunen = $_POST["maunen"];
		$vitri  = $_POST["vitri"];
		$new = $_POST["new"];
		$name = $_POST["name"];	
		$introduce = $_POST["introduce"];

		if ($_FILES['image']['name']=="") {
			$image = $row_up['name'];
   		}else{
   			$image = $_FILES['image']['name'];
            $image_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($image_tmp, 'img/'.$image);
   		}

		$price = $_POST["price"];
		$sql = "UPDATE ipad SET id = '$id',maunen = '$maunen',vitri ='$vitri',  new = '$new', name='$name', introduce='$introduce', image ='$image', price = '$price' WHERE id = '$id'";
		$query = mysqli_query($conn,$sql);
		header('location: http://localhost/apple/quan_tri.php');
	}
?>