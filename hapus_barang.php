<?php
include "koneksi.php";

$id_barang = $_GET['id'];
$sql = "DELETE from barang WHERE id_barang='$id_barang'";

$barang = mysqli_query($db,$sql);

	if ($barang) {
		echo "Barang Berhasil Terhapus";
	}else{
		echo "Barang Gagal di Hapus<br>";
		echo mysqli_error($db);
	}
?>