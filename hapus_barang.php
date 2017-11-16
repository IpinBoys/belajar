<?php
$host = "localhost";
$user = "root";
$password = "20000329";
$dbname = "AppInventori";

$koneksi = mysqli_connect($host, $user, $pass, $dbname);

if ($koneksi) {
	echo "sukses";
}else{
	echo "gagal";
}
?>