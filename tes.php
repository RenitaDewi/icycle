<?php
$username = "root";
$password = "";
$hostname = "localhost";
$name_db = "icycle";


//connect to database


$tes = mysql_connect($hostname, $username, $password);
$database = mysql_select_db($name_db);

if (!$tes){
echo "Koneksi gagal . .";
} else {
if(!$database){
echo "Database tidak ditemukan . .";
}
}
?>
