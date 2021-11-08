<?php
ob_start();
?>

<?php
if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $mota = $_POST["mota"];
    $trangthai = $_POST["trangthai"];
    $alert = "";

    if (isset($_POST["accept"])) {

        if (isset($name) && isset($mota) && isset($_FILES["img_upload"])) {
            $img = $_FILES['img_upload']['name'];
            $img = time().'_'.$img;
            // echo $img;
            $img_tmp = $_FILES['img_upload']['tmp_name'];
            // echo $img_tmp;
            $move = move_uploaded_file($img_tmp, '../img/career/' . $img);
            if($move){
                $alert = '<center class="alert alert-success mt-3 add-sp">Thêm thành công !</center>';
            }else{
                $alert = '<center class="alert alert-danger mt-3 add-sp">Thất bại !</center>';
            }
            // echo $s;
            $sql = "INSERT INTO danhmuc_vieclam (tenviec, hinhanh, mota, trangthai) VALUES ('$name', '$img', '$mota', '$trangthai')";
            // echo $sql;
            $query = mysqli_query($connect, $sql);
            if($query){
                $alert = '<center class="alert alert-success mt-3 add-sp">Thêm thành công !</center>';
            }else{
                $alert = '<center class="alert alert-danger mt-3 add-sp">Thất bại !</center>';
            }
        } else {
            $alert = '<center class="alert alert-danger mt-3">Mời điền đủ thông tin !</center>';
        }
    } else {
        $alert = '<center class="alert alert-danger mt-3">Mời xác nhận trước khi thêm mới !</center>';
    }
}
?>

<h4 class="text-aligncenter mt-3">Thêm việc làm mới</h4>

<?= $alert ?? "" ?>

<form id="quickForm" method="post" enctype="multipart/form-data">
    <div class="card-body">
        <div class="form-group">
            <label>Tên việc làm</label>
            <input type="text" name="name" class="form-control" placeholder="Nhập tên việc" required>
        </div>
        <div class="form-group">
            <label>Mô tả</label>
            <input type="text" name="mota" class="form-control" placeholder="Nhập mô tả" required>
        </div>
        <div class="form-group">
            <label>Chọn trạng thái :</label>
            <select name="trangthai" id="">
                <option value="Kích hoạt" class="active">Kích hoạt</option>
                <option value="Ẩn">Ẩn</option>
            </select>
        </div>
        <div class="form-group mb-4">
            <label>Ảnh mô tả: </label>
            <input type="file" name="img_upload" required>
        </div>
        <div class="form-group mb-0">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="accept" class="custom-control-input" id="exampleCheck1" required>
                <label class="custom-control-label" for="exampleCheck1">Tôi xác nhận chính xác thông tin sản phẩm <a href="#">terms of service</a>.</label>
            </div>
        </div>
    </div>

    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" name="submit" class="btn btn-primary">Thêm việc làm</button>
    </div>
</form>

<?php
$content = ob_get_clean();
?>