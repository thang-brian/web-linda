
    <?php
    if(isset($_GET['quanly'])){
        $tam = $_GET['quanly'];
    }else{
        $tam = '';
    }
    if($tam=='dangtin'){
        include "pages/management/dangtin.php";
    }elseif($tam=='tintuc'){
        include "pages/Header.php";
        include("public/news.php");
    }else{
        include("pages/management/dangtin.php");
    }
    ?>