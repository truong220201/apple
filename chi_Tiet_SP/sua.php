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
<div class="container-fluid">
	<div>
		<div class="card"style="background-image: url('bgapple.jpg');width: 100%;">
			<div class="card-header">
				Sửa sản phẩm
			</div>
			<div class="card-body">
				<form method = "POST" enctype="multipart/form-data">
					<div class="form-group">
						<label>ID</label>
						<input type="text" name="id" class="form-control " required value="<?php echo $row_up['id']; ?>">
					</div>

					<div class="form-group">
						<label>Màu nền</label>
						<input type="text" name="maunen" class="form-control "required value="<?php echo $row_up['maunen']; ?>">
					</div>

					<div class="form-group">
						<label>Vị trí</label>
						<input type="text" name="vitri" class="form-control "required value="<?php echo $row_up['vitri']; ?>">
					</div>

					<div class="form-group">
						<label>New</label>
						<input type="text" name="new" class="form-control "required value="<?php echo $row_up['new']; ?>">
					</div>

					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control "required value="<?php echo $row_up['name']; ?>">
					</div>

					<div class="form-group">
						<label>Introduce</label>
						<input type="text" name="introduce" class="form-control "required value="<?php echo $row_up['introduce']; ?>">
					</div>

					<div class="form-group">
						<label>Image</label><br>
						<input type="file" name="image" id="image" >
					</div>


					<div class="form-group">
						<label>Price</label>
						<input type="number" name="price" class="form-control "required value="<?php echo $row_up['price']; ?>">
					</div>

					<button class="btn btn-success" type="submit" name="submit">Sửa</button>
				</form>
			</div>
		</div>
	</div>
</div>