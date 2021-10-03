 <?php
    require_once "danh_Muc_SP/danh-sach/condb1.php";
 ?>
<?php
	$sql = "SELECT * FROM ipad";
	$query = mysqli_query($conn, $sql);
    // BƯỚC 2: TÌM TỔNG SỐ RECORDS
            $result = mysqli_query($conn, 'select count(id) as total from ipad');
            $row = mysqli_fetch_assoc($result);
            $total_records = $row['total'];
             
            // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            $limit = 5;
             
            // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
            // tổng số trang
            $total_page = ceil($total_records / $limit);
             
            // Giới hạn current_page trong khoảng 1 đến total_page
            if ($current_page > $total_page){
                $current_page = $total_page;
            }
            else if ($current_page < 1){
                $current_page = 1;
            }
             
            // Tìm Start
            $start = ($current_page - 1) * $limit;
             
            // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
            // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
            $result = mysqli_query($conn, "SELECT * FROM ipad LIMIT $start, $limit");
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
                    <?php
                    if ($current_page > 1 && $total_page > 1){
    echo '<a href="index.php?page='.($current_page-1).'">Prev</a> | ';
}
 
// Lặp khoảng giữa
for ($i = 1; $i <= $total_page; $i++){
    // Nếu là trang hiện tại thì hiển thị thẻ span
    // ngược lại hiển thị thẻ a
    if ($i == $current_page){
        echo '<span>'.$i.'</span> | ';
    }
    else{
        echo '<a href="index.php?page='.$i.'">'.$i.'</a> | ';
    }
}
 
// nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
if ($current_page < $total_page && $total_page > 1){
    echo '<a href="index.php?page='.($current_page+1).'">Next</a> | ';
}
                    ?>
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