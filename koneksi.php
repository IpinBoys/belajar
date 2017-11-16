<?php
$host = "localhost";
$user = "root";
$password = "20000329";
$dbname = "inventori";

$db = mysqli_connect($host, $user, $password, $dbname);
if ($db) {
	echo "berhasil terhubung";
}
?>