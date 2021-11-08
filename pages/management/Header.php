<?php
    session_start();
    
?>
<header>
<div class="container header1">
    <div class="row">
        <nav class="row">
            <div class="col-md-auto mgl-25">
                <a href="index.php?quanly=tintuc">Tin tức</a>
            </div>
            <div class="col-md-auto mgl-25">
                <a class="options" href="#">
                    <?= $_SESSION["hoTen"] ?> ▼
                </a>
                <div class="option-logout-toggle">
                    <a  href="index.php">Trở về trang chủ</a>
                    <a href="login/Dangxuat.php">Đăng xuất</a>
                    <a  href="login/Doimatkhau.php">Đổi mật khẩu</a>
                </div>
            </div>
            <div class="col-md-auto">
                <a href="#">Việt Nam</a>
            </div>
        </nav>

    </div>

</div>
</header>
