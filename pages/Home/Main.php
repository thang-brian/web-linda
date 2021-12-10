<?php 
include $_SERVER["DOCUMENT_ROOT"] . "/PHP/Linda365/connecting/Ketnoi.php";
$sql1 = "SELECT * FROM danhsach_sp WHERE loai = 'Dự án' ORDER BY ID DESC LIMIT 6";
$query1 = mysqli_query($connect, $sql1);
$sql2 = "SELECT * FROM danhsach_sp WHERE loai = 'Mua' ORDER BY ID DESC LIMIT 6";
$query2 = mysqli_query($connect, $sql2);
$sql3 = "SELECT * FROM danhsach_sp WHERE loai = 'Thuê' ORDER BY ID DESC LIMIT 6";
$query3 = mysqli_query($connect, $sql3);
?>
<div class="container">
    <div class="text_home">
        <h3 class="text-center">CHÚNG TÔI LÀ AI ?</h3>
        <p class="text-center">
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
        </p>
    </div>
    <div>
        <b class="border-bottom border-success"></b>
    </div>
    <div class="news mt-5">
        <h5>DỰ ÁN BẤT ĐỘNG SẢN</h5>
    </div>
    <div class="tenDABDS">
        <?php
        while ($row1 = mysqli_fetch_array($query1)) {
        ?>
        <div class="img-DABDS">
            <img src="img/<?= $row1["Image"] ?>" width="310px" alt="">
            <div>
                <p class="tenduan"><?= $row1["Name"] ?></p>
            </div>
        </div>
        <?php } ?>
    </div>
    <div class="news mt-5">
        <h5>MUA NHÀ GIÁ TỐT</h5>
    </div>
    <div class="tenDABDS">
        <?php
        while ($row2 = mysqli_fetch_array($query2)) {
        ?>
        <div class="img-DABDS2">
            <img src="img/<?= $row2["Image"] ?>" width="310px" alt="">
            <div class="card__content"><?= $row2["Name"] ?></div>
            <div>
                <p class="giaBDS text-center"><?= $row2["Price"] ?>VND</p>
            </div>
            <div class="motaBDS">
                <div class="item_motaBDS">
                    <i class="fas fa-expand-wide "></i>
                    <p>Kích Thước</p>
                    <p><?= $row2["size"] ?></p>
                </div>
                <div class="item_motaBDS">
                    <i class="fas fa-bed"></i>
                    <p>Phòng Ngủ</p>
                    <p><?= $row2["PhNgu"] ?></p>
                </div>
                <div class="item_motaBDS">
                    <i class="fas fa-shower"></i>
                    <p>Phòng Tắm</p>
                    <p><?= $row2["PhTam"] ?></p>
                </div>
                <div class="item_motaBDS">
                    <i class="fas fa-hat-chef "></i>
                    <p>Phòng Bếp</p>
                    <p><?= $row2["PhBep"] ?></p>
                </div>
                <div class="item_motaBDS">
                    <i class="fas fa-warehouse"></i>
                    <p>Kho</p>
                    <p><?= $row2["Kho"] ?></p>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- <nav aria-label="Page navigation example" >
        <ul class="pagination">
            <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
            </li>
        </ul>
        </nav> -->
        <div class="container mt-5">
            <div class="chaomung">
            <div class="text-center text-welcome">
                <h2>CHÀO MỪNG BẠN ĐẾN </h2>
                <h2>THẾ GIỚI BẤT ĐỘNG SẢN LINDA</h2>
                <i>(Hãy tham gia với chúng tôi với 3 bước đơn giản)</i>
                <div class="quytrinh container">
                    <div class="col-sm-4">
                        <div class="txt-quytrinh text-left">
                            <i class="fas fa-user-alt"></i>
                            <p class="text-green">Đăng Ký</p>
                            <p>Nhấn đăng ký</p>
                            <p>để cùng tham giá với chúng tôi</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="txt-quytrinh text-left">
                            <i class="far fa-clipboard"></i>
                            <p class="text-green">Điền Thông Tin</p>
                            <p>Hãy cho chúng tôi biết bạn là ai</p>
                            <p>với vài dùng thông tin đơn giản</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="txt-quytrinh text-left">
                            <i class="fas fa-check"></i>
                            <p class="text-green">Hoàn Thành</p>
                            <p>Hoàn tất bằng việc đăng nhập nào</p>
                        </div>
                    </div>
                </div>
                <a href="login/Dangnhap.php"class="btn btn-success">ĐẾN NƠI ĐĂNG KÝ</a>
            </div>
            </div>
        </div>
        
    </div>
    <div class="container news mt-5">
        <h5>THUÊ NHÀ GIÁ TỐT</h5>
        <?php
        while ($row3 = mysqli_fetch_array($query3)) {
        ?>
        <div class="row">
            <div class="col">
                <div class="img-DABDS3">
                    <img src="img/<?= $row3["Image"] ?>" width="350px" alt="ảnh mô tả">
                    <div class="card__content2"><?= $row3["Price"] ?> VND</div>
                    <div>
                        <p class="thueBDS text-center">THUÊ</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="ndBDS">
                    <h3><?= $row3["Name"] ?></h3>
                    <p>
                        <?= $row3["mota"] ?> 
                    </p>
                    <div class="motaBDS">
                        <div class="item_motaBDS">
                            <i class="fas fa-expand-wide "></i>
                            <p>Kích Thước</p>
                            <p><?= $row3["size"] ?></p>
                        </div>
                        <div class="item_motaBDS">
                            <i class="fas fa-bed"></i>
                            <p>Phòng Ngủ</p>
                            <p><?= $row3["PhNgu"] ?></p>
                        </div>
                        <div class="item_motaBDS">
                            <i class="fas fa-shower"></i>
                            <p>Phòng Tắm</p>
                            <p><?= $row3["PhTam"] ?></p>
                        </div>
                        <div class="item_motaBDS">
                            <i class="fas fa-hat-chef "></i>
                            <p>Phòng Bếp</p>
                            <p><?= $row3["PhBep"] ?></p>
                        </div>
                        <div class="item_motaBDS">
                            <i class="fas fa-warehouse"></i>
                            <p>Kho</p>
                            <p><?= $row3["Kho"] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    </div>
</div>