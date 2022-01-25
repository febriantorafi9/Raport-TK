<?php 
	include "../koneksi.php";

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$simpan = mysqli_query($koneksi, "INSERT INTO nilai_bulanan (id_nilai_bulanan,id_kriteria_nilai_bulanan,bulan_ambil_nilai,noinduk_siswa,nilai)
			VALUES('$_POST[id_nilai_bulanan]', '$_POST[id_kriteria_nilai_bulanan]', '$_POST[bulan_ambil_nilai]', '$_POST[noinduk_siswa]', '$_POST[nilai]')");

		if ($simpan) {
			header('location:nilaibulanan.php');
		}else{
			echo "Belum Dapat Menambahkan Data..";
		}
	}
/*	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$simpan = mysqli_query($koneksi, "INSERT INTO nilai_bulanan (id_nilai_bulanan,id_kriteria_nilai_bulanan,bulan_ambil_nilai,noinduk_siswa,nilai)
			VALUES('$_POST[id_nilai_bulanan]', '$_POST[id_kriteria_nilai_bulanan]', '$_POST[bulan_ambil_nilai]', '$_POST[noinduk_siswa]', '$_POST[nilai]')");

		if ($simpan) {
			header('location:nilaibulanan.php');
		}else{
			echo "Gagal Menambahkan Data..";
		}
	} */
?>