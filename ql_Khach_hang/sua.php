<?php
	$id = $_GET['id'];
	$sql = "SELECT * FROM khachhang";
	$query = mysqli_query($conn, $sql);

	$sql_up = "SELECT * FROM khachhang WHERE id = $id";
	$query_up = mysqli_query($conn, $sql_up);
	$row_up = mysqli_fetch_assoc($query_up);

	if(isset($_POST["submit"])) {
		$id = $_POST["id"];
		$name = $_POST["name"];	

		if ($_FILES['image']['name']=="") {
			$image = $row_up['name'];
   		}else{
   			$image = $_FILES['image']['name'];
            $image_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($image_tmp, 'img/'.$image);
   		}

		$diemtichluy = $_POST["diemtichluy"];
		$sql = "UPDATE khachhang SET id = '$id', name='$name', image ='$image', diemtichluy = '$diemtichluy' WHERE id = '$id'";
		$query = mysqli_query($conn,$sql);
		header('location: http://localhost/apple/quan_tri.php');
	}
?>
<div class="container-fluid">
	<div>
		<div class="card"style="background-image: url('bgapple.jpg');width: 100%;">
			<div class="card-header">
				Sửa thông tin khách hàng
			</div>
			<div class="card-body">
				<form method = "POST" enctype="multipart/form-data">
					<div class="form-group">
						<label>ID</label>
						<input type="text" name="id" class="form-control " required value="<?php echo $row_up['id']; ?>">
					</div>

					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control "required value="<?php echo $row_up['name']; ?>">
					</div>

					<div class="form-group">
						<label>Image</label><br>
						<input type="file" name="image" id="image" >
					</div>


					<div class="form-group">
						<label>Điểm tích lũy</label>
						<input type="number" name="diemtichluy" class="form-control "required value="<?php echo $row_up['diemtichluy']; ?>">
					</div>

					<button class="btn btn-success" type="submit" name="submit">Sửa</button>
				</form>
			</div>
		</div>
	</div>
</div>