<?php
    include './menu_footer/menu.php';
?>
    <h1 class="text-center">Chi tiết phương tiện</h1>
    <div class="container">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Biển số</th>
                <th scope="col">Model</th>
                <th scope="col">Năm sản xuất</th>
                <th scope="col">Kiểu ôtô</th>
                <th scope="col">Giá thuê theo ngày</th>
                <th scope="col">Giá thuê theo tuần</th>
                <th scope="col">Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include './config.php';
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM cars WHERE vehicle_id = '$id'";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) > 0)
                    {
                        while($row = mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo '<th scope="row">'.$row['vehicle_id'].'</th>';
                            echo '<td>'.$row['license_no'].'</td>';
                            echo '<td>'.$row['model'].'</td>';
                            echo '<td>'.$row['year'].'</td>';
                            echo '<td>'.$row['ctype'].'</td>';
                            echo '<td>'.$row['drate'].'</td>';
                            echo '<td>'.$row['wrate'].'</td>';
                            if($row['status'] == '1'){
                                $trangthai = "Đã cho thuê";
                            }else{
                                $trangthai = "Còn xe";
                            }
                            echo '<td>'.$trangthai.'</td>';
                            echo '</tr>';
                        }
                    }
                ?>
                <tr>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-success mb-3"><i class="fad fa-chevron-square-left"></i> Quay lại</a>
    </div>
<?php
    include './menu_footer/footer.php';
?>