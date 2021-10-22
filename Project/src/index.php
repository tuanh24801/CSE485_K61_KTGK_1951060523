<?php
    include './menu_footer/menu.php';
?>
    <h1 class="text-center">Quản lý dịch vụ cho thuê xe ô tô</h1>
    <div class="container">
    <a href="them.php" class="btn btn-success mb-3"> Thêm phương tiện <i class="far fa-user-plus"></i></a>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Biển số</th>
                <th scope="col">Model</th>
                <th scope="col">Năm sản xuất</th>
                <th scope="col">Kiểu ôtô</th>
                <th scope="col">Chi tiết</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include './config.php';
                    $sql = "SELECT * FROM cars";
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
                            echo '<td><a href = "chitiet.php?id='.$row['vehicle_id'].'"><i class="fas fa-info-circle"></i></a></td>';
                            echo '<td><a href = "chinhsua.php?id='.$row['vehicle_id'].'"><i class="fal fa-user-edit"></i></a></td>';
                            echo '<td><a href = "xulyxoa.php?id='.$row['vehicle_id'].'"><i class="far fa-user-minus"></i></a></td>';
                            echo '</tr>';
                        }
                    }
                ?>
                <tr>
            </tbody>
        </table>
    </div>
<?php
    include './menu_footer/footer.php';
?>