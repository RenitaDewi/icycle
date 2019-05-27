<?php
require_once ('tes.php');
$username = $_POST['username'];
$name = $_POST['name'];
$email = $_POST['email'];
$Password = $_POST['Password'];
$Cpassword = $_POST['Cpassword'];
$address = $_POST['address'];
$country = $_POST['country'];
$telp = $_POST['telp'];

$cekuser = mysql_query("SELECT * FROM daftar WHERE name = '$username'");
if ( mysql_num_rows($cekuser) <> 0 ) {
     echo "<script type=\"text/javascript\">window.alert('Username sudah terdaftar.');window.location.href = '../icycle/daftar.php';</script>"; 
   exit;
} else {
        $simpan = mysql_query("INSERT INTO daftar VALUES(0,'$username','$name','$email','$Password','$address','$country','$telp','user')");
        if ($simpan) {
		echo "<script type=\"text/javascript\">window.alert('Berhasil Registrasi.');window.location.href = '../icycle/index.html';</script>"; 
   exit;
        } else {
       echo "<script type=\"text/javascript\">window.alert('Gagal Registrasi.');window.location.href = '../icycle/daftar.php';</script>"; 
   exit;
        }
}
?>