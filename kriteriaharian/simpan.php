<?php 
	include "../koneksi.php";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$simpan = mysqli_query($koneksi, "INSERT INTO kriteria_nilai_harian (id_kriteria_harian,nama_kriteria_harian)
			VALUES('$_POST[txtkrit]', '$_POST[txtnama]')");

		if ($simpan) {
			header('location:kritharian.php');
		}else{
			echo "Belum Dapat Menambahkan Data..";
		}
	}
?>