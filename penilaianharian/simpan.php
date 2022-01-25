<?php 
	include "../koneksi.php";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$simpan = mysqli_query($koneksi, "INSERT INTO nilai_harian (id_nilai_harian,tgl_ambil_nilai,id_kriteria_harian,noinduk_siswa,nilai)
			VALUES('$_POST[txtharian]', '$_POST[txtambil]', '$_POST[txtkrit]', '$_POST[txtsiswa]', '$_POST[txtnilai]')");

		if ($simpan) {
			header('location:nilaiharian.php');
		}else{
			echo "Belum Dapat Menambahkan Data..";
		}
	}
?>