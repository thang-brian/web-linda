
    <?php
    if(isset($_GET['quanly'])){
        $tam = $_GET['quanly'];
    }else{
        $tam = '';
    }
    if($tam=='nhadat'){
        include "pages/Header.php";
        include("public/Nhadat.php");
    }elseif($tam=='tintuc'){
        include "pages/Header.php";
        include("public/news.php");
    }elseif($tam=='tuyendung'){
        include "pages/Header.php";
        include("public/career.php");
    }elseif($tam=='quanly'){
        include "public/Trangquanly.php";
    }elseif($tam=='management'){
        include "pages/management/Header.php";
        include "pages/management/Main.php";   
    }else{
        include "pages/Header.php";
        include("public/TrangChu.php");
    }
    ?>