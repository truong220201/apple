<?php
    		$i = 1;
    			while ($row = mysqli_fetch_assoc($query)) {?>
    				<tr>
                        <td><?php echo $i++; ?></td>
    					<td><?php echo $row['id']; ?></td>
    					<td><?php echo $row['name']; ?></td>

                        <td>
                            <img style="width: 50px;" src="ql_Khach_Hang/khachhang/<?php echo $row['image']; ?>">
                        </td>
    					<td><?php echo $row['diemtichluy']; ?> điểm</td>
    					<td>
    						<a href="ql_Khach_Hang/index.php?page_layout=sua&id=<?php echo $row['id'];?>">Sửa</a>
    					</td>
    					<td>
    						<a onclick="return Del('<?php echo $row['name']?>')" href="ql_Khach_Hang/index.php?page_layout=xoa&id=<?php echo $row['id']; ?>">Xóa</a>
    					</td>
    				</tr>
    		<?php	}?>
    		<a class="btn btn-primary" style="float: right;margin-bottom: 17px;width: 120px;" href="ql_Khach_Hang/index.php?page_layout=them">Thêm mới</a>