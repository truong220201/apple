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
<div class="container-fluid">
	<div>
		<div class="card"style="background-image: url('bgapple.jpg');">
			<div class="card-header">
				Thêm SP
			</div>
			<div class="card-body">
				<form method = "POST" enctype="multipart/form-data">
					<div class="form-group">
						<label>ID</label>
						<input type="text" name="id" class="form-control " required>
					</div>

					<div class="form-group">
						<label>Màu nền</label>
						<input type="text" name="maunen" class="form-control "required >
					</div>

					<div class="form-group">
						<label>Vị trí</label>
						<input type="text" name="vitri" class="form-control "required >
					</div>

					<div class="form-group">
						<label>New</label>
						<input type="text" name="new" class="form-control "required>
					</div>

					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control "required>
					</div>

					<div class="form-group">
						<label>Introduce</label>
						<input type="text" name="introduce" class="form-control "required>
					</div>

					<div class="form-group">
						<label>Image</label><br>
						<input type="file" name="image" id="image" required>
					</div>


					<div class="form-group">
						<label>Price</label>
						<input type="number" name="price" class="form-control "required>
					</div>

					<button class="btn btn-success" type="submit" name="submit">Thêm</button>
				</form>
			</div>
		</div>
	</div>
</div>