<?php
session_start();
include 'tes.php';

$nama = $_POST['username'];
$password = $_POST['password'];

$cek=mysql_fetch_array(mysql_query("select * from daftar where username='$nama'"));

if ( $password==$cek['password'] && $cek['level']=="user")
	{
	$_SESSION['username'] = $nama;
	echo "<script type=\"text/javascript\">window.alert('Login Berhasil.');window.location.href = '../icycle/produk.php';</script>"; 
	}
else {
if ( $password==$cek['password'] && $cek['level']=="admin")
	{
	$_SESSION['username'] = $nama;
	echo "<script type=\"text/javascript\">window.alert('Login Admin Berhasil.');window.location.href = '../icycle/listproduk.php';</script>"; 
	}
else {
	echo "<script type=\"text/javascript\">window.alert('Username atau Password Tidak Tepat.');window.location.href = '../icycle/signin.phpl?error=4';</script>"; 
	}
}
?>