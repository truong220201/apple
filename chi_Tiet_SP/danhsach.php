 <?php
    require_once "danh_Muc_SP/danh-sach/condb.php";
 ?>
<?php
	$sql = "SELECT * FROM ipad";
	$query = mysqli_query($conn, $sql);
?>
<div class="container-fluid" style="height: 100%;">
  <div class="card">
  <div class="card-header">
    <h2>Danh sách sản phẩm</h2>
  </div>
  <div class="card-body">
    <table class="table">
    	<thead class="thead-dark">
    		<tr>
                <th>STT</th>
    			<th>ID</th>
                <th>Màu nền</th>
                <th>Vị trí</th>
    			<th>New</th>
    			<th>Name</th>
    			<th>Introduce</th>
                <th>Image</th>
                <th>Price</th>
    			<th>Sửa</th>
    			<th>Xóa</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php
    		$i = 1;
    			while ($row = mysqli_fetch_assoc($query)) {?>
    				<tr>
                        <td><?php echo $i++; ?></td>
    					<td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['maunen']; ?></td>
                        <td><?php echo $row['vitri']; ?></td>
                        <td><?php echo $row['new']; ?></td>
    					<td><?php echo $row['name']; ?></td>
    					<td><?php echo $row['introduce']; ?></td>

                        <td>
                            <img style="width: 50px;" src="danh_Muc_SP/danh-sach/img-large/<?php echo $row['image']; ?>">
                        </td>
    					<td><?php echo $row['price']; ?>$</td>
    					<td>
    						<a href="danh_Muc_SP/danh-sach/index.php?page_layout=sua&id=<?php echo $row['id'];?>">Sửa</a>
    					</td>
    					<td>
    						<a onclick="return Del('<?php echo $row['name']?>')" href="danh_Muc_SP/danh-sach/index.php?page_layout=xoa&id=<?php echo $row['id']; ?>">Xóa</a>
    					</td>
    				</tr>
    		<?php	}?>
    		<a class="btn btn-primary" style="float: right;margin-bottom: 17px;width: 120px;" href="danh_Muc_SP/danh-sach/index.php?page_layout=them">Thêm mới</a>
    	</tbody>
    </table>
  </div>
</div>
</div>
<script>
	function Del(name){
		return confirm("Ban co chac chan muon xoa san pham "+ name +" ?");
	}
</script>