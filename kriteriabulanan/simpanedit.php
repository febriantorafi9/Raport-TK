<?php 
	include "../koneksi.php";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$update = mysqli_query($koneksi, "UPDATE kriteria_nilai_bulanan SET nama_kriteria_bulanan='$_POST[txtnama]'
														   WHERE id_kriteria_nilai_bulanan='$_POST[txtkrit]'");

		if ($update) {
			header('location:kritbulanan.php');
		}else{
			echo "Belum Dapat Mengupdate Data...";
		}
	}
?>