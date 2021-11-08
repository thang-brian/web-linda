<?php

include $_SERVER["DOCUMENT_ROOT"] . "/PHP/Linda365/connecting/Ketnoi.php";

$id_sp = $_GET["id_sp"];

$sql = "DELETE FROM danhmuc_vieclam WHERE id_viec='$id_sp'";
echo $sql;
$query = mysqli_query($connect, $sql);
$sql = "SELECT * FROM danhmuc_vieclam WHERE id_viec='$id_sp' LIMIT 1";
$query = mysqli_query($connect,$sql);
while($row = mysqli_fetch_array($query)){
    unlink('../img/career/'.$row['hinhanh']);
}

header('location: ../../public/TrangQuanTri.php?Admin=career_show');

?>

