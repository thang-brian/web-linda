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
                $_SESSION['message'] = $alert;
                echo $_SESSION['message'];
                header('location: ../login/Dangnhap.php');
            }
        } else {
            $alert = '<center class="text-danger">Tài khoản không chính xác !</center>';
            $_SESSION['message'] = $alert;
            echo $_SESSION['message'];
            header('location: ../login/Dangnhap.php');
        }
    } else {
        $alert = '<center class="text-danger">MờI nhập đầy đủ thông tin</center>';
        $_SESSION['message'] = $alert;
        header('location: ../login/Dangnhap.php');
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
            $_SESSION['message'] = $alert;
            header('location: ../login/Dangnhap.php');
        }
    } else {
        $alert = '<center class="text-danger col-sm-12">Vui lòng nhập đủ thông tin !</center>';
        $_SESSION['message'] = $alert;
        header('location: ../login/Dangnhap.php');
    }
}
?>