<?php 
	include "../koneksi.php";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$simpan = mysqli_query($koneksi, "INSERT INTO kriteria_nilai_bulanan (id_kriteria_nilai_bulanan,nama_kriteria_bulanan)
			VALUES('$_POST[txtkrit]', '$_POST[txtnama]')");

		if ($simpan) {
			header('location:kritbulanan.php');
		}else{
			echo "Belum Dapat Menambahkan Data..";
		}
	}
?>