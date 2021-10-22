<?php
    $conn = mysqli_connect('localhost', 'root', '', 'db_cars' );
    if(!$conn){
        header('location: error.php?id=1');
    }
?>