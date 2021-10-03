<?php
	if(isset($_POST["submit"])) {
		$id = $_POST["id"];
		$maunen = $_POST["maunen"];
		$vitri = $_POST["vitri"];
		$new = $_POST["new"];
		$name = $_POST["name"];	
		$introduce = $_POST["introduce"];

		$image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];

		$price = $_POST["price"];
		$sql = "INSERT INTO ipad(id, maunen, new, name, introduce, image, price)
		VALUES ('$id', '$maunen', '$new', '$name','$introduce', '$image', '$price')";
		$query = mysqli_query($conn,$sql);
		move_uploaded_file($image_tmp, 'img-large/'.$image);
		header('location: http://localhost/apple/quan_tri.php');
	}
?>