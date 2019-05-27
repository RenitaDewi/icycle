<?php
include('tes.php');
$id=$_POST['idProduk'];
$nama=$_POST['nama'];
$kategori=$_POST['kategori'];
$stok=$_POST['stock'];;
$harga=$_POST['harga'];
$image=$_POST['image_name'];
$result2=mysql_query("update listproduk SET nama='$nama', kategori='$kategori', stock='$stok', harga='$harga',   image_name='$image' WHERE idProduk = '$id'");
if ($result2) {
	header('location:listproduk.php');
} else {
header('location:listproduk.php');
}
?>