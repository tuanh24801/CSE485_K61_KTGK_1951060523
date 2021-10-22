<?php
    $id = $_GET['id'];
    include './config.php';
    $sql = "DELETE FROM cars WHERE vehicle_id = '$id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location: index.php');
    }else{
        header('location: error.php?id=4');
    }

?>