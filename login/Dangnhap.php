<?php

session_start();
include "../connecting/Ketnoi.php";

if (isset($_POST["dangnhap"])) {
    unset($_SESSION['message']);
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $alert = "";
        $getPass = "SELECT password, fullname, role FROM danhsach_kh WHERE username = '$username'";
        $queryPass = mysqli_query($connect, $getPass);
        $rowPass = mysqli_fetch_assoc($queryPass);

        if (mysqli_num_rows($queryPass) > 0) {

            if (password_verify($password, $rowPass["password"])) {

                $_SESSION["hoTen"] = $rowPass["fullname"];
                $_SESSION["quyen"] = $rowPass["role"];
                if($rowPass["role"] == 0){
                    header('location: ../public/TrangQuanTri.php');
                }
                else{
                    header('location: ../index.php');
                }
            } else {
                $alert = '<center class="text-danger">Mật khẩu không chính xác !</center>';
            }
        } else {
            $alert = '<center class="text-danger">Tài khoản không chính xác !</center>';
        }
    } else {
        $alert = '<center class="text-danger">MờI nhập đầy đủ thông tin</center>';
    }
}
if (isset($_POST["dangky"])) {
    unset($_SESSION['message']);
    $alert = "";
    if (isset($_POST["fullname"]) && isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["email"]) && isset($_POST["phonenumber"])) {
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $phonenumber = $_POST["phonenumber"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];
        $loai = $_POST["loai"];
        $getUser = "SELECT username FROM danhsach_kh WHERE username = '$username'";
        if (mysqli_num_rows(mysqli_query($connect, $getUser)) > 0) {
            $alert = '<center class="text-danger">Tài khoản đã tồn tại !</center>';
        }elseif($password === $repassword){
            $pw_hash = password_hash($password, PASSWORD_DEFAULT);
            $update = "INSERT INTO danhsach_kh (username,email,phonenumber,password, role, fullname) 
            VALUES ('$username', '$email', '$phonenumber', '$pw_hash', '$loai', '$fullname')";
            $query = mysqli_query($connect, $update);
            $alert = '<center class="text-success">Đã đăng ký thành công!</center>';
            $_SESSION['message'] = $alert;
            header('location: ../login/Dangnhap.php');

        } else {
            $alert = '<center class="text-danger">Nhập lại mật khẩu chưa trùng!</center>';
        }
    } else {
        $alert = '<center class="text-danger col-sm-12">Vui lòng nhập đủ thông tin !</center>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="../framework/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../framework/selector.css">
    <link rel="stylesheet" href="../framework/slick-main/slick/slick.css">
    <link rel="stylesheet" href="../framework/slick-main/slick/slick-theme.css">
    <link rel="stylesheet" href="../framework/animate-v4/animate.css">
    <!-- <meta name="viewport" content="width=devive-width, inital-scale=1" > -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <style>
    .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
    color: #fff;
    background-color: #28a745;
    }
    a {
    color: #28a745;
    }
    body{
        display: flex;
    }
    .left{
        background-color: #b3e6ba;
        height: 58rem;
        /* width: 50%; */
    }
    .back{
        padding: 10px 50px;
    }
    .back a{
        color: black;
    }
    </style>
</head>

<body>
    <div class="left">
        <div class="back" title="Trở về trang chủ">
            <a href="../index.php"><img src="../img/back.png" style="width:50px"alt=""></a>
        </div>
        <div class="" style="padding:0 100px">
            <center><img src="../img/logo.png?v=1" style="width:250px" alt="logo"></center>
        </div>
    </div>
    <div class="container mt-2 mb-4" style="padding:60px 0">
        <div class="col-sm-8 ml-auto mr-auto ">
          <ul class="nav nav-pills nav-fill mb-1" id="pills-tab" role="tablist">
            <li class="nav-item "> <a class="nav-link active" id="pills-signin-tab" data-toggle="pill" href="#pills-signin" role="tab" aria-controls="pills-signin" aria-selected="true">ĐĂNG NHẬP</a> </li>
            <li class="nav-item"> <a class="nav-link" id="pills-signup-tab" data-toggle="pill" href="#pills-signup" role="tab" aria-controls="pills-signup" aria-selected="false">ĐĂNG KÝ</a> </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-signin" role="tabpanel" aria-labelledby="pills-signin-tab">
              <div class="col-sm-12 border border-success shadow rounded pt-2">
                <!-- <div class="text-center"><img src="https://placehold.it/80x80" class="rounded-circle border p-1"></div> -->
                <form action="" class="login-form" method="post">
                    <div class="form-group">
                        <input name="username" type="text" class="form-control rounded-left" placeholder="Nhập tài khoản" required>
                    </div>
                    <div class="form-group d-flex">
                        <input name="password" type="password" class="form-control rounded-left" placeholder="Nhập mật khẩu" required>
                    </div>
                    <?= $alert ?? '' ?>
                    <div class="form-group d-md-flex">
                        <div class="w-50">
                            <input type="checkbox" checked>
                            <span class="checkmark"></span>
                            <label class="checkbox-wrap checkbox-primary">Ghi nhớ đăng nhập
                            </label>
                        </div>
                        <!-- <div class="w-50 text-md-right">
                            <a href="Dangki.php">Bạn chưa có tài khoản ?</a>
                        </div> -->
                    </div>
                    <?php 
                    if(isset($_SESSION['message'])){
                        echo $_SESSION['message'];
                      }
                    ?>
                    <div class="form-group">
                        <button name="dangnhap" type="submit" class="btn btn-success rounded submit p-3 px-5">Đăng nhập</button>
                    </div>
                </form>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
              <div class="col-sm-12 border border-success shadow rounded pt-2">
                <!-- <div class="text-center"><img src="https://placehold.it/80x80" class="rounded-circle border p-1"></div> -->
                <form class="form-horizontal" role="form" method="post">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input name="fullname" type="text" id="firstName" placeholder="Họ tên quý khách" class="form-control" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input name="email" type="email" id="email" placeholder="Email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input name="phonenumber" type="text" id="birthDate" placeholder="Nhập số điện thoại" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input name="username" type="text" id="email" placeholder="Tên tài Khoản" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input name="password" type="password" id="password" placeholder="Mật khẩu" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input name="repassword" type="password" id="password" placeholder="Nhập lại mật khẩu" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <select name="loai" id="country" class="form-control" required>
                                    <option value="2">Người mua</option>
                                    <option value="1">Người bán</option>
                                </select>
                            </div>
                        <div class="form-group">
                            <?= $alert ?? '' ?>
                            <div class="col-sm-12 col-sm-offset-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" required> Tôi đồng ý với các điều khoản sử dụng <a href="#">Tìm hiểu thêm</a>
                                    </label>
                                </div>
                            </div>
                        </div> <!-- /.form-group -->

                        <div class="form-group">
                            <div class="col-sm-6 col-sm-offset-3">
                                <button name="dangky" type="submit" class="btn btn-success btn-block">Đăng kí</button>
                            </div>
                        </div>
                    </form> <!-- /form -->
              </div>
            </div>
          </div>
        </div>
      
        <!-- Modal -->
        <div class="modal fade" id="forgotPass" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <form method="post" id="forgotpassForm">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Forgot Password</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label>Email <span class="text-danger">*</span></label>
                    <input type="email" name="forgotemail" id="forgotemail" class="form-control" placeholder="Enter your valid email..." required>
                  </div>
                  <div class="form-group">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Sign In</button>
                  <button type="submit" name="forgotPass" class="btn btn-primary"><i class="fa fa-envelope"></i> Send Request</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <?php
    include '../connecting/script.php';
    ?>
</body>

</html>