<?php 
	include "../koneksi.php";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$update = mysqli_query($koneksi, "UPDATE siswa SET nik_walmur='$_POST[txtwalmur]',
														   nama_siswa='$_POST[txtnama]',
														   jenis_kelamin='$_POST[txtkelamin]',
														   tgllahir='$_POST[txtllahir]',
														   tgl_masuk='$_POST[txtmasuk]',
														   tgl_lulus='$_POST[txtlulus]',
														   alamat='$_POST[txtalamat]',
														   anakke='$_POST[txtanakke]'
														   WHERE noinduk_siswa='$_POST[txtnis]'");

		if ($update) {
			header('location:siswa.php');
		}else{
			echo "Belum Dapat Mengupdate Data...";
		}
}
?>