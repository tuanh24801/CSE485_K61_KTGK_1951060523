<?php
    include './menu_footer/menu.php';
?>  
    <main class="container">

        <h2 class="mb-4 text-center">Thêm thông tin phương tiện</h2>
        <?php
            function thongbao($tb){
                echo '<p class="mb-4 text-center">'.$tb.'</p>'; 
            }
        ?>
        <form action="xulythem.php" method="post">
            <div class="form-group row">
                <label for="license_no" class="col-sm-2 col-form-label">Biển số xe</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control mb-2" id="license_no" name="license_no">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="model" class="col-sm-2 col-form-label">Model</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control mb-2" id="model" name="model">
                </div>
            </div>
            <div class="form-group row">
                <label for="year" class="col-sm-2 col-form-label">Năm sản xuất</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control mb-2" id="year" name="year">
                </div>
            </div>
            <div class="form-group row">
                <label for="ctype" class="col-sm-2 col-form-label">Kiểu ôtô</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control mb-2" id="ctype" name="ctype">
                </div>
            </div>
            <div class="form-group row">
                <label for="drate" class="col-sm-2 col-form-label">Giá thuê ngày</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control mb-2" id="drate" name="drate">
                </div>
            </div>
            <div class="form-group row">
                <label for="wrate" class="col-sm-2 col-form-label">Giá thuê tuần</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control mb-2" id="wrate" name="wrate">
                </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-sm-2 col-form-label">Trạng thái</label>
                <div class="col-sm-4">
                    <select name="status" id="status">
                        <option value="1">Đã cho thuê</option>;
                        <option value="0">Còn xe</option>;
                    </select>
   
                </div>
            </div>

    
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Thêm thông tin</button>
                </div>
            </div>
        </form>
            <a href="index.php" class="btn btn-success mb-3"><i class="fad fa-chevron-square-left"></i> Quay lại</a>
        
    </main>

<?php
    include './menu_footer/footer.php';
?>