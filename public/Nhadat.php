<?php

// $contents = 

?>
<body>

    <?php

    if (isset($_GET['component']) && $_GET['component']='filter') {
        include_once "pages/Content_Body/filter.php";
    }else{
        include_once "pages/Content_Body/Slider.php";
        include_once "pages/Content_Body/Special_product.php";
        include_once "pages/Content_Body/List_product.php";
        // include_once "../component/Content_Body/Pagination.php";
    }

    ?>
</body>

