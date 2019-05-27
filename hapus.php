<?php
include 'tes.php';
$h=$_GET['name'];
$query = "DELETE FROM pesanan WHERE name='$h'";
$laksanakan=mysql_query($query) or die ("Gagal hapus data".mysql_error());
if ($laksanakan) {
 // Konfirmasi Sukses
 echo "<script type=\"text/javascript\">window.alert('Berhasil Dihapus.');window.location.href = '/dolly/homeadmin.php';</script>"; 
}
else { echo "<script type=\"text/javascript\">window.alert('Gagal Dihapus.');window.location.href = '/dolly/homeadmin.php';</script>"; 
}
?>
?>
