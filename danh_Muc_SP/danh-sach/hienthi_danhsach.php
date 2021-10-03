<?php
    		$i = 1;
    			while ($row = mysqli_fetch_assoc($query)) {
                    while ($row = mysqli_fetch_assoc($result)){?>
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
    		<?php	}} ?>
    		<a class="btn btn-primary" style="float: right;margin-bottom: 17px;width: 120px;" href="danh_Muc_SP/danh-sach/index.php?page_layout=them">Thêm mới</a>