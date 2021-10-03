 <?php
    require_once "condb.php";
	$sql = "SELECT * FROM khachhang";
	$query = mysqli_query($conn, $sql);
?>
<div class="container-fluid" style="height: 650px;">
  <div class="card"style="background-image: url('bgkh.jpg');height: 100%;">
  <div class="card-header" style="background-color: rgb(219 111 111 / 3%);">
    <h2>Danh sách khách hàng</h2>
  </div>
  <div class="card-body">
    <table class="table">
    	<thead class="thead-dark">
    		<tr>
                <th>STT</th>
    			<th>ID</th>
    			<th>Name</th>
                <th>Image</th>
                <th>Điểm tích lũy</th>
    			<th>Sửa</th>
    			<th>Xóa</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php
                include "danhsachkh.php";
            ?>
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