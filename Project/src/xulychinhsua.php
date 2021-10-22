<?php
    $id = $_GET['id'];
    $license_no= $_POST['license_no'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $ctype = $_POST['ctype'];
    $drate = $_POST['drate'];
    $wrate = $_POST['wrate'];
    $status = $_POST['status'];
    include './config.php';

    $sql = "UPDATE cars SET license_no = '$license_no', model = '$model', year = '$year', drate = '$drate' , ctype = '$ctype', 
            wrate = '$wrate', status = '$status' WHERE vehicle_id= '$id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        include './chinhsua.php';
        thongbao("Cập nhật thành công");
    }else{
        header('location: error.php?id=2');
    }



?>