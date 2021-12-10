<?php 
include $_SERVER["DOCUMENT_ROOT"] . "/PHP/Linda365/connecting/Ketnoi.php";
$sql = "SELECT * FROM danhmuc_vieclam WHERE trangthai = 'Kích hoạt' ORDER BY id_viec DESC LIMIT 5";
$query = mysqli_query($connect, $sql);
?>
<div class="container">
    <div class="news mt-5">
        <h5>THÔNG TIN TUYỂN DỤNG</h5>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                <div class="container p-2">
                    <div class="row">
                        <div class="col-8">
                            <div class="p-3">
                                <p class="h5"><?= $row["tenviec"] ?></p>
                                <p>
                                    <?= $row["mota"] ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-4 p-3">
                            <img src="./img/career/<?= $row["hinhanh"] ?>" class="rounded" width="220px" alt="ảnh <?= $row["tenviec"] ?>">
                        </div>
                    </div>
                </div>
                <?php }?>
                
            </div>
            <!-- <div class="col col-lg-2"><img src="img/banner.png" alt="banner" width="300px"></div> -->
        </div>  
    </div>
    
</div>