 <?php
    require_once "condb.php";
 ?>
<?php
	$sql = "SELECT * FROM ipad";
	$query = mysqli_query($conn, $sql);
?>
<div class="container-fluid">
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
                        <td><?php echo $row['new']; ?></td>
    					<td><?php echo $row['name']; ?></td>
    					<td><?php echo $row['introduce']; ?></td>

                        <td>
                            <img style="width: 100px;" src="../img-large/<?php echo $row['image']; ?>">
                                
                        </td>
    					<td><?php echo $row['price']; ?></td>
    					<td>
    						<a href="index.php?page_layout=sua&id=<?php echo $row['id'];?>">Sửa</a>
    					</td>
    					<td>
    						<a onclick="return Del('<?php echo $row['name']?>')" href="index.php?page_layout=xoa&id=<?php echo $row['id']; ?>">Xóa</a>
    					</td>
    				</tr>
    		<?php	}?>
    		<a class="btn btn-primary" href="http://localhost/apple/danh_Muc_SP/danh-sach/index.php?page_layout=them">Thêm mới</a>
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