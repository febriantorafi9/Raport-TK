<?php 
	include "../koneksi.php";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$update = mysqli_query($koneksi, "UPDATE nilai_harian SET id_kriteria_harian='$_POST[txtkrit]',
														   noinduk_siswa='$_POST[txtsiswa]',
														   tgl_ambil_nilai='$_POST[txtambil]',
														   nilai='$_POST[txtnilai]'
														   WHERE id_nilai_harian='$_POST[txtharian]'");

		if ($update) {
			header('location:nilaiharian.php');
		}else{
			echo "Gagal Mengupdate Data...";
		}
}
?>