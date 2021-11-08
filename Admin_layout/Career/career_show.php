<?php
ob_start();

if (isset($_GET['page_product'])) {
    $page_prd = $_GET['page_product'];
} else {
    $page_prd = 1;
}

$pagePerRow = 5;

$pageRow = $page_prd * $pagePerRow - $pagePerRow;

$sql = "SELECT * FROM danhmuc_vieclam ORDER BY id_viec DESC LIMIT $pageRow, $pagePerRow";
$query = mysqli_query($connect, $sql);

$totalRow = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM danhmuc_vieclam"));
$totalPage = ceil($totalRow / $pagePerRow);
$listPage = "";
$nextPage = "";
$prevPage = "";
$x = 1;
$y = 2;


for ($i = 1; $i <= $totalPage; $i++) {

    if (isset($page_prd)) {
        $x = $page_prd - 1;
        $y = $page_prd + 1;
    }

    $prevPage = '
            <li class="page-item">
            <a class="page-link" 
            href="../public/TrangQuanTri.php?Admin=career_show&page_career=' . $x . '" 
            aria-label="Previous">
            <span aria-hidden="true"><i class="fas fa-angle-left"></i></span>
            </a>
            </li>';

    $nextPage = '
            <li class="page-item">
            <a class="page-link" 
            href="../public/TrangQuanTri.php?Admin=career_show&page_career=' . $y . '" 
            aria-label="Next">
            <span aria-hidden="true"><i class="fas fa-angle-right"></i></span>
            </a>
            </li>';

    // <i class="fas fa-angle-double-left"></i>
    // <i class="fas fa-angle-double-right"></i>
    if ($page_prd == $i) {

        $listPage .= '<li class="page-item active"><a class="page-link" href="../public/TrangQuanTri.php?Admin=career_show&career=' . $i . '">' . $i . '</a></li>';
    } else {

        $listPage .= '<li class="page-item"><a class="page-link" href="../public/TrangQuanTri.php?Admin=career_show&page_career=' . $i . '">' . $i . '</a></li>';
    }
}



?>

<h4 class="text-aligncenter mt-3">Danh sách việc làm</h4>

<table class="table table-striped mt-4">

    <thead>
        <tr>
            <th style="width: 70px;">ID</th>
            <th>Tên việc làm</th>
            <th>Mô tả</th>
            <th>Hình ảnh</th>
            <th>Trạng thái</th>
            <th>Chỉnh sửa</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?= $row['id_viec'] ?></td>
                <td><?= $row['tenviec'] ?></td>
                <td><?= $row['mota'] ?></td>
                <td><img class="admin_img_mota" src="../img/career/<?= $row['hinhanh'] ?>" alt="product"></td>
                <td><?= $row['trangthai'] ?></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="../public/TrangQuanTri.php?Admin=career_fix&id_sp=<?= $row["id_viec"] ?>">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a onclick="return product_del()" class="btn btn-danger btn-sm" href="../Admin_layout/Career/career_del.php?id_sp=<?= $row["id_viec"] ?>">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
        <?php
            // break;
        }
        ?>

    </tbody>

</table>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php
                if (isset($_GET['page_product']) && $_GET['page_product'] > 1) {
                    echo $prevPage;
                }
                
                ?>
                <?= $listPage ?>
                <?php
                if (isset($_GET['page_product']) && $_GET['page_product'] < $totalPage) {
                    echo $nextPage;
                }
                if(!isset($_GET['page_product'])){
                    echo $nextPage;
                }
                ?>
                </li>
            </ul>
        </nav>
    </div>
    <div class="col-md-4"></div>
</div>

<?php
$content = ob_get_clean();
?>