<?php 
	include "../koneksi.php";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$simpan = mysqli_query($koneksi, "INSERT INTO rapot (id_rapot,noinduk_siswa,cat_rapor,semester,nilai)
			VALUES('$_POST[txtrapot]', '$_POST[txtsiswa]', '$_POST[txtcat]', '$_POST[txtsemester]', '$_POST[txtnilai]')");

		if ($simpan) {
			header('location:rapot.php');
		}else{
			echo "Gagal Menambahkan Data..";
		}
	}
?>