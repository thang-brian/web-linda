<?php

include $_SERVER["DOCUMENT_ROOT"] . "/PHP/Linda365/connecting/Ketnoi.php";

$id_sp = $_GET["id_sp"];

$sql = "DELETE FROM danhsach_sp WHERE ID='$id_sp'";
// echo $sql;
// xoa hinh anh cu
$sql = "SELECT * FROM danhsach_sp WHERE id = '$id_sp' LIMIT 1";
$query = mysqli_query($connect,$sql);
while($row = mysqli_fetch_array($query)){
    unlink('./upload/'.$row['Image']);
}
$query = mysqli_query($connect, $sql);

header('location: http://localhost/PHP/Linda365/public/TrangQuanTri.php?Admin=product_show');

?>

