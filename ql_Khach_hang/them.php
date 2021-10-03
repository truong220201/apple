<?php
	if(isset($_POST["submit"])) {
		$id = $_POST["id"];
		$name = $_POST["name"];	

		$image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];

		$diemtichluy = $_POST["diemtichluy"];
		$sql = "INSERT INTO khachhang(id, name, image, diemtichluy)
		VALUES ('$id', '$name', '$image', '$diemtichluy')";
		$query = mysqli_query($conn,$sql);
		move_uploaded_file($image_tmp, 'khachhang/'.$image);
		header('location: http://localhost/apple/quan_tri.php');
	}
?>
<div class="container-fluid">
	<div>
		<div class="card"style="background-image: url('bgapple.jpg');">
			<div class="card-header">
				Thêm KH
			</div>
			<div class="card-body">
				<form method = "POST" enctype="multipart/form-data">
					<div class="form-group">
						<label>ID</label>
						<input type="text" name="id" class="form-control " required>
					</div>

					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control "required>
					</div>

					<div class="form-group">
						<label>Image</label><br>
						<input type="file" name="image" id="image" required>
					</div>


					<div class="form-group">
						<label>Điểm tích lũy</label>
						<input type="number" name="diemtichluy" class="form-control "required>
					</div>

					<button class="btn btn-success" type="submit" name="submit">Thêm</button>
				</form>
			</div>
		</div>
	</div>
</div>