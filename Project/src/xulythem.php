<?php
    $license_no = $_POST['license_no'];
    $model= $_POST['model'];
    $year = $_POST['year'];
    $ctype = $_POST['ctype'];
    $drate = $_POST['drate'];
    $wrate = $_POST['wrate'];
    $status = $_POST['status'];


    include './config.php';
    
    $sql = "INSERT INTO cars(license_no, model, year, ctype, drate, wrate, status) 
                    VALUES ('$license_no','$model','$year','$ctype','$drate','$wrate','$status')";
    $result = mysqli_query($conn,$sql);
    if($result){
        include './them.php';
        thongbao('Thêm thành công');
    }else{
        header('location: error.php?id=3');
    }


?>