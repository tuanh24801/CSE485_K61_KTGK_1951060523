<?php
    include './menu_footer/menu.php';
?>
<div class="spinner-border text-danger" role="status">
  <span class="visually-hidden">Loading...</span>
</div>

<?php
    $id = $_GET['id'];
    if($id == 1){
        echo '<h3 class="text-center">Lỗi kết nối cơ sở dữ liệu <i class="fal fa-sad-tear"></i></h3>';
    }
    elseif($id == 2){ 
        echo '<h3 class="text-center">Lỗi cập nhật <i class="fal fa-sad-tear"></i></h3>';
    }
    elseif($id == 3){ 
        echo '<h3 class="text-center">Lỗi thêm bản ghi <i class="fal fa-sad-tear"></i></h3>';
    }
    elseif($id == 4){ 
        echo '<h3 class="text-center">Lỗi xóa bản ghi <i class="fal fa-sad-tear"></i></h3>';
    }
?>
    <p class="text-center mt-4"><a href="index.php" class="btn btn-success mb-3 "><i class="fad fa-chevron-square-left"></i> Quay lại</a></p>
<?php
    include './menu_footer/footer.php';
?>