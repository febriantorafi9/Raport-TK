<?php 
	include "../koneksi.php";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$update = mysqli_query($koneksi, "UPDATE nilai_bulanan SET id_kriteria_nilai_bulanan='$_POST[txtkrit]',
														   noinduk_siswa='$_POST[txtsiswa]',
														   bulan_ambil_nilai='$_POST[txtambil]',
														   nilai='$_POST[txtnilai]'
														   WHERE id_nilai_bulanan='$_POST[txtbulanan]'");

		if ($update) {
			header('location:nilaibulanan.php');
		}else{
			echo "Belum Dapat Mengupdate Data...";
		}
}
?>