<?php
ob_start();

$id_sp = $_GET['id_sp'];
$getInf = "SELECT * FROM danhmuc_vieclam WHERE id_viec='$id_sp'";
$row = mysqli_fetch_array(mysqli_query($connect, $getInf));

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $status = $_POST["status"];
    $trangthai = $_POST["trangthai"];
    $alert = "";

    if (isset($_POST["accept"])) {
        $imgName = $_FILES['img_up']['name'];
        $imgName = time().'_'.$imgName;
        $imgPath = $_FILES['img_up']['tmp_name'];
        // echo $imgPath;\
        if(isset($name) && isset($status) && isset($_FILES['img_up'])){
            if ((empty($_FILES['img_up']['name']))) {
                $sql = "UPDATE danhmuc_vieclam SET tenviec = '$name', mota = '$status', trangthai = '$trangthai' WHERE id_viec = '$id_sp'";
                // echo $sql;
                $query = mysqli_query($connect, $sql);
                $alert = '<center class="alert alert-success mt-3 add-sp">Cập nhật thành công !</center>';
            }else{
                $sql = "SELECT * FROM danhmuc_vieclam WHERE id_viec='$id_sp' LIMIT 1";
                // echo $sql;
                $query = mysqli_query($connect,$sql);
                while($row = mysqli_fetch_array($query)){
                    unlink('../img/career/'.$row['hinhanh']);
                }
                move_uploaded_file($imgPath, '../img/career/' . $imgName);
                $sql = "UPDATE danhmuc_vieclam SET tenviec = '$name', mota = '$status', hinhanh = '$imgName', trangthai = '$trangthai' WHERE id_viec = '$id_sp'";
                // echo $sql;
                $query = mysqli_query($connect,$sql);
                $alert = '<center class="alert alert-success mt-3 add-sp">Cập nhật thành công !</center>';
            }
        }else {
            $alert = '<center class="alert alert-danger mt-3">Mời điền đủ thông tin sản phẩm !</center>';
        }
        
    } else {
        $alert = '<center class="alert alert-danger mt-3">Mời xác nhận trước khi cập nhật !</center>';
    }
}
?>

<h4 class="text-aligncenter mt-3">Cập nhật Việc làm</h4>

<?= $alert ?? "" ?>

<form id="quickForm" novalidate="novalidate" method="post"  enctype="multipart/form-data">
    <div class="card-body">
        <div class="form-group">
            <label>Tên việc làm</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="<?= $row["tenviec"] ?>" required>
        </div>
        <div class="form-group">
            <label>Mô tả</label>
            <input type="text" name="status" class="form-control" id="exampleInputPassword1" value="<?= $row["mota"] ?>" required>
        </div>
        <div class="form-group">
            <label>Chọn trạng thái :</label>
            <select name="trangthai">
                <option value="Kích hoạt">Kích hoạt</option>
                <option value="Ẩn">Ẩn</option>
            </select>
            
        </div>
        <div class="form-group mb-4">
            <label>Ảnh mô tả: </label>
            <input type="file" name="img_up" accept="<?= $row['hinhanh'] ?>" required>
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
        <button type="submit" name="submit" class="btn btn-primary">Cập nhật</button>
    </div>
</form>

<?php
$content = ob_get_clean();
?>