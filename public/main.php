
    <?php
    if(isset($_GET['quanly'])){
        $tam = $_GET['quanly'];
    }else{
        $tam = '';
    }
    if($tam=='nhadat'){
        include("public/Nhadat.php");
    }elseif($tam=='giohang'){
        include("main/giohang.php");
    }else{
        include("public/TrangChu.php");
    }
    ?>