<?php  
	include "../koneksi.php";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$simpan = mysqli_query($koneksi, "INSERT INTO siswa (noinduk_siswa,nik_walmur,nama_siswa,jenis_kelamin,tgllahir,tgl_masuk,tgl_lulus,alamat,anakke)
			VALUES('$_POST[txtnis]', '$_POST[txtwalmur]', '$_POST[txtnama]', '$_POST[txtkelamin]', '$_POST[txtllahir]', '$_POST[txtmasuk]', '$_POST[txtlulus]', '$_POST[txtalamat]', '$_POST[txtanakke]')");

		if ($simpan) {
			header('location:siswa.php');
		}else{
			echo "Belum Dapat Menambahkan Data..";
		}
	}
?>