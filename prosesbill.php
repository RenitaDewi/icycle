<?php
include("tes.php");
include("functions.php");
session_start();
if ( isset($_SESSION['username']) ) {
    $nama = $_SESSION['username'];
$results = mysql_query("SELECT * FROM daftar WHERE username = '$nama'");
	if ($results) { 
        //output results from database
        $obj = mysql_fetch_object($results);
		$name=$obj->username;
		$email=$obj->email;
		$address=$obj->address;
		$phone=$obj->telp;
		$date=date('Y-m-d');
		$tot=get_order_total();
		$result=mysql_query("insert into listorder values('$date','$name','$tot')");
		if ($result){
		$max=count($_SESSION['products']);
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['products'][$i]['code'];
			$q=$_SESSION['products'][$i]['qty'];
		    $result2=mysql_query("select * from listproduk where idProduk=$pid");
		    if ($result2){ 
		         $row=mysql_fetch_object($result2);
				 $hr=$row->harga;
				 $hrg=$hr*$q;
			     $order=mysql_query("insert into order_detail values ('$name','$pid','$q','$hrg')");
			}
		 }
		 unset($_SESSION["products"]);
		 header('location:bill_berhasil.php'); 
		 }
		 else
		 {
		 echo 'Order Gagal, Silahkan ke <a href="home.php">Home</a>';
		 }
		}
		}
?>