<?php
    include './menu_footer/menu.php';
?>

<?php
    include './config.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM cars WHERE vehicle_id = '$id'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result)){
            echo '<h3 class="text-center mt-3">Xóa xe biển số '.$row['license_no'].'</h3>';
            echo '<p class="text-center mt-4"><a href="xoa.php?id='.$row['vehicle_id'].'" class="btn btn-danger mb-3 "><i class="fad fa-chevron-square-left"></i> Xóa</a></p>';
        }
    }

?>
        <p class="text-center mt-4"><a href="index.php" class="btn btn-success mb-3 "><i class="fad fa-chevron-square-left"></i> Quay lại</a></p>
<?php
    include './menu_footer/footer.php';
?>