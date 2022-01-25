<?php 
	include "../koneksi.php";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$update = mysqli_query($koneksi, "UPDATE rapot SET noinduk_siswa='$_POST[txtnis]',
														   cat_rapor='$_POST[txtcat]',
														   semester='$_POST[txtsemester]',
														   nilai='$_POST[txtnilai]'
														   WHERE id_rapot='$_POST[txtrapot]'");

		if ($update) {
			header('location:rapot.php');
		}else{
			echo "Gagal Mengupdate Data...";
		}
	}
?>