<?php
	include "suasp.php";
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