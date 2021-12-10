<?php
    // session_start();
    
?>

<header>
    <!-- header-1 -->
    <div class="container header1">
        <div class="row">
            <nav class="row">
                <?php

                if (isset($_SESSION["quyen"]) && $_SESSION["quyen"] != 0) {
                    
                ?>
                    <div class="col-md-auto mgl-25">
                        <a class="options" href="#">
                            Xin chào, <?= $_SESSION["hoTen"] ?> ▼
                        </a>
                        <div class="option-logout-toggle">
                            <a href="index.php?quanly=quanly">Quản lý</a>
                            <a href="login/Dangxuat.php">Đăng xuất</a>
                            <a href="login/Doimatkhau.php">Đổi mật khẩu</a>
                        </div>
                    </div>
                <?php
                }else if(isset($_SESSION["quyen"]) && $_SESSION["quyen"] == 0){
                ?>
                <div class="col-md-auto mgl-25">
                    <a href="public/TrangQuanTri.php">Đi đến trang Quản lý (Admin)</a>
                </div>
                <?php
                }else {
                ?>
                    <!-- <div class="col-md-auto mgl-25">
                        <a class="w-100" href="../login/Dangki.php">Đăng ký</a>
                    </div> -->
                    <div class="col-md-auto mgl-25">
                        <a href="login/Dangnhap.php">Đăng nhập</a>
                    </div>
                <?php
                }
                ?>
                <div class="col-md-auto mgl-25">
                    <a href="index.php?quanly=tintuc">Tin tức</a>
                </div>
                <div class="col-md-auto mgl-25">
                    <a href="index.php?quanly=tuyendung">Tuyển dụng</a>
                </div>
                <div class="col-md-auto">
                    <a href="#">Việt Nam</a>
                </div>
            </nav>

        </div>

    </div>

    <!-- header-2 -->
    <div class="container header2">
        <div class="row">
            <div class="col-md-4">
                <div class="logo">
                    <a href="index.php"><img class="logo img-logo fit_img" src="img/logo.png?v=1" alt="logo"></a>
                </div>
            </div>
            <div class="col-md-6">

                <form class="input-group mb-4 border rounded-pill p-1 in-search" action="../Linda365/index.php?quanly=nhadat&component=filter" method="post">
                    <input name="search" type="search" placeholder="searching..." class="form-control bg-none border-0">
                    <div class="input-group-append border-0">
                        <button name="submit" id="button-addon3" type="submit" class="btn btn-link text-success"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- header-3 -->
    
    <div class="container header3">
    <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="index.php"><i class="fas fa-home"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
        <a class="nav-item nav-link active" href="index.php?quanly=nhadat">Nhà đất Việt Nam</a>
        <a class="nav-item nav-link"  href="#">Nhà đất Mỹ</a>
        <a class="nav-item nav-link"  href="#">Nhà đất Úc</a>
        <a class="nav-item nav-link"  href="#">Nhà đất Canada</a>
        <a class="nav-item nav-link" href="#">Nhà đất Pháp</a>
        <a class="nav-item nav-link" href="#">Nhà đất Nhật Bản</a>
        <a class="nav-item nav-link" href="#">Nhà đất Hàn Quốc</a>
        <a class="nav-item nav-link" href="#">Nhà đất Trung Quốc</a>
    </div>
  </div>
</nav>
       
    </div>

</header>