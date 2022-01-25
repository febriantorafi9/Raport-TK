<?php 
	include "../koneksi.php";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$update = mysqli_query($koneksi, "UPDATE kriteria_nilai_harian SET nama_kriteria_harian='$_POST[txtnama]'
														   WHERE id_kriteria_harian='$_POST[txtkrit]'");

		if ($update) {
			header('location:kritharian.php');
		}else{
			echo "Belum Dapat Mengupdate Data...";
		}
	}
?>