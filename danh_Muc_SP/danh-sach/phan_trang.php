<?php
                    if ($current_page > 1 && $total_page > 1){
                        echo '<a href="quan_tri.php?page='.($current_page-1).'">Prev</a> | ';
                        echo "<script>hanghoa();</script>";
                    }
                     
                    // Lặp khoảng giữa
                    for ($i = 1; $i <= $total_page; $i++){
                        // Nếu là trang hiện tại thì hiển thị thẻ span
                        // ngược lại hiển thị thẻ a
                        if ($i == $current_page){
                            echo '<span>'.$i.'</span> | ';
                            echo "<script>hanghoa();</script>";
                        }
                        else{
                            echo '<a href="quan_tri.php?page='.$i.'">'.$i.'</a> | ';
                            echo "<script>hanghoa();</script>";
                        }
                    }
                     
                    // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                    if ($current_page < $total_page && $total_page > 1){
                        echo '<a href="quan_tri.php?page='.($current_page+1).'">Next</a> | ';
                        echo "<script>hanghoa();</script>";
                    }
                ?>