<?php
	$id = $_GET['id'];
	$sql = "SELECT * FROM ipad";
	$query = mysqli_query($conn, $sql);

	$sql_up = "SELECT * FROM ipad WHERE id = $id";
	$query_up = mysqli_query($conn, $sql_up);
	$row_up = mysqli_fetch_assoc($query_up);

	if(isset($_POST["submit"])) {
		$id = $_POST["id"];
		$new = $_POST["new"];
		$name = $_POST["name"];	
		$introduce = $_POST["introduce"];

		if ($_FILES['image']['name']=='') {
			$image = $row_up['name'];
   		}else{
   			$image = $row_up['name'];
   		}

		$price = $_POST["price"];
		$sql = "UPDATE ipad SET id = '$id',new = '$new', name='$name', introduce='$introduce', image ='$image', price = '$price'";
		$query = mysqli_query($conn,$sql);
		header('location: index.php?page_layout=danhsach');
	}
?>
<div class="container-fluid">
	<div>
		<div class="card">
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
						<input type="file" name="image" id="image" required>
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