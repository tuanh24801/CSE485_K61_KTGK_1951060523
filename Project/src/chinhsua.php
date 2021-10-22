<?php
    include './menu_footer/menu.php';
?>  
    <main class="container">

        <h2 class="mb-4 text-center">Chỉnh sửa thông tin phương tiện</h2>
        <form action="xulychinhsua.php?id=<?php echo $_GET['id'] ?>" method="post">
        <h1 class="mb-4 text-center"></h1>
            <?php
                function thongbao($tb){
                    echo '<p class="mb-4 text-center">'.$tb.'</p>';   
                }
                $id = $_GET['id'];
                include './config.php';
                $sql = "SELECT * FROM cars WHERE vehicle_id = '$id'";
                $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo '<div class="form-group row">';
                            echo '<label for="vehicle_id" class="col-sm-2 col-form-label">Mã phương tiện</label>';
                            echo '<div class="col-sm-4">';
                            echo '<input type="text" class="form-control mb-2" id="vehicle_id" name="vehicle_id" disabled value = "'.$id.'">';
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="form-group row">';
                            echo '<label for="license_no" class="col-sm-2 col-form-label">Biển số xe</label>';
                            echo '<div class="col-sm-4">';
                            echo '<input type="text" class="form-control mb-2" id="license_no" name="license_no" value = "'.$row['license_no'].'">';
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="form-group row">';
                            echo '<label for="model" class="col-sm-2 col-form-label">Model</label>';
                            echo '<div class="col-sm-4">';
                            echo '<input type="text" class="form-control mb-2" id="model" name="model" value = "'.$row['model'].'">';
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="form-group row">';
                            echo '<label for="year" class="col-sm-2 col-form-label">Năm sản xuất</label>';
                            echo '<div class="col-sm-4">';
                            echo '<input type="text" class="form-control mb-2" id="year" name="year" value = "'.$row['year'].'">';
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="form-group row">';
                            echo '<label for="ctype" class="col-sm-2 col-form-label">Kiểu ôtô</label>';
                            echo '<div class="col-sm-4">';
                            echo '<input type="double" class="form-control mb-2" id="ctype" name="ctype" value = "'.$row['ctype'].'">';
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="form-group row">';
                            echo '<label for="drate" class="col-sm-2 col-form-label">Giá thuê ngày</label>';
                            echo '<div class="col-sm-4">';
                            echo '<input type="double" class="form-control mb-2" id="drate" name="drate" value = "'.$row['drate'].'">';
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="form-group row">';
                            echo '<label for="wrate" class="col-sm-2 col-form-label">Giá thuê tuần</label>';
                            echo '<div class="col-sm-4">';
                            echo '<input type="double" class="form-control mb-2" id="wrate" name="wrate" value = "'.$row['wrate'].'">';
                            echo '</div>';
                            echo '</div>';
                            if($row['status'] == '1'){
                                $trangthai = "Đã cho thuê";
                            }else{
                                $trangthai = "Còn xe";
                            }
                            echo '<div class="form-group row">';
                            echo '<label for="status" class="col-sm-2 col-form-label">status</label>';
                            echo '<div class="col-sm-4">';
                            echo    '<select name="status" id="status">';
                            echo        '<option value="'.$row['status'].'">'.$trangthai.'</option>';
                                        if($row['status'] == '1'){
                                            echo '<option value="0">Còn xe</option>';
                                        }else{
                                            echo '<option value="1">Đã cho thuê</option>';
                                        }
                            echo    '</select>';
                            // echo '<input type="text" class="form-control mb-2" id="status" name="status" value = "'.$trangthai .'">';
                            echo '</div>';
                            echo '</div>';
                        }
                    }
                    
            ?>

            <br>
            <div class="form-group row">
                <label for="btn" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Lưu lại</button>
                </div>
            </div>
            <a href="index.php" class="btn btn-success mb-3"><i class="fad fa-chevron-square-left"></i> Quay lại</a>
        </form>
    </main>

<?php
    include './menu_footer/footer.php';
?>