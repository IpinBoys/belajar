<?php
include "koneksi.php";

$id_barang = $_GET['id'];

if (isset($_POST['kirim'])) {
	$nama = $_POST['nama'];
	$jumlah = $_POST['jumlah'];
	$jenis = $_POST['jenis'];
	$keadaan = $_POST['keadaan'];

	$sql = "UPDATE barang set nama_barang='$nama',jumlah_barang='$jumlah',id_jenis='$jenis',keadaan_barang='$keadaan' WHERE id_barang='$id_barang' ";

	$barang = mysqli_query($db,$sql);

	if ($barang) {
		echo "Barang berhasil disimpan";
	}else{
		echo "Barang tersimpan<br>";
		echo mysqli_error($db);
	}
}

$id_barang = $_GET['id'];

$sql = "SELECT nama_barang,id_barang,jumlah_barang,id_jenis,keadaan_barang FROM barang WHERE id_barang = '$id_barang'";
$data = mysqli_query($db,$sql);

$barang = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Inventori</title>
</head>
<body>
		<form method="POST">
			<label>Nama Barang :</label>
			<input type="text" name="nama" value="<?php echo $barang['nama_barang'] ?>"><br>
			<label>Jumlah Barang :</label>
			<input type="number" name="jumlah" value="<?php echo $barang['jumlah_barang'] ?>"><br>
			<label>Jenis :</label>
			<select name="jenis">
				<option value="<?php echo $barang['id_jenis'] ?>"><?php echo $barang['id_jenis'] ?></option>
				<option value="1">Berbahaya</option>
				<option value="2">Mudah Pecah</option>
				<option value="3">Beracun</option>
			</select><br>
			<label>Keadaan :</label>
			<select name="keadaan">
				<option value="<?php echo $barang['keadaan_barang'] ?>"><?php echo $barang['keadaan_barang'] ?></option>
				<option value="baru">Baru</option>
				<option value="bekas">Bekas</option>
			</select><br>
			<input type="submit" name="kirim" value="Simpan">
		</form>

</body>
</html>