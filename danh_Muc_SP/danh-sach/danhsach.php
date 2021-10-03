<?php
    require_once "danh_Muc_SP/danh-sach/condb.php";
    require_once "xuly.php";
?>
<script type="text/javascript" src="danhsach.js"></script>
<div class="container-fluid" style="height: 100%;">
  <div class="card">
  <div class="card-header" style="background-color: #b5c7ff;">
    <h2 style="color: white">Danh sách sản phẩm</h2>
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
                include "hienthi_danhsach.php";
            ?>
        </tbody>
    </table>
    <div style="text-align: center;">
        <?php
            include "phan_trang.php";
        ?>
    </div>
  </div>
</div>
</div>
